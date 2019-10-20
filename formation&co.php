<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Page web de la GBAF">
        <link rel="stylesheet" href="style.css">
        <title>Formation&co</title>
    </head>
    <body>
    	<div id="bloc_page">
    	<!-- header -->
        <?php include("includes/header.php"); ?>
        <section class="contenu_acteur">
            <img src="images/formation_co.png" alt="logo formation&Co" class="logo_page_acteur">
            <h2>A Propos</h2>
            <p>Formation&co est une association française présente sur tout le territoire. <br />
             Nous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé.
             Notre proposition : <ul>
         <li>un financement jusqu’à <br />30 000€ ;</li>
        <li>un suivi personnalisé et gratuit ;</li>
        <li>une lutte acharnée contre les freins sociétaux et les stéréotypes.</li> </ul> <br />Le financement est possible, peu importe le métier : coiffeur, banquier, éleveur de chèvres… . Nous collaborons avec des personnes talentueuses et motivées.
Vous n’avez pas de diplômes ? Ce n’est pas un problème pour nous ! Nos financements s’adressent à tous.</p>
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