<?php
session_start();
session_destroy();
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