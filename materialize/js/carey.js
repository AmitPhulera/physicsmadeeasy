$( document ).ready(function(){
      		 $(".button-collapse").sideNav();
});
      	$("#form1").on('submit', function(event) {
      		$.ajax({
      			url: './controller.php',
      			type: 'POST',
      			dataType: 'json',
      			data: $(this).serialize(),
      			success:function(result) {
              var len=Object.keys(result.t).length;
              for (var item in result.t)
              {
                $("#t"+item).html(result.t[item]);
              }
              for (var item in result.difference)
              {
                $("#diff"+item).html(result.difference[item]);
              }
              var mean=result.sum/len;
              $("#mean-container").removeClass('hidden');
              $("#con_2").removeClass('hidden');
              $("#mean1").attr('value', mean);
              $("#mean").html(mean);
      				
      			}
      		});
      		event.preventDefault();
         }); 
        $("#form2").on('submit', function(event) {
          $.ajax({
            url: './controller.php',
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
            success:function(result) {
              var len=Object.keys(result.t).length;
              for (var item in result.difference)
              {
                $("#col_a"+item).html(result.difference[item]);
              }
              for (var item in result.t)
              {
                $("#col_b"+item).html(result.t[item]);
              }
             
              for (var item in result.dif)
              {
                $("#col_c"+item).html(result.dif[item]);
              }
              var mean=result.sum/len;
              $("#mean-container2").removeClass('hidden');
              $("#con_3").removeClass('hidden');
              $("#mean2").attr('value', mean);
              $("#meann").html(mean);

              
          
              
              
            }
          });
          event.preventDefault();
        });
          $("#form3").on('submit', function(event) {
          $.ajax({
            url: './controller.php',
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
            success:function(result) {
              
              $("#final").html(result.answer);
              
              $('#modal1').openModal();
              
            }
          });
          event.preventDefault();
        });