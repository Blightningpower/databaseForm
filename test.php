<?php
// Establish a connection to the database
$username = "test_dbcon";
$password = "test_dbcon";
$dbname = "test_dbcon";
$dsn = "mysql:host=$servername;dbname=$dbname";

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