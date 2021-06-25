<?php
	include_once('config.php');
	session_start();

	if (isset($_SESSION['token']) && !empty($_SESSION['token']))
	{
		$data = api_req("/v2/me");
		view_data($data);
	}
	else
	{
		?><a href=<?php echo $auth ?>>Connexion</a><?php
	}
?>