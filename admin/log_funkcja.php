<?php
include 'log_konfiguracja.php';

if($_POST['login_uz'] == $us_login AND $_POST['haslo_uz'] == $us_paswd)
{
    echo 'Zalogowany';
}
else
{    
?>
<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <script language="javascript" type="text/javascript">
            function przekieruj() {
                document.location='zaloguj.php?blad=1';
            }
        </script>
    </head>
    <body>
        <script language="javascript" type="text/javascript">
            przekieruj();
        </script>
    </body>
</html>
<?php
}
?>