<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Page web de la GBAF">
        <link rel="stylesheet" href="style.css">
        <title>Connexion à GBAF</title>
    </head>
   <body>
       <div id="bloc_page">
       <!-- header -->
       <?php include("includes/header.php"); ?>
       <!-- le formulaire est appelé ici -->
       
       <form method="post" action="">
        <p> <label for="pseudo">Votre pseudonyme</label> : 
            <input type="text" name="pseudo" id="pseudo" required />
        </p>
        <p> <label for="connection_password">mot de passe</label> : 
            <input type="password" name="connection_password" id="connection_password" required />
        </p>
        </form>
      </div>
        </body>
        </html>