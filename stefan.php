<?php include("./templates/header.php"); ?>
<div class="container">
    <div class="row center">
      <div class="col-s12 z-depth-4">
        <div class="card-panel purple accent-1"><h5>Verify Stefan's Law</h5></div>
      </div>
    </div>
    <div class="row purple lighten-4 center-align">
    	
			<div class="input-field col s6">
		            <input id="vol" type="text" name="vol" required>
		            <label for="vol">Enter Draper Voltage (V<sub>d</sub>)</label>
		    </div>
        <div class="input-field col s6">
                <input id="cur" type="text" name="cur" required >
                <label for="cur">Enter Current(I<sub>d</sub>)</label>
        </div>
        <div class="input-field col s6">
                <input id="temp" type="text" name="temp" required>
                <label for="temp">Enter Room Temprature in &#xb0;Kelvin </label>
        </div>
	     	<div class="input-field col s6">
	                
	            	<button type="submit" class="waves-effect waves-light btn" id="share">Calculate Draper resistance</button>
	        </div> 
        
    </div>       
</div> 
<div class="container" id="con">
	<div class="row">
		<div class="col s12 ">
			<table class="striped z-depth-3 purple lighten-4" style="">
              <thead>
                <tr>
        					
                      <th>S.No. </th>
                      <th>V<sub>t</sub> </th>
                      <th>I<sub>t</sub> </th>
                      <th>R<sub>t</sub>=(V<sub>t</sub>/I<sub>t</sub>) </th>
                      <th>P=V<sub>t</sub>*I<sub>t</sub> </th>
                      <th>Log<sub>10</sub>P</th>
                      <th>T=T<sub>r</sub>(R<sub>t</sub>/R<sub>a</sub>)<sup>.833</sup></th>
                      <th>Log<sub>10</sub>P</th>
                    
				
                </tr>
              </thead>
              <form id="stefan_form">
              	<tbody>
              		<?php
              			for($i=0;$i<29;$i++)
              			{
              				include("./templates/stefan.php");
              			}
              		?>
              		<input type="hidden" name="room" id="room">
                  <input type="hidden" name="rd" id="rd">
                  
              		<input type="hidden" name="exp" value="stefan">
              		<tr>
            				<td colspan="8"><button type="submit" class="waves-effect waves-light btn" name="submit_cf" >Calculate</button></td>
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
    <script type="text/javascript" src="materialize/js/stefan.js"></script>
</body>
</html>  