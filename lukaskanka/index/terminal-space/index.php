<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Terminal space svoboda v programování...." />
  <meta name="keywords" content="Terminal space" />
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
  <title>Terminal space</title>
</head>

<body>
  <header>
    <h1 class="title">💾 Terminal space</h1>

    <!-- Terminal - navigation -->
    <nav class="navigation">
      <ul>
	<li><a href="news.html">Novinky</a></li>
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
	    <h2>Terminal space:</h2>
	    <p>Vítám Tě na Terminal space! </p>
	    <p>Web je věnován Terminálům konzolím a hlavně aplikacím pro terminály.</p>
	    <p>Najdeš tu tipy, návody, novinky a další obsah ze světa terminálu.</p>
	    <p>Terminal Space prymárně míří na uživatele Linuxu a macOS, ale spousty obsahu budeš moci aplikovat ve Windows.</p>
        </section>
    <section id="contact">
      <h2>Kontakty:</h2>
      <p>
        <a href="https://t.me/+o6qcLGlFROJhNzhk" target="_blank">👉 🚀 ApolloNvim Telegram skupina</a>
      </p>
      <p>
        <a href="https://lukaskanka.cz/" target="_blank">👉 Osobní web autora 💾 Terminal space</a>
      </p>
      <p>
        <a href="https://git.archoslinux.cz/kankys" target="_blank">👉 Gitea profil</a>
      </p>
      <p>
        <a href="https://github.com/LukasKanka/" target="_blank">👉 GitHub</a>
      </p>
      <p>
        <a href="https://mastodon.arch-linux.cz/@Kankys" target="_blank" 👉>
          Mastodon</a>
      </p>
    </section>
    <section class="login"></section>
    <section id="help">
      <h2>Podpora:</h2>
      <p>
        👉 Pokud jakkoliv chcete podpořit nebo se podílet na obsahu a
        funkčnosti 💾 Terminal space, prosím budu rád když mi zde napíšete.
      </p>
      <p>👉 Taky můžete tento projekt podpořit pár Satoshi:</p>
      <img class="sat" src="https://lukaskanka.cz/index/about/img/sat.jpeg" alt="Satoshi" />
    </section>
    <section id="other">
      <h2>Další projekty a odkazy:</h2>
      <p>
        👉 <a href="https://arch-linux.cz/" target="_blank">ArchLinux CZ</a>
      </p>
      <p>
        👉
        <a href="https://searxng.cz/" target="_blank">Vyhledávač SearXNG CZ</a>
      </p>
      <p>
        👉
        <a href="https://endeavouros.com/" target="_blank">EndeavourOS Linux</a>
      </p>
      <p>
        👉 <a href="https://i3wm.org/" target="_blank">i3 window manager</a>
      </p>
    </section>
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
