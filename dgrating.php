<?php include("./templates/header.php"); ?>
<div class="container">
    <div class="row center">
      <div class="col-s12 z-depth-4 purple accent-1">
        <div class="card-panel purple accent-1"><h5>Diffraction Grating</h5></div>
      </div>
    </div>
    <div class="row">
	    <div class="col s12">
		    <table class="striped z-depth-3 purple lighten-4">
		    	<thead>
					<tr>
						<th rowspan="2">Order Of Spectrum</th>
						<th rowspan="2">Colour Of Light</th>
						<th rowspan="2">Kinds Of Vernier</th>
						<th colspan="3">Spectrum On Right Side Reading Of Telescope</th>
						<th colspan="3">Spectrum On Left Side Reading Of Telescope</th>
						<th rowspan="2">2&#952;=a-b</th>
						<th rowspan="2">&#952;</th>
							
						</tr>
						<tr>
							<th>M.S</th>
							<th>V.S</th>
							<th>T.S</th>
							<th>M.S</th>
							<th>V.S</th>
							<th>T.S</th>
						</tr>					
					  
				</thead>  
				<form id="grating_form">
					<tbody>
						<?php
	              			for($i=0;$i<12;$i++)
	              			{
	              				include("./templates/grating.php");
	              			}
              			?>
              			<input type="hidden" name="exp" value="grating">
              		<tr>
            			<td colspan="10"><button type="submit" class="waves-effect waves-light btn" name="submit_visc" >Calculate</button></td>
            		 </tr>
					</tbody>
				</form>
			</table>
			</div>
		</div>
	</div>
 	<script type="text/javascript" src="materialize/js/jquery.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="materialize/js/grating.js"></script>
</body>
</html>  		