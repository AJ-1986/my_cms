<?php
include 'log_konfiguracja.php';

if($_POST['login_uz'] == $us_login AND $_POST['haslo_uz'] == $us_paswd)
{
    // session_start();

    // generuje klucz logowania
    $klucz_gen = rand(1, 99).rand(1, 99).rand(1, 99).rand(1, 99).rand(1, 99);
    $szyfr_gen = md5($klucz_gen);
    $_SESSION['autoryzacja_id'] . $_SESSION['klucz_id'] = $szyfr_gen;
    // koniec
?>
<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <script language="javascript" type="text/javascript">
            function przekieruj() {
                document.location='index.php';
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
else
{
    session_destroy();    
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