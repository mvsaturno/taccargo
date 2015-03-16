$(document).ready(function() {
	CalcItems.init();
});

var CalcItems = {

	observeCalc: function(main_calc){
		$(main_calc).on('click', function(){
			$.colorbox({
	            inline: true,
	            href:"#calc_peso_cubado",
	            open: true,
	            scrolling: true,
	            title: "Informe os valores em metros:",
	            width: "900px",
	            height: "400px"
            });
            $("[id*=altura_pcub_]").mask("ZZ.ZZ", {reverse: true, 'translation':{
																				0: {pattern: /[0-9]/}, 
																				"Z": {pattern: /[0-9]/, optional: true}
																				}
			});
	        $("[id*=largura_pcub_]").mask("0Z.0Z", {reverse: true, 'translation':{
																				0: {pattern: /[0-9]/}, 
																				"Z": {pattern: /[0-9]/, optional: true}
																				}
			});
	        $("[id*=profundidade_pcub_]").mask("0Z.0Z", {reverse: true, 'translation':{
																				0: {pattern: /[0-9]/}, 
																				"Z": {pattern: /[0-9]/, optional: true}
																				}
			});
	        $("[id*=quantidade_pcub_]").mask("0000000");
		}).bind(this);
	},

	calculateItem: function(calculate_item_calc){
		$(calculate_item_calc).on('click', function(){
			var items = calculate_item_calc.closest($("div[id^=cubado_item_]"));
			// console.log("items: ");
			// console.log(items);
			var altura, largura, profundidade, quantidade;

			altura = items.find("[id*=altura]").val();
			largura = items.find("[id*=largura]").val();
			profundidade = items.find("[id*=profundidade]").val();
			quantidade = items.find("[id*=quantidade]").val();

			if (altura == '' || largura == '' || profundidade == '' || quantidade == '') {
				alert("Erro! Forneça os dados para o cálculo!");
			} else{
				var cuba_decimal = new Number(eval(parseFloat(largura) * parseFloat(altura) * parseFloat(profundidade)));
				if(quantidade != '') cuba_decimal = cuba_decimal * quantidade;
				cuba_decimal = cuba_decimal.toFixed(3);
				// console.log(cuba_decimal);
				items.find("[id*=cubagem]").val(cuba_decimal);

				var densidade_decimal = new Number(eval(300 * eval(parseFloat(largura) * parseFloat(altura) * parseFloat(profundidade))));
				if(quantidade != '') densidade_decimal = densidade_decimal * quantidade;
				densidade_decimal = densidade_decimal.toFixed(2);
				// console.log(densidade_decimal);
				items.find("[id*=densidade]").val(densidade_decimal);

				//calcula total:
				var total = $("[id*=densidade_pcub_]");
				var soma = 0;
				for (var i = 0; i < total.length; i++) {
					soma += Math.round((total[i]).value*100)/100;
				}
				$("#total_cubado").val(soma);
				// console.log(soma);
			}
		});
	},

	observeNewCalc: function(div_img_calc){
		// console.log(e);
		// console.log($(div_img_calc));
		this.calculateItem($(div_img_calc));
	},

	observeDeleteItem: function(item){
		var row = $(item).closest($("div[id^=cubado_item_]"));
		console.log(row);
		row.remove();
	},

	observeAddBtn: function(add_item_btn){
		$(add_item_btn).on('click', function(){
			//verificar a quantidade de campos existentes e ver se já foram calculados
			//A verificação pode ser feita observando apenas o último campo: #densidade_pcub_X
			var calculados = $("[id*=densidade_pcub_]");
			var emptycounter = 0;
			for (var i = 0; i < calculados.length; i++) {
				if (calculados[i].value === '' || calculados[i].value === "NaN") {
					emptycounter++;
				}
			}

			if (emptycounter > 0) {
				alert("Erro! Calcule o total dos items já adicionados anteriormente.");
			} else {
				var ids_arr = $("[id^=cubado_item_]");
                var number_ids = [];
                for (var i = 0; i < ids_arr.length; i++) {
                    number_ids.push(ids_arr[i].id.replace('cubado_item_',''));
                }
                //Gerar o ID do próximo conjunto a ser adicionado
                // console.log(number_ids[number_ids.length-1]);
                var next_id = parseInt(number_ids[number_ids.length-1]);
                next_id++
                //adicionar campo no form:
                $("#cubado_items").append('<div id="cubado_item_'+next_id+'"><dl class="form_input_six"><dt><label for="altura_pcub_'+next_id+'">Altura:</label></dt><dt><input type="text" name="altura_pcub_'+next_id+'" id="altura_pcub_'+next_id+'" class="calc_item" /></dt></dl><dl class="form_input_six"><dt><label for="largura_pcub_'+next_id+'">Largura:</label></dt><dt><input type="text" name="largura_pcub_'+next_id+'" id="largura_pcub_'+next_id+'" class="calc_item" /></dt></dl><dl class="form_input_six"><dt><label for="profundidade_pcub_'+next_id+'">Profundidade:</label></dt><dt><input type="text" name="profundidade_pcub_'+next_id+'" id="profundidade_pcub_'+next_id+'" class="calc_item" /></dt></dl><dl class="form_input_six"><dt><label for="quantidade_pcub_'+next_id+'">Quantidade:</label></dt><dt><input type="text" name="quantidade_pcub_'+next_id+'" id="quantidade_pcub_'+next_id+'" class="calc_item" /></dt></dl><dl class="form_input_six"><dt><label for="cubagem_pcub_'+next_id+'">Cubagem (m³):</label></dt><dt><input type="text" readonly name="cubagem_pcub_'+next_id+'" id="cubagem_pcub_'+next_id+'" class="calc_item" /></dt></dl><dl class="form_input_six"><dt><label for="densidade_pcub_'+next_id+'">Densidade:</label></dt><dt><input type="text" readonly name="densidade_pcub_'+next_id+'" id="densidade_pcub_'+next_id+'" class="calc_item" /></dt></dl><div class="calc_buttons_wrap"><div class="calculate_item_calc" onClick="CalcItems.observeNewCalc(this)"><img src="img/calc.png" /></div><div class="remove_item_calc" onclick="CalcItems.observeDeleteItem(this)"><img src="img/remove.png" /></div></div></div>');
			}

		}.bind(this));
	},

	observeCalculado: function(calculado){
		$(calculado).on('click', function(){
			// console.log($("#total_cubado").val());
			// console.log($("#peso_cubado").val());
			if ($("#total_cubado").val() != "NaN" || $("#total_cubado").val() != '') {
				$("#peso_cubado").val($("#total_cubado").val());
				$.colorbox.close();
			}
		});
	},

	init: function(){
		var main_calc = $('#div_img_calc');
		var add_item_btn = $("#cubagem_add_btn");
        var calc_item = $(".calculate_item_calc");
        var calculado = $("#calculado");

        this.observeCalc(main_calc);
        this.calculateItem(calc_item);
        this.observeAddBtn(add_item_btn);
        this.observeCalculado(calculado);
	}
}