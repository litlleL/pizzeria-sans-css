<?php
  	$db  =  new PDO('mysql:host=localhost;dbname=pizzeria3;charset=utf8', 'root', '');
?>
<html>
    <header>
        <title>
            La Florentina
        </title>
    </header>

    <body>
        <header>
            <h1>Liste des clients</h1>
        </header>   
             <a href="AjouterClient.php">Ajout</a> / <a href="index.html">Retour à l'accueil</a>
			 <br/>
			 	<table width="100%">
    				<tr>
						<th align="left">Id.</th>
						<th align="left">Nom</th>
						<th align="left">Prénom</th>
						<th align="left">Ville</th>
						<th align="left">Age</th>
    				</tr>
    				<?php
						$sql = "SELECT * FROM clients";
						$stmt = $db->prepare($sql);
						$stmt->execute();
						$result = $stmt->fetchAll();
						foreach($result as $row){
					?>
						<tr>
							<td><?php echo $row["id"]; ?></td>
							<td><?php echo $row["nom"]; ?></td>
							<td><?php echo $row["prenom"]; ?></td>
							<td><?php echo $row["ville"]; ?></td>
							<td><?php echo $row["age"]; ?></td>
							<td><a href="ModifierClient.html">Modifier</a></td>
							<td><a href="SupprimerClient.html">Supprimer</a></td>
						</tr>
					<?php
						}
					?>
				</table>

					
    </body>
</html>
