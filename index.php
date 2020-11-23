<!DOCTYPE>
<html>
<head>
    <Title>Logowanie</Title>
<link rel="stylesheet" type="text/css" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <div class="container_log">
        <!-- commit test -->
        <header class="header">
            Teainc
        </header>

        <div class="panel_signin panel_bg" id="panel_sig">
            <div class=" form panel_form_sign"  id="form_sign" action="./" method="post">

                <label class="pl_labels" for="username1">Login</label>
                <input class="pl_input" type="text" name="username1" id="username1" size="20" placeholder="Create login">
                <span class="pl_span">User with that login exist</span>

                <label class="pl_labels" for="email1">Email</label>
                <input class="pl_input" type="email" name="email1" id="email1" placeholder="Write your email here">
                <span class="pl_span">User with that email exist</span>

                <label class="pl_labels" for="password1">Hasło</label>
                <input class="pl_input" type="password" name="password1" id="password1" placeholder="Create password">
                <span class="pl_span">Password doesn't meet requirements</span>

                <button class="pl_button_login" type="submit" name="submit1" id="submit1">Utwórz konto</button>
            </div>

            <script>
                const form1 = {
                    username1: document.getElementById('username1'),
                    email1: document.getElementById('email1'),
                    password1: document.getElementById('password1'),
                    submit1: document.getElementById('submit1'),
                }

                form1.submit1.addEventListener('click', () => {
                    const request1 = new XMLHttpRequest();

                    request1.onload = () => {
                        let responseObject1 =  null;

                        try{
                            responseObject1 =  JSON.parse(request1.responseText);
                        } catch (e) {
                            console.error('Could not parse JSON!');
                        }
                        if(responseObject1) {
                            handleResponse1(responseObject1);
                        }
                    };

                    const  requestData1 = `username1=${form1.username1.value}&email1=${form1.email1.value}&password1=${form1.password1.value}`;

                    request1.open('post', 'register.php');
                    request1.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    request1.send(requestData1);
                });

                function handleResponse1 (responseObject1) {
                    if(responseObject1.ok) {
                        location.href = "account.php"
                    }else{
                        $('#username1').addClass('pl_input_error')
                        $('#email1').addClass('pl_input_error')
                    }
                }
            </script>
            <div class="panel_btn" id="go_sig">
                <p class="btn_info_text">Nie masz konta ? Zarejestruj się już teraz!</p>
                <button class="log_sign_change" >Zarejestruj się</button>
            </div>
        </div>

        <div class="panel_login" id="panel_log">
            <div class="form panel_form_log change_panel" id="form_login" action="./" method="post">

                <label class="pl_labels" for="username2">Login</label>
                <input class="pl_input" type="text" name="username2" id="username2" size="20" placeholder="Write your login here">
                <span class="pl_span">Wrong login</span>

                <label class="pl_labels" for="password2">Hasło</label>
                <input class="pl_input" type="password" name="password2" id="password2" placeholder="Write your password here">
                <span class="pl_span">Wrong password</span>

                <button class="pl_button_login" type="submit" name="submit2"  id="submit2">Zaloguj</button>
            </div>
            <script>
                const form2 = {
                    username2: document.getElementById('username2'),
                    password2: document.getElementById('password2'),
                    submit2: document.getElementById('submit2'),
                }

                form2.submit2.addEventListener('click', () => {
                   const request2 = new XMLHttpRequest();

                   request2.onload = () => {
                       let responseObject2 =  null;

                       try{
                           responseObject2 =  JSON.parse(request2.responseText);
                       } catch (e) {
                           console.error('Could not parse JSON!');
                       }
                       if(responseObject2) {
                           handleResponse2(responseObject2);
                       }
                   };

                   const  requestData2 = `username2=${form2.username2.value}&password2=${form2.password2.value}`;

                   request2.open('post', 'login.php');
                   request2.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                   request2.send(requestData2);
                });

                function handleResponse2 (responseObject2) {
                     if(responseObject2.ok) {
                         location.href = "account.php"
                     }else{
                         $('#username2').addClass('pl_input_error')
                         $('#password2').addClass('pl_input_error')
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












