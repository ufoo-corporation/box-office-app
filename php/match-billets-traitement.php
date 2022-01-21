<?php 

session_start();
if (isset($_SESSION["user"])){
    header("location:../paiement.php");
} else {
    header("location:../login.php?login_err=account_needed");
}

?>