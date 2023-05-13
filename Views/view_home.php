<iframe src="https://www.konectis.com/embed/d2841f6711ec12b24e035ad71c7e1755" width="1700" height="800" frameborder="0"></iframe>


<a href="#" id="info-link"><i class="fa-solid fa-location-dot location1"></i></a>
<!-- Modal spot bideversite 1  -->
<div id="modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Spot biodiversité</h2>
    <div class="img_balise_donnee_recuperer">
    <!-- <form action="?controller=home&action=donnees_date" id="form_choix_date">
    <select name="date_donnee" id="date_donnee">
        <option value="date">Choisir une date</option>
        <?php foreach ($donnees as $d) : ?>
            <option value="<?= $d->tracked_at ?>"><?= $d->tracked_at ?></option>
        <?php endforeach ;
        var_dump($donnees);
        ?>
    </select>
    <input type="submit" id="submit_date_donnees" >
</form> -->
<p>
<?php // if ($position == 1) : ?>   
    <ul>
    <?php foreach ($donnees as $dd) : ?>
        <li>Temperature de l'eau : <?= $dd->temperature ?></li>
        <li>Salinité de l'eau : <?= $dd->salinity ?></li>
        <li>Chlorophill "A" : <?= $dd->chlorophill ?></li>
        <li>Oxygène dissous : <?= $dd->oxygen ?></li>
        <li>Date/Heure : <?= $dd->longitude ?></li>
        <br>
        <li>Longitude : <?= $dd->latitude ?></li>
        <li>Latitude : <?= $dd->tracked_at ?></li>
    <?php  endforeach; ?>
    </ul> 
<?php // endif ?>
    </p>
    <div class="link_savoir_plus_spot">
        <img src="assets/img/balise_collecte_donnee.jpg" alt="">
        <a href="?controller=spots&action=spots_bio" class="link_spot">En savoir plus sur le spot.</a>
    </div>
</div>

    <p>
        Température de l'eau : La température de l'eau joue un rôle crucial dans la distribution des espèces marines. Différentes espèces ont des préférences thermiques spécifiques et leur présence peut être influencée par la température de l'eau. Une température de 17°C indique donc les conditions thermiques dans cet environnement marin particulier. 
    </p>
    <p>
    Salinité de l'eau : La salinité de l'eau, exprimée en grammes de sel par litre (g/L), est un autre paramètre important qui influence la biodiversité marine. Certains organismes marins ont une tolérance spécifique à la salinité et ne se trouvent que dans des plages de salinité particulières. La salinité moyenne dans les oceans est de 34.7g/L
    </p>
    <p>
    Chlorophylle "A" : La chlorophylle "A" est un pigment présent dans les plantes et les algues, et sa concentration dans l'eau est souvent utilisée comme indicateur de la biomasse algale. 
    </p>
    <img src="assets/img/explication_donnee.png" alt="" style="width:50%;">
    <p>
    Oxygène dissous : L'oxygène dissous est essentiel à la vie marine et sa concentration dans l'eau est un facteur clé pour évaluer la santé de l'écosystème. Les organismes marins dépendent de l'oxygène dissous pour leur métabolisme et leur survie. 
    En temps normal, la quantité d'oxygène dissous dans les eaux océaniques est comprise entre 7 et 8 milligrammes par millilitre.
    </p>
  </div>
</div>

<a href="#" id="info-link2"><i class="fa-solid fa-location-dot localtion2"></i></a>
<!-- spot biodiversité 2  -->
<div id="modal2" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="img_balise_donnee_recuperer">
        <!-- Voir pour un affichage en space beetween ?  -->
        <p><ul>
            <li>
                Temperature de l'eau : DONNEE
            </li>
            <li>
                Salinité de l'eau : DONNEE
            </li>
            <li>
                Chlorophill "A" : DONNEE
            </li>
            <li>
                Oxygène dissous : DONNEE
            </li>
            <li>
                Date/Heure : DONNEE
            </li>
            <li>
                Longitude : DONNEE
            </li>
            <li>
                Latitude : DONNEE
            </li>
        </ul> 
    </p>
    <img src="assets/img/balise_collecte_donnee.jpg" alt="">
</div>
    <p>
        Température de l'eau : La température de l'eau joue un rôle crucial dans la distribution des espèces marines. Différentes espèces ont des préférences thermiques spécifiques et leur présence peut être influencée par la température de l'eau. Une température de 17°C indique donc les conditions thermiques dans cet environnement marin particulier. 
    </p>
    <p>
    Salinité de l'eau : La salinité de l'eau, exprimée en grammes de sel par litre (g/L), est un autre paramètre important qui influence la biodiversité marine. Certains organismes marins ont une tolérance spécifique à la salinité et ne se trouvent que dans des plages de salinité particulières. La salinité moyenne dans les océans est de 34.7g/L.
    </p>
    <p>
    Chlorophylle "A" : La chlorophylle "A" est un pigment présent dans les plantes et les algues, et sa concentration dans l'eau est souvent utilisée comme indicateur de la biomasse algale. 
    </p>
    <img src="assets/img/explication_donnee.png" alt="" style="width:50%;">
    <p>
    Oxygène dissous : L'oxygène dissous est essentiel à la vie marine et sa concentration dans l'eau est un facteur clé pour évaluer la santé de l'écosystème. Les organismes marins dépendent de l'oxygène dissous pour leur métabolisme et leur survie. 
    En temps normal, la quantité d'oxygène dissous dans les eaux océaniques est comprise entre 7 et 8 milligrammes par millilitre.
    </p>
  </div>
</div>