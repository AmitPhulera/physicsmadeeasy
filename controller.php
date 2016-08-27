<?php
if(!empty($_POST["exp"]) && $_POST['exp']=="cf")
{
$sum=0;
for($a=0;$a<=5;$a++)		//this loop will set all the values entered by user in the given arrays 
{	
	$con="res".$a;
	$don="left".$a;
	$eon="right".$a;
	if(isset($_POST[$con]) && isset($_POST[$don]) && isset($_POST[$eon]))
	{	
		$res[$a]=$_POST[$con];   //These arrays store the values from the first table 
		$left[$a]=$_POST[$don];
		$right[$a]=$_POST[$eon];
		if(!empty($right[$a]) && (!empty($left[$a])))
		{
			$dif[$a]=($right[$a]-$left[$a]); 
		}
		if(isset($res[$a])&& isset($dif[$a]))
		{

				$tao[$a]= $res[$a]/$dif[$a];
				$tao[$a]=round($tao[$a],3);
				$sum=$sum+$tao[$a];
		}
	}

	
 }
 	$result['difference']=$dif;
 	$result['t']=$tao;
 	$result['sum']=$sum;
 	echo json_encode($result);
 	
}
if(!empty($_POST["exp"]) && $_POST['exp']=="cf1" && isset($_POST['mean']))
{
	$mean=$_POST['mean'];
	$sum=0;
	for($a=0;$a<=5;$a++)
	{
		$conn="ress".$a;
		$donn="leftt".$a;
		$eonn="rightt".$a;
		if(isset($_POST[$conn]) && isset($_POST[$donn]) && isset($_POST[$eonn]) &&(!empty($_POST[$conn])) &&(!empty($_POST[$donn])) &&(!empty($_POST[$eonn])))
		{	
			$ress[$a]=$_POST[$conn];   /*Storing the elements of the table in given arrays */
			$leftt[$a]=$_POST[$donn];
			$rightt[$a]=$_POST[$eonn];
			$dif[$a]=($rightt[$a]-$leftt[$a]); 
			$tao[$a]= $mean*$dif[$a];
			$diffrnc[$a]=$ress[$a]-$tao[$a];
			$sum=$sum+$diffrnc[$a];
		}
	}
	$result['difference']=$dif;
	$result['t']=$tao;
	$result['dif']=$diffrnc;
	$result['sum']=$sum;
	echo json_encode($result);
}	
if(!empty($_POST["exp"]) &&  $_POST['exp']=="xyz" && !empty($_POST["len"]) && !empty($_POST["rad"]) && !empty($_POST["mean"]) )
{ 
	$p= (($_POST["mean"]*3.14*$_POST["rad"]*$_POST["rad"])/$_POST["len"]);
	$ans["answer"]=$p;
	echo json_encode($ans);
	
}
if(!empty($_POST["exp"]) &&  $_POST['exp']=="amm" )
{
	for($a=0;$a<30;$a++)
	{
		$con="len".$a;
		$don="pd".$a;
		if(!empty($_POST[$con]) && !empty($_POST[$don]) && !empty($_POST["emf"]))
		{ 
			$len[$a]=$_POST[$con];
			$pd[$a]=$_POST[$don];
			$v[$a]=$_POST["emf"]*($len[$a]/1000);
			$diff[$a]=$pd[$a]-$v[$a];
			
		} 
		
	}
	$ans["first"]=$v;
	$ans["last"]=$diff;
	echo json_encode($ans);
}
if(!empty($_POST["exp"]) &&  $_POST['exp']=="visc"){
for($a=0;$a<6;$a++)
{	
	$con="vol".$a;
	$don="tim".$a;
	
	if(!empty($_POST[$con]) && !empty($_POST[$don]))
	{	
		$vol[$a]=$_POST[$con];   /*Storing the elements of the table in given arrays */
		$tim[$a]=$_POST[$don];
		$res[$a]=$vol[$a]/$tim[$a];
		
	}	
	
}
	$ans['vis']=$res;
	echo json_encode($ans);
}	
if(!empty($_POST["exp"]) &&  $_POST['exp']=="band")
{
	for($a=0;$a<8;$a++)
	{
		$con="temp".$a;
		$don="is".$a;
		if(!empty($_POST[$con]) && !empty($_POST[$don]))
		{
			$temp[$a]=$_POST[$con];
			$is[$a]=$_POST[$don];
			$tes[$a]=log10($is[$a]);
			$div[$a]=1000/$temp[$a];
			$kel[$a]=$temp[$a]+273;
		}
	}
	$ans["col1"]=$kel;
	$ans["col2"]=$tes;
	$ans["col3"]=$div;
	echo json_encode($ans);
}
if(!empty($_POST["exp"]) &&  $_POST['exp']=="stefan" &&  !empty($_POST["room"]) && !empty($_POST["rd"]))
{
	for($a=0;$a<29;$a++)
	{
		$con="vt".$a;
		$don="it".$a;
		if(!empty($_POST[$con]) && !empty($_POST[$don]))
		{
			$vt[$a]=$_POST[$con];
			$it[$a]=$_POST[$don];
			$res[$a]=$vt[$a]/$it[$a];
			$pow[$a]=$vt[$a]*$it[$a];
			$logp[$a] = round(log10($pow[$a]),4);
			$tmp=($_POST["room"]/800);
			$rr[$a]=($_POST["rd"]*(pow($tmp,1.2)));
			$t[$a]=$_POST["room"]*(pow(($res[$a]/$rr[$a]),.833));
			$t[$a]=round($t[$a],4);
			$logt[$a]=round(log10($t[$a]),4);
		}
	}
	
	$answ["col1"]=$res;
	$answ["col2"]=$pow;
	$answ["col3"]=$logp;
	$answ["col4"]=$t;
	$answ["col5"]=$logt;
	echo json_encode($answ);
}		
if(!empty($_POST["exp"]) &&  $_POST['exp']=="newton")
{
	$size=0;
	for($x=0;$x<16;$x++)
	{
		$con="lms".$x;
		$don="lvs".$x;
		$eon="rms".$x;
		$fon="rvs".$x;
		if(!empty($_POST[$con]) && !empty($_POST[$don]) && !empty($_POST[$eon]) && !empty($_POST[$fon])  )
		{
			$size=$size+1;
			$lms[$x]=$_POST[$con];
			$lvs[$x]=$_POST[$don];
			$rms[$x]=$_POST[$eon];
			$rvs[$x]=$_POST[$fon];
			$acm[$x]=($lms[$x]+(.001*$lvs[$x]));
			$bcm[$x]=($rms[$x]+(.001*$rvs[$x]));
			$dif[$x]=$acm[$x]-$bcm[$x];
			$sqr[$x]=$dif[$x]*$dif[$x];


		}
	}
	for($a=0;$a<$size/2;$a++)
	{
		$fin[$a]=($sqr[$a]-$sqr[$size-$a]);
	}
	$answ["col1"]=$acm;
	$answ["col2"]=$bcm;
	$answ["col3"]=$dif;
	$answ["col4"]=$sqr;
	$answ["col5"]=$fin;
	echo json_encode($answ);
}
if(!empty($_POST["exp"]) &&  $_POST['exp']=="grating")
{
	for($a=0;$a<12;$a++)
	{
		$con="lms".$a;
		$don="lvs".$a;
		$eon="rms".$a;
		$fon="rvs".$a;
		if(!empty($_POST[$con]) && !empty($_POST[$don]) && !empty($_POST[$eon]) && !empty($_POST[$fon]))
		{
			$lms[$a]=$_POST[$con];
			$lvs[$a]=$_POST[$don];
			$rms[$a]=$_POST[$eon];
			$rvs[$a]=$_POST[$fon];
			$acm[$a]=($lms[$a]+(.0083*$lvs[$a]));
			$bcm[$a]=($rms[$a]+(.0083*$rvs[$a]));
			$tang[$a]=$acm[$a]-$bcm[$a];
			$ang[$a]=$tang[$a]/2;
		}	
	}
	
	$answ["col1"]=$acm;
	$answ["col2"]=$bcm;
	$answ["col3"]=$tang;
	$answ["col4"]=$ang;	
	echo json_encode($answ);
}
if(!empty($_POST["exp"]) &&  $_POST['exp']=="magnetic")
{
	for($a=0;$a<12;$a++)
	{
		$con="eanga".$a;
		$don="eangb".$a;
		$eon="eangc".$a;
		$fon="eangd".$a;
		$gon="wanga".$a;
		$hon="wangb".$a;
		$ion="wangc".$a;
		$jon="wangd".$a;
		if(!empty($_POST[$con]) && !empty($_POST[$don]) && !empty($_POST[$eon]) && !empty($_POST[$fon]) && !empty($_POST[$gon]) && !empty($_POST[$hon]) && !empty($_POST[$ion]) && !empty($_POST[$jon]))
		{
			$eanga[$a]=$_POST[$con];
			$eangb[$a]=$_POST[$don];
			$eangc[$a]=$_POST[$eon];
			$eangd[$a]=$_POST[$fon];
			$wanga[$a]=$_POST[$gon];
			$wangb[$a]=$_POST[$hon];
			$wangc[$a]=$_POST[$ion];
			$wangd[$a]=$_POST[$jon];
			$meana[$a]=(($eanga[$a]+$eangb[$a]+$eangc[$a]+$eangd[$a])/4);
			$tana[$a]=tan(deg2rad($meana[$a]));
			$tana[$a]=round($tana[$a],4);
			$meanb[$a]=(($wanga[$a]+$wangb[$a]+$wangc[$a]+$wangd[$a])/4);
			$tanb[$a]=tan(deg2rad($meanb[$a]));
			$tanb[$a]=round($tanb[$a],4);
		}
	}
	$answ["col1"]=$meana;
	$answ["col2"]=$tana;
	$answ["col3"]=$meanb;
	$answ["col4"]=$tanb;	
	echo json_encode($answ);
}	
if(!empty($_POST["exp"]) &&  $_POST['exp']=="polarimeter")	
{
	for($counter=0;$counter<=2;$counter++)
	{		/*As per input form field names these new variables will storing the values of form fields temporarily  */
		$con="cpms".$counter;
		$don="cpvs".$counter;
		$eon="csms".$counter;
		$fon="csvs".$counter;
		$gon="apms".$counter;
		$hon="apvs".$counter;
		$ion="asms".$counter;
		$jon="asvs".$counter;
	if(!empty($_POST[$con]) && !empty($_POST[$don]) && !empty($_POST[$eon]) && !empty($_POST[$fon]) && !empty($_POST[$ion]) && !empty($_POST[$jon]) )
		{	/*Storing the elements of the table in given arrays */
			$cpms[$counter]=$_POST[$con];   
			$cpvs[$counter]=$_POST[$don];
			$csms[$counter]=$_POST[$eon];
			$csvs[$counter]=$_POST[$fon];
			$cpms[$counter]=$_POST[$gon];   
			$apvs[$counter]=$_POST[$hon];
			$asms[$counter]=$_POST[$ion];
			$asvs[$counter]=$_POST[$jon];
			$cpts[$counter]=($cpms[$counter]+(.1*$cpvs[$counter]));
			$csts[$counter]=($csms[$counter]+(.1*$csvs[$counter]));
			$difa[$counter]= $csts[$counter]-$cpts[$counter];
			$apts[$counter]=($apms[$counter]+(.1*$apvs[$counter])); 
			$asts[$counter]=($asms[$counter]+(.1*$asvs[$counter]));
			$difc[$counter]= $apts[$counter]-$asts[$counter];
			$diva[$counter] =(($difa[$counter]+$difc[$counter])/2);
		}	
	
	}
	$answ["col1"]=$cpts;
	$answ["col2"]=$csts;
	$answ["col3"]=$difa;
	$answ["col4"]=$apts;
	$answ["col5"]=$asts;
	$answ["col6"]=$difc;
	$answ["col7"]=$diva;
	echo json_encode($answ);
	
	
}
?>