<?php
session_start();
require_once '_gestionBase_inc.php';


$qteReserver = $_POST["qteReserver"];
$numTypeContainer = $_POST["numTypeContainer"];


ajouterLigneDeReservation($numTypeContainer,$qteReserver);

 $_SESSION["ligneDeResservation"][$numTypeContainer]=$qteReserver;

header("location:saisirligneDeReservation.php");

