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