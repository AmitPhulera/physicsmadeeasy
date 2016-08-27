<?php include("./templates/header.php"); ?>
<div class="container">
    <div class="row center">
      <div class="col-s12 z-depth-4 purple accent-1">
        <div class="card-panel purple accent-1"><h5>Coefficient Of Visousity</h5></div>
      </div>
    </div>
    <div class="row">
	    <div class="col s12">
		    <table class="striped z-depth-3 purple lighten-4">
		    	<thead>
					<tr>
						<th rowspan="2">S.No.</th>
						<th colspan="2">Manometer Readings</th>
						<th rowspan="2">Pressure Difference 'h'<br>(cm)</th>
						<th rowspan="2">Total Volume Of Water Collected<br>(cc)</th>
						<th rowspan="2">Time 't'<br>(sec)</th>
						<th rowspan="2">Volume of Water Collected Per Sec Q="v/t"<br>(cc/sec)</th>
					</tr>					
					<tr>
						<td>One End<br>(cm)</td>
						<td>Other End<br>(cm)</td>
					</tr>  
				</thead>  
				<form id="visc_form">
					<tbody>
						<?php
	              			for($i=0;$i<6;$i++)
	              			{
	              				include("./templates/vis.php");
	              			}
              			?>
              			<input type="hidden" name="exp" value="visc">
              		<tr>
            			<td colspan="7"><button type="submit" class="waves-effect waves-light btn" name="submit_visc" >Calculate</button></td>
            		 </tr>
					</tbody>
				</form>
			</table>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<table class="striped z-depth-3 purple lighten-4">
					<tr>
						<td><u>Radius</u> Of Capillary Tube</td>
						<td><input type="text" id="rad" ></td>
					</tr>
					<tr>
						<td>Length Of Capillary Tube</td>
						<td><input type="text" id="len"></td>
								
					</tr>
					<tr>
						<td>Slope of The Graph between h and q (i.e h/q)</td>
						<td><input type="text" id="slope"/></td> 
					</tr>
					<tr>
						<td colspan="2"><button type="submit" class="waves-effect waves-light btn modal-trigger" name="things" id="calc">Calculate</button></td>
					</tr>
				</table>
			</div>
		</div>
	</div>		
	<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Calculations Finished!!!</h4>
      <p>Viscousity Of Water is <span id="final"></span></p>
    </div> 
 
	<script type="text/javascript" src="materialize/js/jquery.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
     <script type="text/javascript" src="materialize/js/visc.js"></script>
    </body>
  </html>