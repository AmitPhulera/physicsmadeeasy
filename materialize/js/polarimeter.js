$( document ).ready(function(){
  $('.loader').hide();
           $(".button-collapse").sideNav();
});
$("#polarimeter_form").on('submit', function(event) {
  		$.ajax({
  			url: './controller.php',
  			type: 'POST',
  			dataType: 'json',
  			data: $(this).serialize(),
  			success:function(result) {
          
          for (var item in result.col1)
          {
            $("#col_a"+item).html(result.col1[item]);

          }
          for (var item in result.col2)
          {
            $("#col_b"+item).html(result.col2[item]);

          }
          for (var item in result.col3)
          {
            $("#col_c"+item).html(result.col3[item]);

          }
          for (var item in result.col4)
          {
            $("#col_d"+item).html(result.col4[item]);

          }
          for (var item in result.col5)
          {
            $("#col_e"+item).html(result.col5[item]);

          }
          for (var item in result.col6)
          {
            $("#col_f"+item).html(result.col6[item]);

          }
          for (var item in result.col7)
          {
            $("#col_g"+item).html(result.col7[item]);

          }
       }
  		});
  event.preventDefault();
}); 