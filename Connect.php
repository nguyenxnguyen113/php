<?php
$conn_string="host=ec2-52-20-248-222.compute-1.amazonaws.com port=5432 dbname=d57chajkv8mb20 user=ebjzmwpaphroyu password=4b618a6f10d006a4ab5d709c27e563d2f7100312015dd1e4286e8faafb40065d";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblAcc WHERE _userName='".$username."' AND _password='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>
