<?php include("./templates/header.php"); ?>
<div class="container">
    <div class="row center">
      <div class="col-s12 z-depth-4 purple accent-1">
        <div class="card-panel purple accent-1"><h5>Magnetic Field</h5></div>
      </div>
    </div>
    <div class="row">
	    <div class="col s12">
		    <table class="striped z-depth-3 purple lighten-4">
		    	<thead>
						<tr>
							<th rowspan="3">S.No. </th>
							<th rowspan="3">Distance Of Needle From Center <br>(x cm) </th>
							<th colspan="6">Deflection in East Arm</th>
							<th colspan="6">Deflection In West Arm </th>
						</tr>
						<tr>
							<th colspan="2">Current One Way</th>
							<th colspan="2">Current Reversed</th>
							<th rowspan="2">Mean</th>
							<th rowspan="2">tan&#952; </th>
							<th colspan="2">Current One Way</th>
							<th colspan="2">Current Reversed</th>
							<th rowspan="2">Mean</th>
							<th rowspan="2">tan&#952; </th>
						</tr>
						<tr>
							<th>&#952;<sub>1</sub></th>
							<th>&#952;<sub>2</sub></th>
							<th>&#952;<sub>3</sub></th>
							<th>&#952;<sub>4</sub></th>
							<th>&#952;<sub>1</sub></th>
							<th>&#952;<sub>2</sub></th>
							<th>&#952;<sub>3</sub></th>
							<th>&#952;<sub>4</sub></th>
						</tr>					
					
				</thead>  
				<form id="magnetic_form">
					<tbody>
						<?php
	              			for($i=0;$i<11;$i++)
	              			{
	              				include("./templates/magnetic.php");
	              			}
              			?>
              			<input type="hidden" name="exp" value="magnetic">
              		<tr>
            			<td colspan="14"><button type="submit" class="waves-effect waves-light btn" name="submit_magnetic" >Calculate</button></td>
            		 </tr>
					</tbody>
				</form>
			</table>
			</div>
		</div>
	</div>	
	<script type="text/javascript" src="materialize/js/jquery.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
     <script type="text/javascript" src="materialize/js/magnetic.js"></script>
    </body>
  </html>
