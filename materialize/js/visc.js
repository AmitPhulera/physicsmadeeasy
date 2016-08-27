$( document ).ready(function(){
           $(".button-collapse").sideNav();
});
$("#visc_form").on('submit', function(event) {
  		$.ajax({
  			url: './controller.php',
  			type: 'POST',
  			dataType: 'json',
  			data: $(this).serialize(),
  			success:function(result) {
          
          for (var item in result.vis)
          {
            $("#col_a"+item).html(result.vis[item]);

          }
       }
  		});
  event.preventDefault();
}); 
$("#calc").on('click',function(event){
    var rad=$("#rad").val();
    var len=$("#len").val();
    var slope=$("#slope").val();
    var cal=(3.14*980*rad*rad*rad*rad*slope)/(8*len);
    $("#final").html(cal);
    $('#modal1').openModal();
    event.preventDefault();
});