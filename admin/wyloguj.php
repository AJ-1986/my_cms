<?php
session_destroy();
?>
<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <script language="javascipt" type="text/javascript">
            function przekieruj() {
                document.location='zaloguj.php?wyloguj=1';
            }
        </script>
    </head>
    <body>
        <sctipt language="javascipt" type="text/javascipt">
            przekieruj();
        </script>
    </body>
</html>