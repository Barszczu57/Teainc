<!DOCTYPE>
<html lang="pl">
<head>
    <Title>Teainc</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container_reg">
        <header>
            <a href="index.php" class="name">Teainc</a>
            <nav>
                <a href="" class="navbutton">
                    <img src="basket.svg" alt="koszyk">
                </a>
                <a href="logowanie.php" class="navbutton">
                    <img src="profile.svg" alt="profil">
                </a>
                <a href="panel.php" class="navbutton">
                    <img src="settings.svg" alt="ustawienia">
                </a>
            </nav>
        </header>
        <div class="container_reg-content">
            <div class="emptybox1">
            </div>
            <div class="panel_register">

                <div class="panel_register-cont" id="form_register">
                    <label class="panel_register-lab" for="username_reg">Login</label>
                    <input class="panel_register-inp" type="text" name="username_reg" id="username_reg" placeholder="Tu wpisz swój login">

                    <label class="panel_register-lab" for="email_reg">Email</label>
                    <input class="panel_register-inp" type="email" name="email_reg" id="email_reg" placeholder="Tu wpisz swoj email">

                    <label class="panel_register-lab" for="password_reg">Hasło</label>
                    <input class="panel_register-inp" type="password" name="password_reg" id="password_reg" placeholder="Tu wpisz swoje hasło">

                    <button class="panel_register-sbt" type="submit" name="submit_reg"  id="submit_reg">Zarejestruj</button>
                </div>
                <script>
                    const formReg= {
                        username_reg: document.getElementById('username_reg'),
                        email_reg: document.getElementById('email_reg'),
                        password_reg: document.getElementById('password_reg'),
                        submit_reg: document.getElementById('submit_reg'),
                    }

                    formReg.submit_reg.addEventListener('click', () => {
                        const requestReg = new XMLHttpRequest();

                        requestReg.onload = () => {
                            let responseObjectReg =  null;

                            try{
                                responseObjectReg =  JSON.parse(requestReg.responseText);
                            } catch (e) {
                                console.error('Could not parse JSON!');
                            }
                            if(responseObjectReg) {
                                handleResponseReg(responseObjectReg);
                            }
                        };

                        const  requestDataReg = `username_reg=${formReg.username_reg.value}&email_reg=${formReg.email_reg.value}&password_reg=${formReg.password_reg.value}`;

                        requestReg.open('post', 'register.php');
                        requestReg.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        requestReg.send(requestDataReg);
                    });

                    function handleResponseReg (responseObjectReg) {
                        if(responseObjectReg.ok) {
                            location.href = "account.php"
                        }else{
                            console.error("wywołanie metody GET wyświetlającej errory");
                        }
                    }
                </script>
                <div style="display: flex; justify-content: space-between;">
                    <button class="panel_register-switch" value="Cofnij się!" onclick="history.back()">Cofnij się!</button>
                    <a href="logowanie.php"><button class="panel_register-switch" value="Zaloguj się!">Zaloguj się!</button></a>
                </div>
            </div>
            <div class="emptybox2">
            </div>
        </div>
        <footer style="padding: 10px">
            <div>
                Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a>
                from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
            </div>
        </footer>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
