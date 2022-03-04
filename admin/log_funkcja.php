<?php
include 'log_konfiguracja.php';

if($_POST['login_uz'] == $us_login AND $_POST['haslo_uz'] == $us_paswd)
{
    echo 'Zalogowany';
}
else
{
    echo 'Niezalogowany';
}
?>