<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   <title>Układ Słoneczny</title>
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="main">
        
    </h1>
        <div class="main">
        <div class="sidebar">
                <nav>
                <?php
                  if (isset($_SESSION['iflogged']) && $_SESSION['iflogged']==true)  
                  {
                      echo"Jesteś zalogowany<br/>";
                      echo"<a href=logout>Wyloguj</a></br>";
                  }
                  else
                  {
                    echo"Nie jesteś zalogowany<br/>";
                    echo"<a href=loginform>Zaloguj się</a><br/>";
                    echo"<a href=registerform>Nie masz konta? Zarejestruj się</a><br/>";
                  }
                ?>
                <a href="index">Strona główna</a><br>
                Tematy:
                <ol type="I">
                    <li>
                        <a href="slonce">Słońce</a>
                    </li>
                    <li>
                        <div class="hd">
                        Budowa układu słonecznego:
                        <div class="budowa">
                        <ul>
                            <li>
                                <a href="wewuklad">Wewnętrzny układ słoneczny</a>
                            </li>
                            <li>
                                <a href="zewuklad">Zewnętrzny układ słoneczny</a>
                            </li>
                            <li>
                                <a href="inne">Inne obszary układu słonecznego</a>
                            </li>
                        </ul>
                        </div>
                        </div>
                    </li>
                    <li>
                        <a href="quiz" target="_blank">Quiz wiedzy o układzie słonecznym</a>
                    </li>
                </ol>
                <br><a href="gallery">Galeria zdjęć</a><br>
                1 j.a - Jednostka astronomiczna = 150 mln km (średnia odległość Ziemii od Słońca).
                </nav>
            </div>
            <div class="space">
                space
            </div>
            <div class="maincontent">
            <?php
$id=$sendstatus;
switch($id)
{
    case 0:
        echo"Plik został przesłany poprawnie";
        break;
    case 1:
        echo"Plik jest za duży. Maksymalny rozmiar to 1MB.";
        break;
    case 2:
        echo"Niepoprawny format pliku. Akceptowalne formaty:PNG,JPG.";
        break;
    case 3:
        echo"Plik jest za duży. Maksymalny rozmiar to 1MB.\nNiepoprawny format pliku. Akceptowalne formaty:PNG,JPG.";
        break;
    default:
        echo"Inny błąd, spróbuj ponownie.";
}
echo"<a href=gallery>Powrót</a>";
?>
            </div>
            <div class="space">
                space
            </div>
    </div>
    <footer>
            Copyright 2020, Wiktor Kawka<br>
            <a href="http://wikipedia.org">Źródło:wikipedia.pl</a>
        </footer>

</body>
</html>