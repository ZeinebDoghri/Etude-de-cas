<?php
    include '../../Model/TravelOffer.php';

    $titre = $_GET["title"];
    $destination = $_GET["destination"];
    $date_departure = $_GET["date_depart"];
    $date_retour = $_GET["date_retour"];
    $prix = $_GET["prix"];
    $disponible = isset($_GET["disponible"]) ? 'Yes' : 'No';
    $categorie = $_GET["categorie"];

    // Create Travel object
    $offre1 = new Traveloffer($titre, $destination, $date_departure, $date_retour, $prix, $disponible, $categorie);

    // Display using var_dump
    var_dump($offre1);


    // Display using the show method
    $offre1->show();
?>