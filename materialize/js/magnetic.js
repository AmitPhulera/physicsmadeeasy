$( document ).ready(function(){
           $(".button-collapse").sideNav();
});
$("#magnetic_form").on('submit', function(event) {
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
          
       }
  		});
  event.preventDefault();
}); 