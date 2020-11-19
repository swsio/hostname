<html>
	<body>
                Diese Seite läuft auf POD: <b>
<?php
$hostname = gethostname();
print $hostname;
		$secondsWait = 0.5;
header("Refresh:$secondsWait");



if (strpos($hostname, 'blue') !== false) {
echo "<body style='background-color:blue'>";
};

if (strpos($hostname, 'green') !== false) {
echo "<body style='background-color:green'>";
};

#if (strpos($hostname, 'demo') !== false) {
#echo "<body style='background-color:yellow'>";
#};

?>


</b>

<p><b>Variante 1</b></p>
	</body>
</html>

