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

        <div class="panel_signin">
            <form class="panel_form" action="./" method="post">

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
        </div>

        <div class="panel_login">
            <form class="panel_form" action="./" method="post">

                <label class="pl_labels" for="login.name">Login</label>
                <input class="pl_input pl_input_errorX" type="text" name="login.name" id="login.name" size="20" placeholder="Write your login here">
                <span class="pl_span">Wrong login</span>

                <label class="pl_labels" for="login.password">Password</label>
                <input class="pl_input pl_input_errorX" type="password" name="login.password" id="login.password" placeholder="Write your password here">
                <span class="pl_span">Wrong password</span>

                <button class="pl_button_login" type="submit">Login</button>
            </form>

        </div>

        <div class="footer">
            Footer (pusty)
        </div>

    </div>
    <script src="javascript.js"></script>
</body>
</html>
