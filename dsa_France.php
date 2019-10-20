<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Page web de la GBAF">
        <link rel="stylesheet" href="style.css">
        <title>DSA_France</title>
    </head>
    <body>
        <div id="bloc_page">
       <!-- header -->
       <?php include("includes/header.php"); ?>
        <section class="contenu_acteur">
            <img src="images/Dsa_france.png" alt="logo partenaire Dsa_france" class="logo_page_acteur">
            <h2>A Propos</h2>
            <p>Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales.
             Nous accompagnons les entreprises dans les étapes clés de leur évolution. <br />
             Notre philosophie : s’adapter à chaque entreprise. <br />
            Nous les accompagnons pour voir plus grand et plus loin et proposons des solutions de financement adaptées à chaque étape de la vie des entreprises</p>
        </section>
        <section class="bloc_commentaires">
        <div class="presentation_commentaires">
            <p>Commentaires</p>
            <div>
            <button class="button_commentaire">nouveau commentaire</button>
            <button class="button_commentaire">like/dislike</button>
        </div>
        </div>
            <div class="commentaires">
            <p>Nom</p>
            <p>Prénom</p>
            <p>texte</p>
        </div>
        <div class="commentaires">
            <p>Nom</p>
            <p>Prénom</p>
            <p>texte</p>
        </div>
        <div class="commentaires">
            <p>Nom</p>
            <p>Prénom</p>
            <p>texte</p>
        </div>
        <div class="commentaires">
            <p>Nom</p>
            <p>Prénom</p>
            <p>texte</p>
        </div>
    </section>
        <!--footer -->
    <?php include("includes/footer.php"); ?>
    </div>
        </body>
        </html>