 <!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Terminal space svoboda v programování...." />
  <meta name="keywords" content="Terminal space - Novinky" />
  <meta name="author" content="Kankys" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="img/terminal-icon.png" />
 <!--nav bar-->
  <script src="https://kit.fontawesome.com/0a43c6cd1f.js" crossorigin="anonymous"></script>
  <!--icons dark, go to up-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!--ubuntu fonts-->
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap");
  </style>
  <title>Terminal space - Novinky</title>
</head>

<body>
  <header>
    <h1 class="title">💾 Terminal space - Novinky</h1>

    <!-- Terminal - navigation -->
    <nav class="navigation">
      <ul>
	<li><a href="index.html">Hlavní strana</a></li>
        <li><a href="apollo-nvim/index.html">🚀 ApolloNvim</a></li>
        <li><a href="kakoune/index.html">Kakoune</a></li>
        <!--<li><a href="manuals.html">Návody</a></li>-->
      </ul>
    </nav>
    <div class="menu-icon">
      <!-- Ikona hamburger -->
      <i class="fa-solid fa-bars"></i>
      <!-- Ikona cross -->
      <!-- <i class="fa-solid fa-xmark"></i> -->
    </div>
  </header>
  <hr />

  <!--Začátek sekcí - co h2 sekce + fotogalerie-->
  <section class="content" id="welcome">
    <section class="welcome">
	    <div class="code-box">
<h3>Vyšla nová verze AstoNvim</h3>
<code>01.04.2024</code>
<p><a href="https://github.com/AstroNvim/AstroNvim">AstroNvim</a> je distribuce Neovimu beznutnosti další konfigurace.</p>
<p>Na nové verzi se pracovalo 10 měsíců a 2 měsíce trvalo veřejné beta testování.</p>
	    </div>
	    <div class="code-box">
<h3>Vyšla nová verze Helix-editoru 24.03</h3>
<code>01.04.2024</code>
<p>Před několika málo dny vyšla nová verze postmoderního modálního editoru <a href="https://helix-editor.com/" target="_blank">Helix</a>.</p>
<p>Helix-editor je napsán v Rustu a běží v terminálech na všech OS.</p><p>Nová verze obsahuje přes 150 vylepšení, na jejich seznam se můžete podívat pod tímto <a href="https://helix-editor.com/news/release-24-03-highlights/" target="_blank">odkazem</a>.</p>
	    </div>
 <button onclick="scrollToTop()" id="scrollToTopBtn" title="Go to top">
      <i class="fas fa-arrow-up"></i>
    </button>
    <footer>
      Copyright &copy;
      <a href="https://git.archoslinux.cz/kankys" target="_blank">Lukáš Kaňka</a>
      2024
    </footer>
  </section>
  <script src="script.js"></script>
</body>

</html>
