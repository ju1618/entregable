<?php
require_once 'load.php';

$profA1=new ProfesorAdjunto('Juan', 'Perez', 1, 2);
$profA2=new ProfesorAdjunto('Maria', 'Perez', 2, 20);
$profT1=new ProfesorTitular('Jose', 'Lopez', 3, fullstack);
$profT2=new ProfesorTitular('Teresa','Lopez', 4, android);

$curso1 = new Curso('Full Stack', '20001', '3');
$curso2 = new Curso('Andriod', '20002', '2');



 ?>
