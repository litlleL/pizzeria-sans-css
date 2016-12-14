<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>La Florentina</title>
    </head>
    <body>
		<div>
			<header>
				<h1>Gestion des clients</h1>
				<h2>Création d'un client</h2>
			</header> 
			<a href="index.html">Retour à l'accueil</a>
		</div>       
		<div>
			<form method="POST" action="./script/ajouter_client.php" align="center">
				<input type="text" name="nom" placeholder="Nom"><br/>
				<input type="text" name="prenom" placeholder="prenom"><br/>
				<input type="text" name="ville" placeholder="ville"><br/>
				<input type="text" name="age" placeholder="age"><br/>
				<input type="submit">
			</form>
		</div>
		<footer>
			<p>Copyright La Florentina - Tous droits réservés<br /><br />
			<a href="#">Nous contacter</a></p>
		</footer>        
    </body>
</html>