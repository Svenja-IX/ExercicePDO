<?php 
	require_once ("inc/bdd.php");
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <fieldset>
        	<legend>Tous les mails que j'ai stocké dans ma bdd</legend>
        	<?php
			// si la variable $messageError n'est pas vide 
			if(!empty($messageError)) {
				echo $messageError;
			} else {
				echo 'Résultat avec $stagiaires<br>';
				echo "<ul>\n";
				// avec la boucle for each, je parcoure la table stagiaires, et pour chaques lignes je fais...
				foreach ($stagiaires as $stagiaire) {
					echo "<li>".$stagiaire['stagiaire_id']." - " // ...ouvrir une liste et faire apparaitre l'id
							   .$stagiaire['stagiaire_prenom']."  " // ...apparaitre le prenom
							   .$stagiaire['stagiaire_nom']."</li>"; // ...apparaitre le nom et fermer la liste
					// ensuite et pour le style, le choisis qu'a l'id 5, 10, 15, une ligne <hr> apparait pour demarquer
					if ($stagiaire['stagiaire_id'] === '5') {
						echo "<hr>";
					}
					else if ($stagiaire['stagiaire_id'] === '10') {
						echo "<hr>";
					}	
					else if ($stagiaire['stagiaire_id'] === '15') {
						echo "<hr>";
					}		
				}
				
			echo "</ul>";	
			}
        	?>
        </fieldset>
        <script src="script.js"></script>
    </body>
</html>