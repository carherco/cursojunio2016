<?php
include 'plantillas/cabecera.php';
?>

<h1>echo vs print_r vs var_dump</h1>

<?php
// pdo //
// === //

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 

    //Ejecutar SQL
    $sql = "INSERT INTO lista (nombre)
    VALUES ('Nombre de la lista')";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";

    //Ejecutar SQL para obtener datos (SELECT)
    $sql = "SELECT * FROM lista";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $nombre = $row["nombre"];
        }

    } else {
        echo "0 results";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$conn = null;
?>

<?php
include 'plantillas/pie.php';
?>