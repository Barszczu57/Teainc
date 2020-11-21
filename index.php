<!DOCTYPE>
<html>
<head>
    <Title>Logowanie</Title>
<link rel="stylesheet" type="text/css" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <input class="pl_input pl_input_errorX" type="email" name="login.password" id="login.email" placeholder="Write your email here">
                <span class="pl_span">User with that email exist</span>

                <label class="pl_labels" for="login.password">Hasło</label>
                <input class="pl_input pl_input_errorX" type="password" name="login.password" id="login.password" placeholder="Create password">
                <span class="pl_span">Password doesn't meet requirements</span>

                <button class="pl_button_login" type="submit">Utwórz konto</button>
            </form>
            <div class="panel_btn" id="go_sig">
                <p class="btn_info_text">Nie masz konta ? Zarejestruj się już teraz!</p>
                <button class="log_sign_change" >Zarejestruj się</button>
            </div>
        </div>

        <div class="panel_login" id="panel_log">
            <div class="form panel_form_log change_panel" id="form_login" action="./" method="post">

                <label class="pl_labels" for="username">Login</label>
                <input class="pl_input" type="text" name="username" id="username" size="20" placeholder="Write your login here">
                <span class="pl_span">Wrong login</span>

                <label class="pl_labels" for="password">Hasło</label>
                <input class="pl_input" type="password" name="password" id="password" placeholder="Write your password here">
                <span class="pl_span">Wrong password</span>

                <button class="pl_button_login" type="submit" id="submit">Zaloguj</button>
            </div>
            <script>
                const form = {
                    username: document.getElementById('username'),
                    password: document.getElementById('password'),
                    submit: document.getElementById('submit'),
                }

                form.submit.addEventListener('click', () => {
                   const request = new XMLHttpRequest();

                   request.onload = () => {
                       let responseObject =  null;

                       try{
                           responseObject =  JSON.parse(request.responseText);
                       } catch (e) {
                           console.error('Could not parse JSON!');
                       }
                       if(responseObject) {
                           handleResponse(responseObject);
                       }
                   };

                   const  requestData = `username=${form.username.value}&password=${form.password.value}`;

                   request.open('post', 'login.php');
                   request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                   request.send(requestData);
                });

                function handleResponse (responeObject) {
                     if(responeObject.ok) {
                         location.href = "account.php"
                     }else{
                         $('#username').addClass('pl_input_error')
                         $('#password').addClass('pl_input_error')
                     }
                }
            </script>
            <div class="panel_btn change_btn" id="go_log">
                <p class="btn_info_text">Posiadasz konto ? Zaloguj się!</p>
                <button class="log_sign_change " >Zaloguj się</button>
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












