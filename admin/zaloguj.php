<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <meta name="autor" content="Adam Jurewicz">
        <title>Panel administracyjny Proxweb CMS - logowanie</title>
        <link rel="stylesheet" href="styl_zaloguj.css">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Expires" content="0">
    </head>
    <body>
        <div class="rdzen">
            <div class="naglowek">
                <h1 class="tytul">Logowanie do systemu ProxWebCMS</h1>
            </div>
            <div class="strona_rdzen">
                <div class="form_rdzen">
                    <div class="form_log">
                        <p class="form_log_instrukcja">
                            Aby się zalogować wypełnił prawidłowo poniższe pola formularza.
                        </p>
                        <form method="post" action="log_funkcja.php">
                            <table>
                                <tr>
                                    <td class="login">Nazwa użytkownika:</td>
                                    <td><input class="login_uz" type="text" name="login"></td>
                                </tr>
                                <tr>
                                    <td class="haslo">Hasło użytkownika:</td>
                                    <td><input class="haslo_uz" type="password" name="haslo_uz"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="nawigacja">
                                        <input class="wyczysc" type="reset" value="Wyczyść">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
                                        <input class="zaloguj" type="submit" value="Zaloguj">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="stopka">
                <div class="stopka_rdzen">
                    <?php
                    $data_stopka = gmdate('Y');
                    echo '&copy proxweb.com.pl '.$data_stopka;
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>