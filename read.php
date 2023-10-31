<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=fb_db", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * FROM user");

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        //echo "ID: " . $row['id'] . ", Email: " . $row['email'] ."Password: " . $row['password']. "<br>";
        $id = $row['id'];
        $email = $row['email'];
        $password = $row['password'];

        echo "<table border='1'>
        <td>$id</td>
        <td>$email</td>
        <td>$password</td>
        </table>";

    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<style>
    table{
        border: none;
        display: flex;
        justify-content: center;
    }
    td{
        border: 1px solid black;
        width: 150px;
    }
</style>
