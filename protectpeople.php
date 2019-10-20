<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Page web de la GBAF">
        <link rel="stylesheet" href="style.css">
        <title>Protectpeople</title>
    </head>
   <body>
        <div id="bloc_page">
       <!-- header -->
       <?php include("includes/header.php"); ?>
        <section class="contenu_acteur">
            <img src="images/protectpeople.png" alt="logo partenaire ProtectPeople" class="logo_page_acteur">
            <h2>A Propos</h2>
            <p>Protectpeople finance la solidarité nationale.
        Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : <br />permettre à chacun de bénéficier d’une protection sociale. <br />
        Chez Protectpeople, chacun cotise selon ses moyens et reçoit selon ses besoins.
        Proectecpeople est ouvert à tous, sans considération d’âge ou d’état de santé. <br />
        Nous garantissons un accès aux soins et une retraite.
        Chaque année, nous collectons et répartissons 300 milliards d’euros.
        Notre mission est double : 
<ul>
 <li>sociale : nous garantissons la fiabilité des données sociales ;</li>
 <li>économique : nous apportons une contribution aux activités économiques.</li>
    </ul>
        </p>


            
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