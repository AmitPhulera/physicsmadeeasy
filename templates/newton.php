<tr>
	<td><?php echo $t; ?></td>
	<td><input type="text" name="lms<?php echo $x; ?>"></td>
	<td><input type="text" name="lvs<?php echo $x; ?>" value="<?php if($boolLvs[$x]) echo $lvs[$x]; ?>"></td>
	<td id="col_a<?php echo $x; ?>"><?php if($boolLms[$x] && $boolLvs[$x] ) { $acm[$x]=($lms[$x]+(.001*$lvs[$x])); echo $acm[$x];}?></td>
	<td><input type="text" name="rms<?php echo $x; ?>" ></td>
	<td><input type="text" name="rvs<?php echo $x; ?>" ></td>
	<td id="col_b<?php echo $x; ?>"></td>
	<td id="col_c<?php echo $x; ?>"></td>
	<td id="col_d<?php echo $x; ?>"></td>
	<td id="col_e<?php echo $x; ?>"></td>
</tr>