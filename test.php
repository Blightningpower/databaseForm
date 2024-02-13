<?php
session_start();

if (isset($_POST['send_info'] ))
{
    // Retrieve form data
    $yourName = $_POST['yourName'];
    $yourAge = $_POST['yourAge'];
    $positive1 = $_POST['positive1'];
    $positive2 = $_POST['positive2'];
    $negative1 = $_POST['negative1'];
    $negative2 = $_POST['negative2'];

    // Database connection parameters
    $servername = "localhost:3306";
    $username = "nvclrrwo";
    $password = "PowerPress123!";
    $dbname = "Website_Ervaring_Enquete";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert data into database
    $sql = "INSERT INTO Website_Ervaring_Enquete (yourName, yourAge, positive1, positive2, negative1, negative2) VALUES ('$yourName', '$yourAge', '$positive1', '$positive2', '$negative1', '$negative2')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();

    // Redirect to another page
    header("Location: html/thanks.html");
    exit();
}
?>

<?php

$servername = "localhost";
$username = "test_dbcon";
$password = "test_dbcon";
$dbname = "test_dbcon";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}   else {
        echo "connected";
}


?>

<?php
// Establish a connection to the database
$dsn = "mysql:host=$servername;dbname=$dbname";
$username = "test_dbcon";
$password = "test_dbcon";
$dbname = "test_dbcon";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connection failed: " . $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yourName = $_POST['yourName'];
    $yourAge = $_POST['yourAge'];
    $positive1 = $_POST['positive1'];
    $positive2 = $_POST['positive2'];
    $negative1 = $_POST['negative1'];
    $negative2 = $_POST['negative2'];

    try {
        $query = "INSERT INTO helloMonday_responses (yourName, yourAge, positive1, positive2, negative1, negative2) VALUES
        (?, ?, ?, ?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$yourName, $yourAge, $positive1, $positive2, $negative1, $negative2]);

        $pdo = null;
        $stmt = null;

        header("Location: html/thanks.html");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
}

?>