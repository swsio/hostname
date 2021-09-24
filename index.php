<html>
	<body>
                Diese Seite läuft auf POD: <b>
<?php
$hostname = gethostname();
print $hostname;
		$secondsWait = 5;
header("Refresh:$secondsWait");

$headers =  getallheaders();
foreach($headers as $key=>$val){
  echo $key . ': ' . $val . '<br>';
}



if (strpos($hostname, 'blue') !== false) {
echo "<body style='background-color:blue'>";
};

if (strpos($hostname, 'green') !== false) {
echo "<body style='background-color:green'>";
};

if (strpos($hostname, 'demo') !== false) {
echo "<body style='background-color:blue'>";
};

?>


</b>

<p><b>Variante Header</b></p>
	</body>
</html>

