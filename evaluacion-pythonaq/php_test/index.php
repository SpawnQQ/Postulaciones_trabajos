<?php
	include "Leon.php";
	include "Tigre.php";
	include "Lobo.php";
	include "Perro.php";
	$perro1 = new Perro("cachupin", "nicolas", "gold terrier");
	$perro1->toString();
	print "".$perro1->comer();
	$leon1 = new Leon(10);
	$leon1->toString();
	print "".$leon1-comer();
?>