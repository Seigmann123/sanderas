<?php
// kobler til databasen
$conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

// henter bruker melding
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

//Sjekker om bruker sitt query er i database query
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// Hvis bruker sitt query matcher med database query vil den vise resultet ellers vil den gå til else statment
if(mysqli_num_rows($run_query) > 0){
    //Henter svaret fra databasen 
    $fetch_data = mysqli_fetch_assoc($run_query);
    // Lagrer svaret til en variable som sender til ajax
    $replay = $fetch_data['replies'];
    echo $replay;
}else{
    //Svarer vis den ikke query er i databasen
    echo "Jeg skjønner ikke hva du mener";
}

?>