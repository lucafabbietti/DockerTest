<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "MYSQL_DATABASE";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM 'x'";
  // use exec() because no results are returned
  $result = $conn->query($sql);
} catch(PDOException $e) {
  $result = $e->getMessage();
}
$conn = null;
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Orario attuale:
        <?php
        echo date("D, d M Y H:i:s");
        ?>
    </h1>
    <h1>
        Risultato della query: <?php echo $result; ?>
    </h1>
</body>

</html>