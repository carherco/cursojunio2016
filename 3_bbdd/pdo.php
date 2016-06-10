<?php
include 'plantillas/cabecera.php';
?>

<h1>PDO</h1>

<?php
include 'config.php';
// pdo //
// === //

try {
    $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully</br>"; 

    //Ejecutar SQL
    $sql = "INSERT INTO lista (nombre)
    VALUES ('Lista creada con pdo')";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully</br>";

    //Ejecutar SQL para obtener datos (SELECT)
    $sql = "SELECT * FROM lista";
    $result = $conn->query($sql);

    if (count($result) > 0) {
        
        foreach ($result as $row) {
            $id = $row["id"];
            $nombre = $row["nombre"];
            echo "<div>Id: $id - Nombre: $nombre</div>";
        }

    } else {
        echo "0 results".PHP_EOL;
    }
} catch(PDOException $e) {
    echo "Ha ocurrido un error: " . $e->getMessage()."</br>";
}


$conn = null;
?>

<?php
include 'plantillas/pie.php';
?>