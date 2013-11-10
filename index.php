<?php
	include_once('randomizer.php');
	$r = new Randomizer;
	$a = array(
		'juan',
		'too',
		'tree',
		'fur',
	);
	$randArray = $r -> randomArray($a);
	$randString = $r -> randomString(16, 'normal');
	$randStringU = $r -> randomString(16, 'upper');
?>
<html>
<title>Randomizer live demo</title>
<body>
	Using <code>randomArray($a);</code>, a random object from the array $a will be shown.<br/>
	<code><?php echo($randArray); ?></code><br/>
	Using <code>randomString(16);</code>, a random string with 16 characters will be shown.<br/>
	<code><?php echo($randString); ?></code><br/>
	Using <code>randomString(16, 'upper');</code>, a random string with 16 characters that are uppercase will be shown.<br/>
	<code><?php echo($randStringU); ?></code><br/>
	<a href="#" onclick="location.reload()"><button>Reload</button></a>
</body>
</html>