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
	<h1 class="title">Svelte PHP</h1>


	<div class="content">
		<div class="kitty">
			<h4>Web Components</h4>
			<?php
			for ($x = 0; $x <= 5; $x++) {
				echo <<<EOL
	<my-element>
	Default Slot: $x 
	<span slot="secondslot">$x-slot</span>
	</my-element>
EOL;
			}
			?>
		</div>

	</div>

</body>

</html>