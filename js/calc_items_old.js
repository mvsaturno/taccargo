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
		}).bind(this);
	},

	observeAddBtn: function(add_item_btn){
		$(add_item_btn).on('click', function(){
			var ids_arr = $("[id^=cubado_item_]");
                var number_ids = [];
                for (var i = 0; i < ids_arr.length; i++) {
                    number_ids.push(ids_arr[i].id.replace('cubado_item_',''));
                }
                //Gerar o ID do próximo conjunto a ser adicionado
                console.log(number_ids[number_ids.length-1]);
                var y = parseInt(number_ids[number_ids.length-1]);
                // console.log(++y);
                var empty_fields = this.calc_fieldEmpty(ids_arr);

                if (empty_fields === 0) {
                    //Adicionar campo!
                } else {
                    if (empty_fields === 1) {
                        alert("Por favor, clique na calculadora pra calcular o volume dos items já adicionados primeiro.");
                    } else{
                    alert("Por favor, calcule o volume dos items já adicionados! Ainda faltam "+ empty_fields +" campos.");
                    }
                }
		}.bind(this));
	},

	calc_fieldEmpty: function(items_wrapper_ids){
        var counter = 0;

        for (var i = 0; i < items_wrapper_ids.length; i++) {
            var x = $("#"+items_wrapper_ids[i].id+" .calc_item");
            
            for (var i = 0; i < x.length; i++) {
               if (x[i].value === "") {
                    counter++;
                }
            }

        }
        return counter;
	},

    calculateItem: function(calc_item){
        var ids_arr = $("[id^=cubado_item_]");
        $(calc_item).on('click', function(){
            // alert("clicou na calculadora!");
            var empty_fields = this.calc_fieldEmpty(ids_arr);

                if (empty_fields === 0) {
                    console.log($(calc_item));
                } else {
                    if (empty_fields === 1) {
                        
                    } else{
                    alert("Por favor, calcule o volume dos items já adicionados! Ainda faltam "+ empty_fields +" campos.");
                    }
                }
        }.bind(this));
    },

	init: function(){
		var main_calc = $('#div_img_calc');
		var add_item_btn = $("#cubagem_add_btn");
        var calc_item = $(".calculate_item_calc");

		this.observeCalc(main_calc);
		this.observeAddBtn(add_item_btn);
        this.calculateItem(calc_item);
	}
}