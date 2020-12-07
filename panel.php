<!DOCTYPE>
<html lang="pl">
<head>
    <Title>Teainc</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container_panel">
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
        <div class="container_panel-settings">
            <div class="content-switch">
                <a class="content-switch-text">Pracownicy</a>
                    <a class="linkw content-switch-text-edit" href="#about" id="workeradd" data-link="wadd">Dodaj</a>
                    <a class="linkw content-switch-text-edit" href="#about" id="workeredit" data-link="wedit">Edytuj</a>
                    <a class="linkw content-switch-text-edit" href="#about" id="workerdel" data-link="wdel">Usuń</a>
                <a class="content-switch-text">Produkty</a>
                    <a class="link content-switch-text-edit" href="#about" id="productadd" data-link="padd]">Dodaj</a>
                    <a class="link content-switch-text-edit" href="#about" id="productedit" data-link="pedit">Edytuj</a>
                    <a class="link content-switch-text-edit" href="#about" id="productdel" data-link="pdel">Usuń</a>
            </div>
            <div class="content-edit-pracownicy " id="content-edit-pracownicy">
                <div class="textWord_about worker_edit" data-link="wadd">
                    <p>Dodaj pracownika</p>
                    <label class="" for="worker_name">Login</label>
                    <input class="worker_edit-inp" type="text" name="worker_name" id="worker_name" placeholder="login">

                    <label class="" for="worker_mail">Email</label>
                    <input class="worker_edit-inp" type="email" name="worker_mail" id="worker_mail" placeholder="email">

                    <label class="" for="worker_passwd">Hasło</label>
                    <input class="worker_edit-inp" type="password" name="worker_passwd" id="worker_passwd" placeholder="hasło">

                    <button class="panel_register-sbt" type="submit" name="worker_sbt"  id="worker_sbt">Zarejestruj</button>
                </div>
                <script>
                    const formWorkerReg= {
                        worker_name: document.getElementById('worker_name'),
                        worker_mail: document.getElementById('worker_mail'),
                        worker_passwd: document.getElementById('worker_passwd'),
                        worker_sbt: document.getElementById('worker_sbt'),
                    }

                    formWorkerReg.worker_sbt.addEventListener('click', () => {
                        const requestWorkerReg = new XMLHttpRequest();

                        requestWorkerReg.onload = () => {
                            let responseObjectWorkerReg =  null;

                            try{
                                responseObjectWorkerReg =  JSON.parse(requestWorkerReg.responseText);
                            } catch (e) {
                                console.error('Could not parse JSON!');
                            }
                            if(responseObjectWorkerReg) {
                                handleResponseReg(responseObjectWorkerReg);
                            }
                        };

                        const  requestDataWorkerReg = `worker_name=${formWorkerReg.worker_name.value}&worker_mail=${formWorkerReg.worker_mail.value}&worker_passwd=${formWorkerReg.worker_passwd.value}`;

                        requestWorkerReg.open('post', 'workerreg.php');
                        requestWorkerReg.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        requestWorkerReg.send(requestDataWorkerReg);
                    });

                    function handleResponseReg (responseObjectReg) {
                        if(responseObjectReg.ok) {
                            location.href = "account.php"
                        }else{
                            console.error("wywołanie metody GET wyświetlającej errory");
                        }
                    }
                </script>
                <div class="textWord_about" data-link="wedit">
                    <p>w2</p>
                </div>
                <div class="textWord_about" data-link="wdel">
                    <p>w3</p>
                </div>
            </div>
            <div class="content-edit-produkty unvisible" id="content-edit-produkty">
                Produkty
                <div class="textWord_about" data-link="padd">
                    <p>p1</p>
                </div>
                <div class="textWord_about" data-link="pedit">
                    <p>p2</p>
                </div>
                <div class="textWord_about" data-link="pdel">
                    <p>p3</p>
                </div>
            </div>
        </div>
        <footer>
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