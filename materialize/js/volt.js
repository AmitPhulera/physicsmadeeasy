$( document ).ready(function(){
           $(".button-collapse").sideNav();
});
$("#share").on('click', function(event) {
  
  var x=$("#emf").val();
  if(x!="")
    $("#con").removeClass('hidden');
  console.log(x);
  $("#in_emf").attr('value', x);
  event.preventDefault();
  
});
$("#amm_form").on('submit', function(event) {
  		$.ajax({
  			url: './controller.php',
  			type: 'POST',
  			dataType: 'json',
  			data: $(this).serialize(),
  			success:function(result) {
          
          for (var item in result.first)
          {
            $("#col_a"+item).html(result.first[item]);
            
          }
          for (var item in result.last)
          {
            $("#col_c"+item).html(result.last[item]);
          }
          
  				
  			}
  		});
  event.preventDefault();
}); 