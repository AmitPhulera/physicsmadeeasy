<?php include("./templates/header.php"); ?>
<div class="container">
    <div class="row center">
      <div class="col-s12 z-depth-4 purple accent-1">
        <div class="card-panel purple accent-1"><h5>Newton Ring</h5></div>
      </div>
    </div>
    <div class="row">
	    <div class="col s12">
		    <table class="striped z-depth-3 purple lighten-4">
		    	<thead>
					<tr>
						<th rowspan="3" >No.Of Rings </th>
						<th colspan="6">Microscope Readings</th>
						<th rowspan="3">Diameter <br>D=a-b<br>(cm) </th>
						<th rowspan="3">D<sup>2</sup><br>(a-b)<sup>2</sup></th>
						<th rowspan="3">(D<sub>n+p</sub>-D<sub>n</sub>)<sup>2</sup></th>
						
						
						
					</tr>
					<tr>
						<th colspan="3">Left Hand Readings</th>
						<th colspan="3">Right Hand Readings</th>
						
					</tr>
					
					<tr>
						<th>M.S</th>
						<th>V.S</th>
						<th>Total<br>a cm</th>
						<th>M.S</th>
						<th>V.S</th>
						<th>Total<br>a cm</th>
					</tr>					
					
				</thead>  
				<form id="newton_form">
					<tbody>
						<?php
	              			for($x=0;$x<16;$x++)
	              			{
	              				$t=16-$x;
	              				include("./templates/newton.php");
	              			}
              			?>
              			<input type="hidden" name="exp" value="newton">
              		<tr>
            			<td colspan="14"><button type="submit" class="waves-effect waves-light btn" name="submit_newton" >Calculate</button></td>
            		 </tr>
					</tbody>
				</form>
			</table>
			</div>
		</div>
	</div>	
	<script type="text/javascript" src="materialize/js/jquery.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
     <script type="text/javascript" src="materialize/js/newton.js"></script>
    </body>
  </html>
