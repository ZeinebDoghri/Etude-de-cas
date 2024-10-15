<?php
    class TravelOfferController {
        public function showtraveloffre($offre) {
            echo "<table border>
                    <tr>
                        <th>Title</th>
                        <th>Destination</th>
                        <th>Departure Date</th>
                        <th>Return Date</th>
                        <th>Price</th>
                        <th>Disponibility</th>
                        <th>Category</th>
                    </tr>
                    <tr>
                        <td> " . $offre->getTitle() . " </td>
                        <td> " . $offre->getDestination() . " </td>
                        <td> " . $offre->getDateDepart() . " </td>
                        <td> " . $offre->getDateRetour() . " </td>
                        <td> " . $offre->getPrix() . " </td>
                        <td> " . $offre->getDisponible() . " </td>
                        <td> " . $offre->getCategorie() . " </td>
                    </tr>
                </table>";
        }
    }
?>