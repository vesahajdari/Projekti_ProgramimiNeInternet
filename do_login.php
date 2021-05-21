<?php

session_start();
if (isset($_POST['do_login'])) {
    include_once("db/db_connection.php");

    $email = $_POST['email'];
    $pass = $_POST['password'];

    if (!($stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = ?"))) {
        die( "Can't prepare the statement :(" );
    }

    $stmt->bind_param('s', $email); // 's' specifies the variable type => 'string'

    $stmt->execute();
    $resultset = $stmt->get_result();

    $row = mysqli_fetch_assoc($resultset);

    if($row['password']==$pass){
        echo "success";
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $row['email'];
    } else {
        echo "email or password does not exist."; // wrong details
    }
    exit();
}

?>