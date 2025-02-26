<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Můj Web</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Tvůj vlastní CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Ikona pro favicon -->
    <link rel="icon" href="elephant.png" type="image/png">

</head>

<body>

   <!-- Navigace -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">Můj Web</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="aplikace.html">Aplikace</a></li>
                        <li class="nav-item"><a class="nav-link" href="kontakt.html">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main>
        <h1 class="mt-5">Vítejte na Mém Webu</h1>
        <p>Toto je ukázkový web vytvořený pomocí Bootstrapu.</p>  
        <p class="lead">
            Toto je moje úvodní stránka, kde vám představím různé projekty, které vytvářím v PHP. Na tomto webu najdete aplikace, které běží na serveru, a budou rozděleny do různých kategorií a stránek. Každá aplikace bude mít vlastní stránku s podrobnostmi a ukázkami. 
        </p>
        <p>
            Cílem tohoto projektu je nejen ukázat mé dovednosti v programování, ale také sdílet nápady a experimenty, které mě při vývoji zajímají. Ať už se jedná o jednoduché webové aplikace, nebo složitější systémy, všechny budou přístupné zde na webu. Prozkoumejte různé sekce a zjistěte více!
        </p>
        <p>
            Pokud máte jakékoliv dotazy nebo návrhy, neváhejte mě kontaktovat prostřednictvím sekce "Kontakt". Doufám, že se vám web líbí a že zde najdete užitečné informace!
        </p><br>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            <h2>Upload souboru</h2>
            <input type="file" name="file" id="file">
            <button type="submit" name="submit">Nahrát soubor</button>
        </form>



    </main>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 Můj Web. Všechna práva vyhrazena.</p>

        <!-- Sociální ikony -->
        <div>
            <a href="https://facebook.com" target="_blank">
                <img src="facebook-icon.png" alt="Facebook" class="social-icon">
            </a>
            <a href="https://twitter.com" target="_blank">
                <img src="twitter-icon.png" alt="Twitter" class="social-icon">
            </a>
        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
