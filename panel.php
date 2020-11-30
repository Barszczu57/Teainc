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
                    <a class="content-switch-text-edit" id="workeradd">Dodaj</a>
                    <a class="content-switch-text-edit" id="workeredit">Edytuj</a>
                    <a class="content-switch-text-edit" id="workerdel">Usuń</a>
                <a class="content-switch-text">Produkty</a>
                    <a class="content-switch-text-edit" id="productadd">Dodaj</a>
                    <a class="content-switch-text-edit" id="productedit">Edytuj</a>
                    <a class="content-switch-text-edit" id="productdel">Usuń</a>
            </div>
            <div class="content-edit-pracownicy " id="content-edit-pracownicy">

            </div>
            <div class="content-edit-produkty unvisible" id="content-edit-produkty">

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