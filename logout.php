<?php
if(isset($_POST['logout']))
{
    unset($_SESSION['email']);
    unset($_SESSION['loggedin']);
}
?>