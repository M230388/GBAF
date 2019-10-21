<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Page web de la GBAF">
        <link rel="stylesheet" href="style.css">
        <title>Inscription GBAF</title>
    </head>
   <body>
    <div id="bloc_page">
       <!-- header -->
       <?php include("includes/header.php"); ?> 
       <!-- création du formulaire d'inscription -->
       <form method="post" action="users_connection.php"> 
        <p> <label for="lastname">Nom</label> : 
          <input type="text" name="lastname" 
            id="lastname" required /> 
        </p> 
         <p> <label for="firstname">Prénom</label> : 
          <input type="text" name="firstname" 
            id="firstname" required /> 
        </p> 
        <p> <label for="pseudo">Votre pseudonyme</label> : 
            <input type="text" name="pseudo" id="pseudo" required />
        </p>
        <p> <label for="password">mot de passe</label> : 
            <input type="password" name="password" id="password" required />
        </p>
          <p> <label for="confirm_password">Confirmer le mot de passe</label> : 
            <input type="password" name="confirm_password" id="confirm_password" required />
        </p>
        <p> <label for="secret_question">Votre question secrète</label> : 
            <input type="text" name="secret_question" id="secret_question" required/>
        </p>
        <p> <label for="reponse">Votre réponse</label> : 
            <input type="text" name="reponse" id="reponse" required />
        </p>
        <p> <input type="submit" value="envoyer" /> </p>
       </form>
        </div>
        </body>
        </html>