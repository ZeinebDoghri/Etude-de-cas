<?php
    include '../../Model/TravelOffer.php';
    include '../../Controller/TravelOffer.php';

    $titre = $_POST["title"];
    $destination = $_POST["destination"];
    $date_departure = $_POST["date_depart"];
    $date_retour = $_POST["date_retour"];
    $prix = $_POST["prix"];
    $disponible = isset($_POST["disponible"]) ? 'Yes' : 'No';
    $categorie = $_POST["categorie"];

    $offre1 = new Traveloffer($titre, $destination, $date_departure, $date_retour, $prix, $disponible, $categorie);

    var_dump($offre1);


    $controller = new TravelOfferController();
    $controller->showtraveloffre($offre1);
?>