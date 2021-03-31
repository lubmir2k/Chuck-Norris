<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $this->renderSection("title") ?></title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<style>
	html, body {
		color: rgba(33, 37, 41, 1);
		font-family: Helvetica, Arial, sans-serif;
		font-size: 16px;
		margin: 0;
		padding: 0;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		text-rendering: optimizeLegibility;
	}
	
	.container
	{
		margin: 15px;
	}
		
	.row {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		width: 100%;
	}

	.col {
		display: flex;
		flex-direction: column;
		flex-basis: 100%;
		flex: 1;
		
		margin: 15px 20px;
	}
	
	.border {
		border: 1px solid rgba(33, 37, 41, 1);
	}
	
	.m-bottom {
		margin-bottom: 15px;
	}
	
	.center {
		align-items: center;
	}
	
	.padded {
		padding: 5px 0;
	}
	
	.bold {
		font-weight: bold;
	}
	
	.uppercase
	{
		text-transform: uppercase;
	}
	</style>
</head>

<body>
	<?= $this->renderSection("content") ?>
</body>

<script>
	let buttonStates = {
		"Open for more" : "Close for less",
		"Close for less" : "Open for more"
	}
	
	let jokeStates = {
		"none" : "block",
		"block" : "none"
	}
	
	function toggleJoke(button) {
		button.innerText = buttonStates[button.innerText];
		
		let joke = button.nextElementSibling;
		joke.style.display = jokeStates[joke.style.display];
	}
</script>
</html>
