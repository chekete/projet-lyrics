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
<div id="page_inscription">
	<div id="mot_inscription">Inscription sur le site</div>
	<form method="POST">
		<label for="pseudo">Pseudo:</label><input type="text" id="pseudo" class="inputType" name="pseudo">
		<label for="password">Mot de passe:</label><input type="password" id="password" class="inputType" name="password">
		<label for="password">Confirmation du mot de passe:</label><input type="password" id="password1" class="inputType" name="password1">
		<label for="email">Email:</label><input type="email" id="email" class="inputType" name="email"><br/>
		<input type="submit" value="Envoyer">
	</form>
</div>
	
	</div></div>

	<div id="right_page">

	</div>

</div>
<script src="javascript/js.js"></script>
</body>
</html>