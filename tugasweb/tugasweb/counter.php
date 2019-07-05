<?php
	$filecounter = "counter.txt";
	$f1 = $f1=Fopen($filecounter,"r+");
	$hit=Fread($f1,filesize($filecounter));

	echo "<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#000ff><tr>";
	echo "<td width=250 valign=middle align=center>";
	echo "<font face=verdana size=2 color=#ff0000><b>";
	echo "Anda pengunjungn yang ke : ";
	echo $hit;
	echo "</br></font>";
	echo "</td>";
	echo "</tr></table>";

	fclose($f1);
	$f1=fopen($filecounter,"w+");
	$hit=$hit+1;
	fwrite($f1,$hit,strlen($hit));
	fclose($f1);
?>