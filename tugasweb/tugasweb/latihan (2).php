<?php 
<div class="menu">
	echo "Hello word <br>";
	$a = 10;
	$b = 20;
	echo $a."<br>";
	echo $b."<br>";
	echo "Hasil penjumlahan ". $a." + ".$b." = ".($a + $b)."<br>";
	echo "Hasil pengkurangan ". $a." - ".$b." = ".($a + $b)."<br>";
	echo "Hasil perkalian ". $a." * ".$b." = ".($a + $b)."<br>";
	echo "Hasil pembagian ". $a." / ".$b." = ".($a + $b)."<br>";

	for($i =0; $i<10; $i++){
		echo "Bilangan = " .$i."<br>";
	}
	$j =1;
	while($j <= 10){
		echo $j."<br>";
		$j++;
	}

	$bil1 = 20;
	$bil2 = 20;
	if($bil1 < $bil2){
		echo $bil1."Lebih kecil dari ".$bil2;
	}elseif($bil1 > $bil2){
		echo $bil2."Lebih kecil dari ".$bil1;
	}else{
		echo "Bilangan sama besar"."<br>";
	}


	$bilangan = 40;
	if($bilangan % 2 == 0){
		echo $bilangan."Genap";
	}else{
		echo $bilangan."Ganjil";
	}
	</div>
?>