<!DOCTYPE HTML><html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="css/style.css"/>

</head><body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<div id="big_conteneur">

	
	<?php
		include_once('menu.php');
	?>
		
	<div id="middle_page">
	<div id="middle_page_egain">
<div id="page_lyrics">
<div id="text_lyrics">


<?php echo $donnees['titre_chanson']; ?>


	<form method="post" action="traitement_lyrics.php">
		<label for="nom_rappeur">Le nom du chanteur:</label><input type="text" id="nom_rappeur" class="submit_input" name="nom_rappeur"><br/>
		<label for="titre_chanson">Le nom de la chanson</label><input type="text" id="titre_chanson" class="submit_input" name="titre_chanson"><br/>
		<label for="textes">votre parole</label><textarea cols="48" id="textes" name="textes" rows="10"></textarea>
		<input type="submit" value="submit">
	</form>
	
	
</div></div>
	
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