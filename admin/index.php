<?php
session_start();
if ($_SESSION['autoryzacja_id'] == '786tuyjfhgf67')
    {
?>
<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <meta name="autor" content="Adam Jurewicz">
        <title>Panel administracyjny Proxweb CMS</title>
        <link rel="stylesheet" href="panel_admin.css">
    </head>
    <body>
        <div class="glowna">
            <div class="lewy_panel">
                <div class="logo">
                    <img src="../images/proxweb_logo.png" alt="ProxWeb CMS Logo">
                </div>
                <div class="lewe_menu">

                </div>
            </div>
        </div>
        <p>Zostałeś pomyślnie zalogowany</p>
        <a href="wyloguj.php">Wyloguj</a>        
    </body>
</html>
<?php
    }
    else
    {        
?>
<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <meta name="autor" content="Adam Jurewicz">
        <title>Panel administracyjny Proxweb CMS</title>
        <script language="javascript" type="text/javascript">
            function przekieruj()
            {
                document.location='zaloguj.php';
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