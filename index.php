<?php

require_once __DIR__.'/vendor/autoload.php';

$result = "";
if (!empty($_POST)) {
	$calculator = new Calculator();

	$operation = $_POST['calc-right'] . $_POST['calc-operator'] . $_POST['calc-left'];

	$result = $calculator->calculate($operation);
}

?>

<html>
	<body>
		<form action="/" method="post">
			<input type="text" name="calc-right"/>
			<input type="text" name="calc-operator"/>
			<input type="text" name="calc-left"/>
			<button type="submit">Ok</button>
		</form>

		<div id="result"><?php echo $result ?></div>
	</body>
</html>