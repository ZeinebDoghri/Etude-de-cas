<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Add a Travel Offer</h1>

        <!-- <form id="formulaire" action="showTravelOffer.php" method="get"> -->
        <form id="formulaire" action="Verification.php" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" name="title" id="title" required title="Minimum 3 caractères">
                <p id="p-title"></p>
            </div>

            <div class="mb-3">
                <label for="destination" class="form-label">Destination:</label>
                <input type="text" class="form-control" name="destination" id="destination" required title="Minimum 3 caractères, lettres et espaces uniquement">
                <p id="p-destination"></p>
            </div>

            <div class="mb-3">
                <label for="departuredate" class="form-label">Departure Date:</label>
                <input type="date" class="form-control" name="date_depart" id="date_depart" required title="Champ obligatoire">
                <p id="p-departuredate"></p>
            </div>

            <div class="mb-3">
                <label for="returndate" class="form-label">Return Date:</label>
                <input type="date" class="form-control" name="date_retour" id="date_retour" required title="Champ obligatoire">
                <p id="p-returndate"></p>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" class="form-control" name="prix" id="prix" required title="Nombre entier ou décimal positif">
                <p id="p-price"></p>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" name="disponible" id="disponible">
                <label class="form-check-label" for="availability">Availability</label>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category:</label>
                <select name="categorie" id="categorie" class="form-select">
                    <option value="culture">Culture</option>
                    <option value="adventure">Adventure</option>
                    <option value="joy">Joy</option>
                </select>
            </div>

            <!-- Submit button sends the data to the PHP script -->
            <button id="submit" class="btn btn-primary" type="submit">Add Offer</button>
        </form>
    </div>
</body>
<!-- <script src="addOffer.js"></script> -->
</html>
