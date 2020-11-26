<!DOCTYPE>
<html lang="pl">
<head>
    <Title>Teainc</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container_log">
        <header>
            <a href="index.php" class="name">Teainc</a>
            <nav>
                <a href="" class="navbutton">
                    <img src="basket.svg" alt="koszyk">
                </a>
                <a href="logowanie.php" class="navbutton">
                    <img src="profile.svg" alt="profil">
                </a>
                <a href="" class="navbutton">
                    <img src="settings.svg" alt="ustawienia">
                </a>
            </nav>
        </header>
        <div class="container_log-content">
            <div class="emptybox1">
            </div>
            <div class="panel_login">

                <div class="panel_login-cont" id="form_login">
                    <label class="panel_login-lab" for="username_log">Login</label>
                    <input class="panel_login-inp" type="text" name="username_log" id="username_log" placeholder="Tu wpisz swój login">

                    <label class="panel_login-lab" for="password_log">Hasło</label>
                    <input class="panel_login-inp" type="password" name="password_log" id="password_log" placeholder="Tu wpisz swoje hasło">

                    <button class="panel_login-sbt" type="submit" name="submit_log"  id="submit_log">Zaloguj</button>
                </div>
                <script>
                    const formLog= {
                        username_log: document.getElementById('username_log'),
                        password_log: document.getElementById('password_log'),
                        submit_log: document.getElementById('submit_log'),
                    }

                    formLog.submit_log.addEventListener('click', () => {
                        const requestLog = new XMLHttpRequest();

                        requestLog.onload = () => {
                            let responseObjectLog =  null;

                            try{
                                responseObjectLog =  JSON.parse(requestLog.responseText);
                            } catch (e) {
                                console.error('Could not parse JSON!');
                            }
                            if(responseObjectLog) {
                                handleResponseLog(responseObjectLog);
                            }
                        };

                        const  requestDataLog = `username_log=${formLog.username_log.value}&password_log=${formLog.password_log.value}`;

                        requestLog.open('post', 'login.php');
                        requestLog.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        requestLog.send(requestDataLog);
                    });

                    function handleResponseLog (responseObjectLog) {
                        if(responseObjectLog.ok) {
                            location.href = "account.php"
                        }else{
                            console.error("metoda GET wyświetlająca errory");
                        }
                    }
                </script>
                <div style="display: flex; justify-content: space-between;">
                    <button class="panel_login-switch" value="Cofnij się!" onclick="history.back()">Cofnij się!</button>
                    <a href="rejestracja.php"><button class="panel_login-switch" value="Zarejestruj się!">Zarejestruj się!</button>
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
<script src="jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
