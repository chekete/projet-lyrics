<!DOCTYPE HTML><html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="css/style.css"/>

</head><body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<div id="big_conteneur">
	
	<?php
		include_once('menu.php');
		
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=lyrics','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch(Exception $e){
			die('Erreur: '.$e->getMessage());	
		}
		$reponse = $bdd->query('SELECT * FROM les_lyrics WHERE id=1');
		
		while($donnees = $reponse->fetch())
		{
	?>
	
	<div id="middle_page">
	<div id="middle_page_egain">
		<h1 id="music_name"><?php echo $donnees['titre_chanson'];?></h1>	
<div id="page_lyrics">
<h2 id="chanteur_name"><?php echo $donnees['nom_rappeur'];?></h2>
		
		<div id="text_lyrics">
			<p>
				<?php echo $donnees['textes'];?>
			</p>
		</div>
		<div id="traduction_text">
			<p>
				
			</p>
		</div>
</div>
		<?php }?>
	</div></div>

	<div id="right_page">
		<img src="images/gaspi1.jpg" class="image_a_droite">
		<p>
			<a href="#">cliquez ici</a>  
		</p>
		<div>
		Abonnes vouz a nos pages:
		<img src="images/logo/black_facebook.png" class="lien_autre_site">
		<img src="images/logo/black_google.png" class="lien_autre_site">
		<img src="images/logo/black_youtube.png" class="lien_autre_site">
		<img src="images/logo/black_twitter.png" class="lien_autre_site">
		</div>
	</div>

</div>
<script src="javascript/js.js"></script>
</body>
</html>