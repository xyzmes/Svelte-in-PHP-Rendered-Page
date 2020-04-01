<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width,initial-scale=1'>

	<title>Svelte PHP</title>

	<link rel='icon' type='image/png' href='public/favicon.png'>
	<link rel='stylesheet' href='public/global.css'>
	<link rel='stylesheet' href='public/build/bundle.css'>
	<script defer src='public/build/bundle.js'></script>
</head>

<body>
<h1>Svelte PHP</h1>

<?php
for ($x = 0; $x <= 10; $x++) {
   echo <<<EOL
<div data-id="$x" class="component"></div>
EOL;
}
?>


</body>
</html>
