<tr>
	<?php if($i==0): ?>
	<td rowspan="6" >First</td>
	<?php elseif ($i==6):?>
	<td rowspan="6" class="purple lighten-4">Second</td>	
	<?php endif; ?>
	<?php if($i==0 || $i==6): ?>
	<td rowspan="2" class="purple accent-2">Violet</td>
	<?php elseif ($i==2 || $i==8 ):?>
	<td rowspan="2" class="light-green lighten-3">Green</td>
	<?php elseif ($i==4 || $i==10 ):?>
	<td rowspan="2" class="lime accent-1">Yellow</td>
	<?php endif; ?>	
	<td>V<sub><?php if($i%2 == 0) echo 1; else echo 2;?></sub></td>
	<td><input type="text" name="lms<?php echo $i; ?>" ></td>
	<td ><input type="text" name="lvs<?php echo $i; ?>"></td>
	<td id="col_a<?php echo $i; ?>"></td>
	<td><input type="text" name="rms<?php echo $i; ?>"></td>
	<td><input type="text" name="rvs<?php echo $i; ?>"></td>
	<td id="col_b<?php echo $i; ?>"></td>
	<td id="col_c<?php echo $i; ?>"></td>
	<td id="col_d<?php echo $i; ?>"></td>
</tr>