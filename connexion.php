      <?php 
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$reponse= $bdd->query("SELECT * FROM utilisateurs");
$donnees= $reponse->fetch(); 
include "index.php"; ?> 
