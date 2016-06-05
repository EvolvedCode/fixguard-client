<?php
function moveOn(){
    header("Location: dash.php");
    exit;
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['login'])){
    if ($_SESSION['login'] == true){
        moveOn();
    }
}
unset($_SESSION['logintoken']);
unset($_SESSION['dispensefailed']);

$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["username"];
    $pass = $_POST["userpass"];
    if ($name == '' or $pass == ''){
        $msg = "You must fill all fields.";
    }
    else{
        $_SESSION['login'] = true;
        moveOn();
    }
}
?>

<html>
    <head>
        <style>
            .mdl-layout {
                align-items: center;
                justify-content: center;
            }
            .mdl-layout__content {
                padding: 24px;
                flex: none;
            }
        </style>

        <link href="css/material.min.css" rel="stylesheet" type="text/css">
        <script src="js/material.min.js"></script>
    </head>

    <body>
        <div class="mdl-layout mdl-js-layout mdl-color--grey-100">
            <main class="mdl-layout__content">
                <div class="mdl-card mdl-shadow--6dp">
                    <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
                        <h2 class="mdl-card__title-text">FixGuard Dashboard</h2>
                    </div>

                    <div class="mdl-card__supporting-text">
                        <form name="login" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" name="username" id="username" required/>
                                <label class="mdl-textfield__label" for="username">Username</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="password" name="userpass" id="userpass" required/>
                                <label class="mdl-textfield__label" for="userpass">Password</label>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Log in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
