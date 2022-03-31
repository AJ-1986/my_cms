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
        <script language="javascript" type="text/javascript">
            function otworz(id_modulu) {
                document.location='index.php?', id_modulu, '=1';
            }
        </script>
    </head>
    <body>
        <div class="glowna">
            <div class="lewy_panel">
                <div class="logo">
                    <img src="../images/proxweb_logo.png" alt="ProxWeb CMS Logo">
                </div>
                <div class="lewe_menu">
                    <h3>Menu:</h3>
                    <p class="nawigacja">
                        <button class="lewe_przyciski" onclick="otworz('moje_strony')">Moje strony</button>
                    </p>
                </div>
            </div>
            <div class="centrum">
                <div class="strona">
                    <p>Zostałeś pomyślnie zalogowany<br>
                    <a href="wyloguj.php">Wyloguj</a></p> 
                </div>
            </div>
            <div class="stopka">
                <p class="stopka">&copy; ProxWeb CMS <?php echo gmdate('Y'); ?></p>
            </div>
        </div>               
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