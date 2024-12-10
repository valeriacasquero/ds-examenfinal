<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarRespuesta.php';
require_once '../../modelo/datosMascota.php';
require_once '../../modelo/responsableMascota.php';

$resp= new ConsultarRespuesta();

$rm= new ResponsableMascota;
$rm->Id='2';
$rm->Nombre='Maria';
$rm->Apellido='Cabrini';
$rm->NumeroDocumento='30123456';
$rm->Genero='Sin indicar';

$dm= new DatosMascota;
$dm->NroMascota= $_GET['nromascota'];
$dm->Nombre='Toto';
$dm->Raza='Mestizo';
$dm->Genero='Macho';
$dm->ResponsableMascota=$rm;

If ($dm->NroMascota<=100){$dm->AltaDeMascota='Software anterior';}
else {$dm->AltaDeMascota='Software actual';}

$resp->DatosMascota=$dm;
echo json_encode ($resp);