Exempl de liens
?controller=home&action=home
<script>
//     const form = document.getElementById('form_choix_date');
//     const donneesList = document.getElementById('donnees_list');

//     form.addEventListener('submit', function(event) {
//         event.preventDefault(); // Empêche le comportement par défaut du formulaire

//         const date = document.getElementById('date_donnee').value;

//         // Envoie de la requête AJAX
//         const xhr = new XMLHttpRequest();
//         xhr.open('POST', '?controller=home&action=home');
//     xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');          
//         xhr.onload = function() {
//             if (xhr.status === 200) {
//                 const response = JSON.parse(xhr.responseText);
//                 afficherDonnees(response);
//             }
//         };
//         xhr.send('submit_date_donnees=1&date_donnee=' + encodeURIComponent(date));
//     });

//     // Fonction pour afficher les données sur la page
//     function afficherDonnees(data) {
//         donneesList.innerHTML = ''; // Efface le contenu précédent
//         data.forEach(function(dd) {
//             const li = document.createElement('li');
//             li.innerHTML = `
//                 <ul>
//                     <li>Temperature de l'eau : ${dd.temperature}</li>
//                     <li>Salinité de l'eau : ${dd.salinity}</li>
//                     <li>Chlorophill "A" : ${dd.chlorophill}</li>
//                     <li>Oxygène dissous : ${dd.oxygen}</li>
//                     <li>Date/Heure : ${dd.tracked_at}</li>
//                     <li>Longitude : ${dd.longitude}</li>
//                     <li>Latitude : ${dd.latitude}</li>
//                 </ul>
//             `;
//             donneesList.appendChild(li);
//         });
//     }

//     xhr.onload = function() {
//     console.log(xhr.responseText); // Affiche la réponse du serveur dans la console
//     var response = JSON.parse(xhr.responseText); // Parse la réponse en tant que JSON
    
// };
</script>
