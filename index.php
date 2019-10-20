<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Page web de la GBAF">
        <link rel="stylesheet" href="style.css">
        <title>Accueil GBAF</title>
    </head>
    <body>
    	<div id="bloc_page">
            <!-- header -->
    	<?php include("includes/header.php"); ?>
    	<section id="presentation_gbaf"> 
    		<h1>Qui sommes-nous ?</h1>
    		  <p> Le GBAF est le représentant de la profession bancaire et des assureurs sur tous les axes de la réglementation financière française. Notre mission est de promouvoir
			l'activité bancaire à l’échelle nationale. Nous sommes également un interlocuteur privilégié des un deux trois
			pouvoirs publics.</p> 
                <p>Le Groupement Banque Assurance Français (GBAF) est une fédération représentant les 6 grands groupes français :
                 <ul>
    			<li> BNP Paribas</li>
    			<li>BPCE</li>
    			<li>Crédit Agricole</li>
    			<li>Crédit Mutuel-CIC</li>
    			<li>Société Générale</li>
    			<li>La Banque Postale</li>		
    		</ul>
    		Notre objectif est de proposer aux salariés des grands groupes français un point d’entrée unique, répertoriant un grand nombre d’informations sur les partenaires et acteurs du groupe ainsi que sur les produits et services bancaires et financiers.
    			</p>
    		<!-- mettre une balise img pour illustrer-->
    	</section>
    	
            <div class="presentation_partenaire">
    		<h2>Nos partenaires</h2>
    		<p></p>
    		<!-- mettre une balise imp pour illustrer -->
        </div>
        <section class="bloc_partenaires">
    		<div class="partenaires"> 
    			<img src="images/formation_co.png" alt="logo formation&Co" class="logos">
                <div class="texte">
    			<h3>Formation&Co</h3>
    			<p>Formation&co est une association française présente sur tout le territoire.
				</p>
            </div>
    			<button class="lire_la_suite"><a href="formation&co.html">Lire la suite</a></button>
    		</div>
    		<div class="partenaires">
    			<img src="images/protectpeople.png" alt="logo partenaire ProtectPeople" class="logos">
                <div class="texte">
    			<h3>ProtectPeople</h3>
    			<p>Protectpeople finance la solidarité nationale.</p>
                </div>
    			<button class="lire_la_suite"><a href="protectpeople.html">Lire la suite</a></button>
    		</div>
    		<div class="partenaires"> 
    			<img src="images/Dsa_france.png" alt="logo partenaire Dsa_france" class="logos">
    			<div class="texte">
    			<h3>DSA France</h3>
    			<p>Dsa France accélère la croissance du territoire.
    			</p>
    		</div>
    			<button class="lire_la_suite"><a href="dsa_France.html">Lire la suite</a></button>
    		</div>
    		<div class="partenaires">
    			<img src="images/CDE.png" alt="logo partenaire CDE" class="logos">
                <div class="texte">
    			<h3>CDE</h3>
    			<p>La CDE (Chambre Des Entrepreneurs) accompagne les entreprises.</p>
            </div>
    			<button class="lire_la_suite"><a href="CDE.html">Lire la suite</a></button>
    		</div>
    	</section>
       <!--footer -->
       <?php include("includes/footer.php"); ?>
    </div>
    </body>
    </html>