<?php
    include '../../Model/TravelOffer.php';

    $titre = $_GET["title"];
    $destination = $_GET["destination"];
    $date_departure = $_GET["date_depart"];
    $date_retour = $_GET["date_retour"];
    $prix = $_GET["prix"];
    $disponible = isset($_GET["disponible"]) ? 'Yes' : 'No';
    $categorie = $_GET["categorie"];

    
    $offre1 = new Traveloffer($titre, $destination, $date_departure, $date_retour, $prix, $disponible, $categorie);

    var_dump($offre1);

    $offre1->show();
?>