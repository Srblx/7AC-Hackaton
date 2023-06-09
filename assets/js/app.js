    // Récupérer les éléments du DOM
    let infoLink = document.getElementById("info-link");
    let modal = document.getElementById("modal");
    let closeButton = document.getElementsByClassName("close")[0];
    
    // Fonction pour ouvrir la modal
    function openModal() {
      modal.style.display = "block";
    }
    
    // Fonction pour fermer la modal
    function closeModal() {
      modal.style.display = "none";
    }
    
    // Lier les événements aux éléments du DOM
    infoLink.addEventListener("click", openModal);
    closeButton.addEventListener("click", closeModal);


// Récupérer les éléments du DOM
let infoLink2 = document.getElementById("info-link2");
let modal2 = document.getElementById("modal2");
let closeButton2 = modal2.getElementsByClassName("close")[0];

// Fonction pour ouvrir la modal
function openModal2() {
  modal2.style.display = "block";
}

// Fonction pour fermer la modal
function closeModal2() {
  modal2.style.display = "none";
}

// Lier les événements aux éléments du DOM
infoLink2.addEventListener("click", openModal2);
closeButton2.addEventListener("click", closeModal2);
