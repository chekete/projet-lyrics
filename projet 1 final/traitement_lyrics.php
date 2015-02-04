
<?php
/*page d'insertion du nom du rappeur du titre de la chanson et le lyrics avec traduction*/
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=lyrics','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	}
	catch(Exception $e){
		die('Erreur: '.$e->getMessage());
	}
	
	$req = $bdd->prepare('INSERT INTO les_lyrics(nom_rappeur, titre_chanson, textes) VALUES(:nom_rappeur,:titre_chanson,:textes)');
	$req->execute(array($_POST['nom_rappeur'],$_POST['titre_chanson'],$_POST['textes']));
	
	header('location:lyrics.php');
	
?>