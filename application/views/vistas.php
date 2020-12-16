<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>enido a su puta madre</title>
</head>
<body>

<div id="container">
	<h1><?= $titulo ?></h1>
	<ul>
		<?php foreach($lista as $item): ?>
			<li><?= $item ?></li>
		<?php endforeach ?>
	</ul>

</div>

</body>
</html>