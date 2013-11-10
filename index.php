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
	if(isset($_GET['chars'])){
		$chars = $_GET['chars'];
	}else{
		$chars = 16;
	}
	$randString = $r -> randomString($chars, 'normal');
	$randStringU = $r -> randomString($chars, 'upper');
?>
<html>
<title>Randomizer live demo</title>
<body>
	<form>
		Using <code>randomArray($a);</code>, a random object from the array $a will be shown.<br/>
		<code><?php echo($randArray); ?></code><br/>
		Using <code>randomString(16);</code>, a random string with 16 characters will be shown.<br/>
		<code><?php echo($randString); ?></code><br/>
		Using <code>randomString(16, 'upper');</code>, a random string with 16 characters that are uppercase will be shown.<br/>
		<code><?php echo($randStringU); ?></code><br/>
		# of characters: <input name="chars" value="<?php echo($chars) ?>"></input><br/>
		<a href="#"><button>Reload</button></a><br/>
	</form>
	<a href="https://github.com/GeekyGamer14/Randomizer/archive/master.zip">download randomizer</a><br/>
	<a href="https://github.com/GeekyGamer14/Randomizer">view code on github</a><br/>
	<iframe src="http://githubbadge.appspot.com/GeekyGamer14" style="border: 0;height: 142px;width: 200px;overflow: hidden;" frameBorder="0"></iframe>
</body>
</html>