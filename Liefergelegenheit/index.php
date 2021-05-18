
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Liefergelegenheit</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript">
            $(document).ready(function(){
                $('.menubutton').click(function(){
                    $('.main').slideToggle('slow');
                });
            });
        </script>
    </head>
    <body>
        <header>
            <div class="main">
                <div class="logo">
                   <img class="img-logo" src="images/Liefer.png">

                </div>
                <div class="menubar">
                   <a href="#main ul"><img class="menubutton" src="images/menu0.png"/></a>
                </div>   
                <ul>
                    <li class="active"><a href="https://csc.does-it.net/liefergelegenheit/index.php">Zuhause</a></li>
                    <li><a href="#">Dienstleistungen</a></li>
                    <li><a href="#">Buchung</a></li>
                    <li><a href="#">Über Uns</a></li>
                    <li><a href="#">Kontakt</a></li>
                </ul>
                
            </div>
            <div class="button">
                <a href="./registerpage/index.php", class="btn">Anmeldung</a>
            </div>
            <form class="searchplace">
                <h1>Finden Sie eine <span>Liefer</span>gelegenheit in Ihrer Nähe</h1><br>
                <div class="form-box">
                    <input type= "text" class="Search-field buch" placeholder="Buch"><br>
                    <input type= "text" class="Search-field lage" placeholder="Lage"><br>
                    <button class="search-btn" type="button">Suche</button>
                </div>
            </form>
        </header>
        <footer>
            <ul>
                <li>&copy: 2020 CSC-TechGroup</li>
                <li><a href="#">Sicherheit</a></li>
                <li><a href="dataprotection.php" class="datapro">Datenschutz</a></li>
                <li><a href="#">Impressum</a></li>
            </ul>
        </footer>
    </body>
</html>