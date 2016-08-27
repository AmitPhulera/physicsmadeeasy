<?php include("./templates/header.php"); ?>
<div class="container">
    <div class="row center">
      <div class="col-s12 z-depth-4">
        <div class="card-panel purple accent-1"><h5>Calibrate An Ammeter</h5></div>
      </div>
    </div>
    <div class="row purple lighten-4 center-align">
    	
			<div class="input-field col s6">
		            <input id="emf" type="text" name="emf" >
		            <label for="emf">EMF Of Cell</label>
		    </div>
	     	<div class="input-field col s6">
	                
	            	<button type="submit" class="waves-effect waves-light btn" id="share">Share EMF</button>
	        </div> 
        
    </div>       
</div> 
<div class="container hidden" id="con">
	<div class="row">
		<div class="col s12 ">
			<table class="striped z-depth-3 purple lighten-4" style="">
      
              <thead>
                <tr>
					<th>S.No.</th>
					<th>Balancing Length Corresponding To The EMF Of Standard Cell<br>l<sub>1</sub> in cm</th>
					<th>Balancing Length Corresponding To The P.D Across MN Of Resistance (R)<br>l<sub>2</sub> in cm</th>
					<th>Actual P.D <br>V= E*(l<sub>2</sub>/l<sub>1</sub>)<br>(volts)</th>
					<th>I<sub>2</sub>=V<sub>2</sub></th>
					<th>Observed Current In Ammeter<br>(I<sub>1</sub>)</th>
					<th>Error <br>(I<sub>1</sub>-I<sub>2</sub>)</th>
				
                </tr>
              </thead>
              <form id="amm_form">
              	<tbody>
              		<?php
              			for($i=0;$i<30;$i++)
              			{
              				include("./templates/amm.php");
              			}
              		?>
              		<input type="hidden" name="emf" id="in_emf">
              		<input type="hidden" name="exp" value="amm">
              		<tr>
            				<td colspan="7"><button type="submit" class="waves-effect waves-light btn" name="submit_cf" >Calculate</button></td>
            		 </tr>
              	</tbody>
              </form>
            </table>    
		</div>
		<div class="offset-s1"></div>
	</div>
</div>
 	<script type="text/javascript" src="materialize/js/jquery.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="materialize/js/ammeter.js"></script>
</body>
</html>  