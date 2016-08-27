<tr>
	<td><?php echo $i+1;?></td>
	<td><input type="text" name="vt<?php echo $i;?>"/></td>
	<td><input type="text" name="it<?php echo $i;?>" > </td>
	<td id="col_a<?php echo $i;?>"> </td>
	<td id="col_b<?php echo $i;?>"> </td>
	<td id="col_c<?php echo $i;?>"><?php if(!empty($pow[$x])) { $logp = log10($pow[$x]); echo $logp; } ?></td>
	<td id="col_d<?php echo $i;?>"></td>
	<td id="col_e<?php echo $i;?>"></td>
</tr>	