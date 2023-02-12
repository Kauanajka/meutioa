    <?php
    $host = "localhost";
    $userName = "youruser_name";
    $password = "youruser_password";
    $dbName = "yourdatabase_namee";
    // Create database connection
    $conn = new mysqli($host, $userName, $password, $dbName);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    ?>