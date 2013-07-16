<?php
$ticket = $_POST["ticket"];

$mysqli = new mysqli('localhost', 'cheaperc_user1', 'pko2RWu', 'cheaperc_database90336247');

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$stmt = $mysqli->prepare("SELECT ticket FROM Tickets WHERE ticket=?");
$stmt->bind_param('s', $sample);   // bind $sample to the parameter

// escape the POST data for added protection
$sample = isset($ticket)
          ? $mysqli->real_escape_string($ticket)
          : '';

// execute prepared statement 
$stmt->execute();

$stmt->bind_result($returned_name);


while($stmt->fetch()){
    $elNumber=$returned_name;
}



/* close statement and connection */
$stmt->close();

/* close connection */
$mysqli->close();

    if((int)$elNumber==(int)$ticket){
        echo 1;
    }
    else {
	    echo 0;
    }
?>