<?php
/*
$mail = $_POST["mail"];
$pass = $_POST["password"];
*/
$mail="";
$pass = "";
$mysqli = new mysqli('localhost', 'cheaperc_user1', 'pko2RWu', 'cheaperc_database90336247');
//$mysqli = new mysqli('localhost', 'root', 'pko2RWu', 'test');

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$stmt = $mysqli->prepare("SELECT password FROM step_usuario WHERE mail=?");
$stmt->bind_param('s', $sample);   // bind $sample to the parameter

// escape the POST data for added protection
$sample = isset($mail)
          ? $mysqli->real_escape_string($mail)
          : '';

// execute prepared statement 
$stmt->execute();

$stmt->bind_result($returned_name);


while($stmt->fetch()){
    $password=$returned_name;
}



/* close statement and connection */
$stmt->close();

/* close connection */
$mysqli->close();

    if($password!=$pass){
        echo 1;
    }
    else {
	    echo 0;
    }
?>