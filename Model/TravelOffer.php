<?php
    class Traveloffer {
        private $id;
        private $title;
        private $destination;
        private $date_depart;
        private $date_retour;
        private $prix;
        private $disponible;
        private $categorie;

        
        public function __construct($title, $destination, $date_depart, $date_retour, $prix, $disponible, $categorie) {
            $this->title = $title;
            $this->destination = $destination;
            $this->date_depart = $date_depart;
            $this->date_retour = $date_retour;
            $this->prix = $prix;
            $this->disponible = $disponible;
            $this->categorie = $categorie;
        }

        
        public function getTitle() {
            return $this->title;
        }

        public function getDestination() {
            return $this->destination;
        }

        public function getDateDepart() {
            return $this->date_depart;
        }

        public function getDateRetour() {
            return $this->date_retour;
        }

        public function getPrix() {
            return $this->prix;
        }

        public function getDisponible() {
            return $this->disponible;
        }

        public function getCategorie() {
            return $this->categorie;
        }

        public function show() {
            echo "
                <table border>
                    <tr>
                        <th> Title </th>
                        <th> Destination </th>
                        <th> Departure Date </th>
                        <th> Return Date </th>
                        <th> Price </th>
                        <th> Availability </th>
                        <th> Category </th>
                    </tr>
                    <tr>
                        <td> " . $this->getTitle() . " </td>
                        <td> " . $this->getDestination() . " </td>
                        <td> " . $this->getDateDepart() . " </td>
                        <td> " . $this->getDateRetour() . " </td>
                        <td> " . $this->getPrix() . " </td>
                        <td> " . $this->getDisponible() . " </td>
                        <td> " . $this->getCategorie() . " </td>
                    </tr>
                </table>
            ";
        }
    }
?>


<!-- <?php
    /* class TravelOffer {
        private $id;
        private $title;
        private $destination;
        private $date_depart;
        private $date_retour;
        private $prix;
        private $disponible;
        private $categorie;
    
        public function __construct($title, $destination, $date_depart, $date_retour, $prix, $disponible, $categorie) {
            $this->title = $title;
            $this->destination = $destination;
            $this->date_depart = $date_depart;
            $this->date_retour = $date_retour;
            $this->prix = $prix;
            $this->disponible = $disponible;
            $this->categorie = $categorie;
        }
    
        public function show() {
            echo "
                <table border>
                    <tr>
                        <th>Title</th>
                        <th>Destination</th>
                        <th>Departure Date</th>
                        <th>Return Date</th>
                        <th>Price</th>
                        <th>Availability</th>
                        <th>Category</th>
                    </tr>
                    <tr>
                        <td> $this->title </td>
                        <td> $this->destination </td>
                        <td> $this->date_depart </td>
                        <td> $this->date_retour </td>
                        <td> $this->prix </td>
                        <td> $this->disponible </td>
                        <td> $this->categorie </td>
                    </tr>
                </table>
            ";
        }
    } */
?> -->
