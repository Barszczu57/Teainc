<!DOCTYPE>
<html>
<head>
    <Title>Logowanie</Title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

    <div id="container_log">
        <!-- commit test -->
        <div class="header">
            Header (pusty)
        </div>

        <div class="panel_signin panel_bg" id="panel_sig">
            <form class="panel_form_sign"  id="form_sign" action="./" method="post">

                <label class="pl_labels" for="login.name">Login</label>
                <input class="pl_input pl_input_errorX" type="text" name="login.name" id="login.name" size="20" placeholder="Create login">
                <span class="pl_span">User with that login exist</span>

                <label class="pl_labels" for="login.password">Email</label>
                <input class="pl_input pl_input_errorX" type="email" name="login.password" id="login.password" placeholder="Write your email here">
                <span class="pl_span">User with that email exist</span>

                <label class="pl_labels" for="login.password">Password</label>
                <input class="pl_input pl_input_errorX" type="password" name="login.password" id="login.password" placeholder="Create password">
                <span class="pl_span">Password doesn't meet requirements</span>

                <button class="pl_button_login" type="submit">Create account</button>
            </form>
            <div class="panel_btn">
                <p class="btn_info_text">Nie masz konta ? Zarejestruj się już teraz!</p>
                <button class="log_sign_change" id="go_sig">Zarejestruj się</button>
            </div>
        </div>

        <div class="panel_login" id="panel_log">
            <form class="panel_form_log change_panel" id="form_login" action="./" method="post">

                <label class="pl_labels" for="login.name">Login</label>
                <input class="pl_input pl_input_errorX" type="text" name="login.name" id="login.name" size="20" placeholder="Write your login here">
                <span class="pl_span">Wrong login</span>

                <label class="pl_labels" for="login.password">Password</label>
                <input class="pl_input pl_input_errorX" type="password" name="login.password" id="login.password" placeholder="Write your password here">
                <span class="pl_span">Wrong password</span>

                <button class="pl_button_login" type="submit">Login</button>
            </form>
            <div class="panel_btn">
                <p class="btn_info_text">Posiadasz konto ? Zaloguj się!</p>
                <button class="log_sign_change change_btn" id="go_log">Zaloguj się</button>
            </div>
        </div>

        <div class="footer">
            Footer (pusty)
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>












