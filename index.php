<?php require_once 'controls/validacoes.php'; ?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8" />

    <title>WEEDCHAT</title>
    <meta name="description" content="WEEDCHAT" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="icon" href="assets/img/fiveicon - weedchat.png" type="image/x-icon" />
    <link rel="shortcut icon" href="assets/img/fiveicon - weedchat.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <div class="conteiner">
        <?php
        if (!isset($_SESSION['name'])) {
            loginForm();
        } else {
        ?>
            <div id="wrapper">
                <div id="menu">
                    <p class="welcome">BEM VINDO AO <span class="weedchat-text">WEEDCHAT</span>, <b class="usuario-text"><?php echo $_SESSION['name']; ?></b></p>
                    <p class="logout"><a id="exit" href="#">SAIR DO WEEDCHAT</a></p>
                </div>

                <div id="chatbox">
                    <?php
                    if (file_exists("log.html") && filesize("log.html") > 0) {
                        $contents = file_get_contents("log.html");
                        echo $contents;
                    }
                    ?>
                </div>

                <form name="message" action="">
                    <input name="usermsg" type="text" id="usermsg" />
                    <input name="submitmsg" type="submit" id="submitmsg" value="ENVIAR MENSSAGEM" />
                </form>
            </div>
            <script src="assets/js/carregar_log.js"></script>
        <?php
        }
        ?>
    </div>

</body>

</html>