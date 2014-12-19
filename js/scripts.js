/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
    $( "#data" ).datepicker({
      showOn: "button",
      buttonImage: "img/calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date"
    });
    
    $("#site_transportes").hover(
        function() {
          $("#img_site_transportes").removeClass("displayNone");
        }, function() {
          $("#img_site_transportes").addClass("displayNone");
        }
      );
      
      $("#site_sefaz").hover(
        function() {
          $("#img_site_sefaz").removeClass("displayNone");
        }, function() {
          $("#img_site_sefaz").addClass("displayNone");
        }
      );
      
      $("#site_setcergs").hover(
        function() {
          $("#img_site_setcergs").removeClass("displayNone");
        }, function() {
          $("#img_site_setcergs").addClass("displayNone");
        }
      );
      
  });
