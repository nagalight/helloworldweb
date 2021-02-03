<html>
<head>
</head>
<body>
  <?php
Class dbObj{
/* Database connection start */
        var $servername, $username, $password, $dbname, $port, $conn;
 
__construct()
{
  $this->servername = "ec2-54-157-149-88.compute-1.amazonaws.com";
  $this->username = "qanxxdddkskppr";
  $this->password = "893444577927e87ce38eb3dfe6a54196f9886db297c028fe49bdf34227fd611c";
  $this->dbname = "d1vgcd4es56qat";
  $this->port = "5432";
}
function getConnstring() {
$con = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
 
/* check connection */
if (pg_last_error()) {
printf("Connect failed: %s\n", pg_last_error());
exit();
} else {
$this->conn = $con;
}
return $this->conn;
}
}
?>
<body>
</html>
