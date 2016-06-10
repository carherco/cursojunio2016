<?php
include 'plantillas/cabecera.php';
?>

<h1>Acceso a base de datos</h1>


<form class="form-inline">
    <label class="checkbox-inline">
        <input type="checkbox" id="check-mysqli_f" value="mysqli_f" checked="checked"> mysqli funcional
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" id="check-mysqli_oo" value="mysqli_oo" checked="checked"> mysqli orientado a objetos
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" id="check-pdo" value="pdo" checked="checked"> pdo
    </label>
</form>


<?php $var = "texto";?>
<div class="row">
    
<div id="codigo-mysqli_f" class="codigo col-md-6"><pre>
// mysqli funcional //
// ================ //

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//Ejecutar SQL
$sql = "INSERT INTO lista (nombre)
VALUES ('Nombre de la lista')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

//Ejecutar SQL para obtener datos (SELECT)
$sql = "SELECT * FROM lista";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $nombre = $row["nombre"];
        ......
    }
} else {
    echo "0 results";
}


mysqli_close($conn);
</pre></div> 
    

    
    
    
    
<div id="codigo-mysqli_oo" class="codigo col-md-6"><pre>
// mysqli orientado a objetos //
// ========================== //

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

//Ejecutar SQL
$sql = "INSERT INTO lista (nombre)
VALUES ('Nombre de la lista')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $conn->error;
}

//Ejecutar SQL para obtener datos (SELECT)
$sql = "SELECT * FROM lista";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $nombre = $row["nombre"];
        ......
    }
} else {
    echo "0 results";
}


$conn->close();
</pre></div>    
    
    
    
    
    
    
    
    
<div id="codigo-pdo" class="codigo col-md-6"><pre>
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
            ......
        }

    } else {
        echo "0 results";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$conn = null;
</pre></div>

    
    
    
    
</div>

<?php
include 'plantillas/pie.php';