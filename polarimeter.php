<?php include("./templates/header.php"); ?>
<div class="container">
    
    <div class="row">
	    <div class="col s12">
		    <table class="striped z-depth-3 purple lighten-4">
		    <caption class="card-panel purple accent-1 z-depth-3"><h5>Polarimeter</h5></caption>
		    	<thead class="z-depth-1">
					<tr>
						<th rowspan="3">S.No.</th>
						<th colspan="7">Analyser Readings<br> (Clockwise)</th>
						<th rowspan="3">X= b&#xb0;-a&#xb0; </th>
						<th colspan="7">Analyser Readings <br> (AntiClockwise)</th>
						<th rowspan="3">Y= c&#xb0;-d&#xb0; </th>
						<th rowspan="3">Mean= (X+Y)/2 </th>
						
						
					</tr>	
					<tr>
						
						<th colspan="3">Reading With Pure Water(a&#xb0;)</th>
						
						
						<th rowspan="2">Concentration</th>
						<th colspan="3">Reading With Sugar Solution (b&#xb0;)</th>
						<th colspan="3">Reading With Pure Water(c&#xb0;)</th>
						
						
						<th rowspan="2" >Concentration</th>
						<th colspan="3">Reading With Sugar Solution(d&#xb0;)</th>
					</tr>	
					<tr>
						<th>M.S</th>
						<th>V.S</th>
						<th>T.R</th>
						<th>M.S</th>
						<th>V.S</th>
						<th>T.R</th>
						
						<th>M.S</th>
						<th>V.S</th>
						<th>T.R</th>
						<th>M.S</th>
						<th>V.S</th>
						<th>T.R</th>
					</tr>					
					
				</thead>  
				<form id="polarimeter_form">
					<tbody>
						<?php
	              			for($x=0;$x<3;$x++)
	              			{
	              				include("./templates/polarimeter.php");
	              			}
              			?>
              			<input type="hidden" name="exp" value="polarimeter">
              		<tr>
            			<td colspan="18"><button type="submit" class="waves-effect waves-light btn" name="submit_polarimeter" >Calculate</button></td>
            		 </tr>
					</tbody>
				</form>
			</table>
			</div>
		</div>
	</div>	
	<script type="text/javascript" src="materialize/js/jquery.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
     <script type="text/javascript" src="materialize/js/polarimeter.js"></script>
    </body>
  </html>
