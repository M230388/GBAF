<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Page web de la GBAF">
        <link rel="stylesheet" href="style.css">
        <title>CDE</title>
    </head>
     <body>
        <div id="bloc_page">
        <!-- header -->
        <?php include("header.php"); ?>
        <section class="contenu_acteur">
            <img src="images/CDE.png" alt="logo partenaire CDE" 
            class="logo_page_acteur">
            <h2>A Propos</h2>
            <p>La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation.<br /> La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation. 
            Son président est élu pour 3 ans par ses pairs, chefs d’entreprises et présidents des CDE.</p>
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