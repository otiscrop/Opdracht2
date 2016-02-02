<?php
    $leeftijd = 10;
	$reisprijs = 10;
	
	if ($leeftijd > 65){
		$reisprijs = $reisprijs /2;
	}else if($leeftijd < 12){
		$reisprijs = $reisprijs /2;
	}else if($leeftijd < 3){
		$reisprijs = 0;
	}
	
	echo "leeftijd: ".$leeftijd." ";
	echo "prijs: ".$reisprijs;
?>
	
	

