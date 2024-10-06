/* Partie 1: */
/* function validerFormulaire(){
    var valid = true;

    var title = document.getElementById("title").value;
    if(title.length <3){
        alert("le titre doit contenir une chaine de caractere superieure a 3");
        return valid = false;
    }

    var pattern = /^[A-Za-z\s]{3,}$/;
    var destination = document.getElementById("destination").value;
    if( !pattern.test(destination)){
        alert("La destination doit respecter le pattern");
        return valid = false;
    }

    var departureDate = document.getElementById("departuredate").value;
    var returnDate = document.getElementById("returndate").value;
    if(new Date(departureDate) >= new Date(returnDate)){
        alert("La date de retour doit être ultérieure à la date de départ.");
        return valid = false;
    }

    var prix = document.getElementById("price").value;
    if(prix <= 0){
        alert("Le prix doit etre positif.");
        return valid = false;
    }
    if (valid == true){
        alert("Le formulaire est correcte");
    }
} */

    /* Partie 2: */

    /*document.getElementById("formulaire").addEventListener("submit", function (e) {
        e.preventDefault();
        var valid = true;

        var pTitle = document.getElementById("p-title");
        var pDestination = document.getElementById("p-destination");
        var pDepartureDate = document.getElementById("p-departuredate");
        var pReturnDate = document.getElementById("p-returndate");
        var pPrice = document.getElementById("p-price");
    
    
        var title = document.getElementById("title").value;
        if (title.length < 3) {
            pTitle.innerHTML = "Le titre doit contenir au moins 3 caractères.";
            pTitle.style.color = "red";
            valid = false;
        } else {
            pTitle.innerHTML = "Correct";
            pTitle.style.color = "green";
        }
    
        var pattern = /^[A-Za-z\s]{3,}$/;
        var destination = document.getElementById("destination").value;
        if (!pattern.test(destination)) {
            pDestination.innerHTML = "La destination doit contenir uniquement des lettres et des espaces, et au moins 3 caractères.";
            pDestination.style.color = "red"; 
            valid = false;
        } else {
            pDestination.innerHTML = "Correct";
            pDestination.style.color = "green";
        }
    
        var departureDate = document.getElementById("departuredate").value;
        var returnDate = document.getElementById("returndate").value;
        if (new Date(departureDate) >= new Date(returnDate)) {
            pDepartureDate.innerHTML = "La date de départ doit être valide.";
            pReturnDate.innerHTML = "La date de retour doit être ultérieure à la date de départ.";
            pDepartureDate.style.color = "red";
            pReturnDate.style.color = "red";
            valid = false;
        } else {
            pDepartureDate.innerHTML = "Correct";
            pDepartureDate.style.color = "green";
            pReturnDate.innerHTML = "Correct";
            pReturnDate.style.color = "green";
        }
    
        var prix = document.getElementById("price").value;
        if (prix <= 0) {
            pPrice.innerHTML = "Le prix doit être un nombre positif.";
            pPrice.style.color = "red";
            valid = false;
        } else {
            pPrice.innerHTML = "Correct";
            pPrice.style.color = "green";
        }
    
        if (valid) {
            alert("Le formulaire est correct.");
        }
    }); */

    /* Partie 3: */
    document.addEventListener("DOMContentLoaded",function(){
        document.getElementById("title").addEventListener("keyup", function() {
            var title = this.value;
            var pTitle = document.getElementById("p-title");
            if (title.length < 3) {
                pTitle.innerHTML = "Le titre doit contenir au moins 3 caractères.";
                pTitle.style.color = "red";
            } else {
                pTitle.innerHTML = "Correct";
                pTitle.style.color = "green";
            }
        });
    
        document.getElementById("destination").addEventListener("keyup", function() {
            var pattern = /^[A-Za-z\s]{3,}$/;
            var destination = this.value;
            var pDestination = document.getElementById("p-destination");
            if (!pattern.test(destination)) {
                pDestination.innerHTML = "La destination doit contenir uniquement des lettres et des espaces, et au moins 3 caractères.";
                pDestination.style.color = "red";
            } else {
                pDestination.innerHTML = "Correct";
                pDestination.style.color = "green";
            }
        });
    })
    
    
    document.getElementById("formulaire").addEventListener("submit", function (e) {
        e.preventDefault();
        var valid = true;

        var pDepartureDate = document.getElementById("p-departuredate");
        var pReturnDate = document.getElementById("p-returndate");
        var pPrice = document.getElementById("p-price");
    
        var departureDate = document.getElementById("departuredate").value;
        var returnDate = document.getElementById("returndate").value;
        if (new Date(departureDate) >= new Date(returnDate)) {
            pDepartureDate.innerHTML = "La date de départ doit être valide.";
            pReturnDate.innerHTML = "La date de retour doit être ultérieure à la date de départ.";
            pDepartureDate.style.color = "red";
            pReturnDate.style.color = "red";
            valid = false;
        } else {
            pDepartureDate.innerHTML = "Correct";
            pDepartureDate.style.color = "green";
            pReturnDate.innerHTML = "Correct";
            pReturnDate.style.color = "green";
        }
    
        var prix = document.getElementById("price").value;
        if (prix <= 0) {
            pPrice.innerHTML = "Le prix doit être un nombre positif.";
            pPrice.style.color = "red";
            valid = false;
        } else {
            pPrice.innerHTML = "Correct";
            pPrice.style.color = "green";
        }
    
        if (valid) {
            alert("Le formulaire est correct.");
        }
    });
    
    
    



