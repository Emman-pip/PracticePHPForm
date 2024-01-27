<?php
// servername, username, password, dbname
/*
$host = "bfronqa2lmvgzf0kknx2-mysql.services.clever-cloud.com";
$username = "ujx2n1qf7n69vjbg";
$password = "qGqc18Xc28aj1G1dvmKo";
$dbName = "bfronqa2lmvgzf0kknx2";

try {
    $conn = new mysqli($host, $username, $password, $dbName, 3306);
    echo "CONNECTED!! <br>";
} catch (Error $e) {
    echo $e;
}

if ($conn->connect_error){
    // echo "hello world";
    die("Connection failed: " . $conn->connect_error);
} else {
    // $createTable = "DROP TABLE sampleTable;";
    // $conn->query($createTable);
    // $conn->commit();
    // $result = $conn->query("SHOW TABLES;", MYSQLI_USE_RESULT);
    $result = $conn->query("SHOW TABLES;");

    $data = mysqli_fetch_all($result);
    var_dump($data);
    $conn->close();
    // for ($i = 0; $i < count($data); $i++){
    //     echo $data[$i][0] . " " . $data[$i][1] . "<br>";
    // }
}
*/

class FormCollection {
    private $host = "bfronqa2lmvgzf0kknx2-mysql.services.clever-cloud.com";
    private $username = "ujx2n1qf7n69vjbg";
    private $password = "qGqc18Xc28aj1G1dvmKo";
    private $dbName = "bfronqa2lmvgzf0kknx2";
    public $mysqli;

    private function connect(){
        try {
            $this->mysqli = new mysqli($this->host, $this->username,  $this->password,  $this->dbName, 3306);
            // echo "<br>Connection Established.<br>";
            return false;
        } catch (Error $e){
            echo "<br>Connection error: " . $e;
            return true;
        }
    }
    function actionQuery($query){
        try {
            $this->connect();
            $this->mysqli->query($query);
            $this->mysqli->commit();
            $this->mysqli->close();
            return false;
        } catch (Error $e){
            echo "Invalid action query: " . $e;
            return true;
        }
    }
    function selectQuery($query){ //  works already
        try {
            $this->connect();
            $result = $this->mysqli->query($query);
            $data = mysqli_fetch_all($result);
            $result->free_result();
            // echo "Data in selectFunc: ";
            // var_dump($data);
            // echo "<br>";
            $this->mysqli->close();
            return $data;
            
        } catch (Error $e){
            echo "Invalid select query: " . $e;
        }
    }
}