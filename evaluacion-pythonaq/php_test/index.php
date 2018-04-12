<?php
	include "Mamifero.php";
	include "Canino.php";
	include "Lobo.php";
	include "Perro.php";
	include "Felino.php";	
	include "Leon.php";
	include "Tigre.php";

	$perro1 = new Perro("cachupin", "nicolas", "gold terrier");
	$perro1->toString();
	print "".$perro1->comer()."\n";
	
	$leon1 = new Leon(10);
	$leon1->toString();
	print "".$leon1->comer()."\n";
?>