<?php
header("Content-Type: application/json");
$ob = array(
        "options" => array(
                "title" => "CANTIDAD DE CARGOS Y HORAS CATEDRA LIQUIDADAS MENSUALMENTE ",
                "is3D"  => true
        ),
        "data" => array(
                array("Mes"  ,"Cargos","Horas" ),
                array("Enero",11,23 ),
                array("Febrero"   ,2,25 ),
                array("Marzo"  ,5,40 ),
                array("Abril"  ,8,20),
                array("Mayo"  ,8,20),
                array("Junio"  ,8,20),
                array("Julio"  ,8,20),
                array("Agosto"  ,8,20),
                array("Septiembre"  ,8,20),
                array("Noviembre"  ,8,20),
                array("Diciembre"  ,8,20)
        )
);
 
echo json_encode($ob);
?>