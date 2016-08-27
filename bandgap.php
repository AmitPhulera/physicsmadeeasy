<?php include("./templates/header.php"); ?>
<div class="container">
    <div class="row center">
      <div class="col-s12 z-depth-4 purple accent-1">
        <div class="card-panel purple accent-1"><h5>Band Gap</h5></div>
      </div>
    </div>
    <div class="row">
	    <div class="col s12">
		    <table class="striped z-depth-3 purple lighten-4">
		    	<thead>
					<tr>
						<th>S.No. </th>
						<th>Temprature (&#xb0;C) </th>
						<th>Temprature (&#xb0;K) </th>
						<th>Reverse Saturation Current (I<sub>s</sub>)<br>&mu;A </th>
						<th>Log<sub>10</sub>I<sub>s</sub></th>
						<th> 10<sup>3</sup>/T</th>
					</tr>					
					
				</thead>  
				<form id="band_form">
					<tbody>
						<?php
	              			for($i=0;$i<7;$i++)
	              			{
	              				include("./templates/band.php");
	              			}
              			?>
              			<input type="hidden" name="exp" value="band">
              		<tr>
            			<td colspan="6"><button type="submit" class="waves-effect waves-light btn" name="submit_band" >Calculate</button></td>
            		 </tr>
					</tbody>
				</form>
			</table>
			</div>
		</div>
	</div>	
	<script type="text/javascript" src="materialize/js/jquery.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
     <script type="text/javascript" src="materialize/js/band.js"></script>
    </body>
  </html>
