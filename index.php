<?php
	include_once('config.php');
	$url = "https://api.intra.42.fr/oauth/authorize?client_id={$uid}&redirect_uri={$after_auth}&response_type=code";

	session_start();

	if (isset($_SESSION['token']) && !empty($_SESSION['token']))
	{
		?><a href=<?php echo $logout ?>>Log Out</a><br><?php
		echo "Nom : {$_SESSION['nom']}";
		echo "<br>";
		echo "Prenom : {$_SESSION['prenom']}";
		echo "<br>";
		?><img src="<?php echo $_SESSION['url_img'] ?>" style="border-radius: 150px;width: 150px;"/><?php
	}
	else
	{
		?><a href=<?php echo $url ?>>Connexion</a><?php
	}
?>