'
<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="ApolloNvim svoboda v programování...." />
  <meta name="keywords" content="ApolloNvim Distro" />
  <meta name="author" content="Kankys" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="img/icons8-rocket.gif" />
  <!--nav bar-->
  <script src="https://kit.fontawesome.com/0a43c6cd1f.js" crossorigin="anonymous"></script>
  <!--icons dark, go to up-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!--ubuntu fonts-->
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap");
  </style>
  <title>ApolloNvim</title>
</head>

<body>
  <header>
    <h1 class="title">🚀ApolloNvim</h1>

    <!-- Terminal - navigation -->
    <nav class="navigation">
      <ul>
        <li><a href="install.php">Instalace</a></li>
        <li><a href="plugins.php">Pluginy</a></li>
        <li><a href="manuals.php">Návody</a></li>
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
      <h2>Úvod:</h2>
      <p>
        👉 Neovim setup pro Front-End vývoj postavený na
        <a href="https://github.com/neoclide/coc.nvim" target="_blank">Coc</a>.
      </p>
      <p>
        👉 Výhody Neovim oproti klasickému IDE jsou nesporně ve svobodě
        konfigurace, je tisíce možností, jak Váš Neovim může vypadat a
        fungovat. Pro Vaši inspiraci a použití vznikl tento projekt 🚀
        ApolloNvim.
      </p>
      <p>
        👉 Tato distribuce nefunguje jen, že kliknete na tlačítko a
        nainstaluje se. Vede Vás k samostatné instalaci pomocí tohoto webu.
        Cílem je pochopit, jak Neovim funguje, abyste si sami mohli vše
        modifikovat, což i click-on distribucí se nenaučíte.
      </p>
      <p>
        👉 Toto nastavení je primárně pro vývoj webu. Inspiroval jsem se
        pluginy, které jsem využíval v VSCode a Webstorm.
      </p>
      <p>👉 Velký důraz je kladen na rychlost a lehkost.</p>
      <p>
        👉 🚀 ApolloNvim Distro je stále ve vývoji a postupně se na něm
        pracuje.
      </p>
      <p>
        👉 Pro nejlepší zážitek s 🚀 ApolloNvim Distro doporučuji používat
        multiplexor
        <a href="https://git.archoslinux.cz/kankys/zellij-mySetup" target="_blank">Zellij </a>, ale není to samozřejmě
        podmínkou.
      </p>
    </section>
    <section id="advantages">
      <h2>Přednosti:</h2>
      <p>
        👉 Hlavní předností tohoto nastavení jsou podpora: Codeium alternativa
        k Copilot zdarma, Prettier, AutoSave, diplňování HTML, CSS, JS a
        zkratky k zakomentování a odkomentování kódu. Taky je zde několik
        pluginu pro příjemnější práci v Neovim.
      </p>
      <p>
        👉 S
        <a href="https://github.com/neovim/nvim-lspconfig" target="_blank">LSP</a>
        v této instalaci využívám
        <a href="https://github.com/neoclide/coc.nvim" target="_blank">Coc</a>
        pro jeho jednoduchost s minimálními zásahy do konfigurace Coc. LSP se
        mi velmi osvědčilo v modálním editoru
        <a href="https://helix-editor.com/" target="_blank">Helix-editor</a>
        má konfigurace
        <a href="https://git.archoslinux.cz/kankys/Helix-frontend-setup" target="_blank">Helixu</a>.
      </p>
      <p>
        👉 Ty nejlepší témata pro Neovim (ať je nemusíte hledat), je defaultně
        nastavéné Dracula.
      </p>
      <p>
        👉 Téma v Neovim si jednoduše změníte v command line příkazem
        colorscheme a tlačítkem Tab se budete přepínat mezi jednotlivými
        tématy.
      </p>
    </section>
    <section class="photo">
      <img class="picture" src="img/home.png" alt="Homescreen" />
      <img class="picture1" src="img/config.png" alt="config.vim" />
      <img class="picture2" src="img/fzf.png" alt="fzf" />
    </section>
    <section id="apollo">
      <h2>Plán 🚀ApolloNvim:</h2>
      <p>
        👉 Do budoucna můžete očekávat tyto nové funkce a další novinky:
      </p>
      <p>
        👉 Web na vlastní doméně.
      </p>
      <p>👉 Instalátor 🚀 ApolloNvim přes odkaz z Gitu.</p>
      <p>👉 Nová vlastní uvítací obrazovka.</p>
      <p>👉 Nové pluginy.</p>
      👉 Návody k pluginům, jak nastavit a jak s nimi pracovat.
      </p>
      <p>👉 Návody k práci s Neovim.</p>
    </section>
    <section id="faq">
      <h2>Otázky a odpovědi:</h2>
      <p>👉 Kolik stojí 🚀 ApolloNvim? -> Nic 🚀 ApolloNvim je zdarma.</p>
    </section>
    <section id="contact">
      <h2>Kontakty:</h2>
      <p>
        <a href="https://t.me/+o6qcLGlFROJhNzhk" target="_blank">👉 🚀 ApolloNvim Telegram skupina</a>
      </p>
      <p>
        <a href="https://lukaskanka.cz/" target="_blank">👉 Osobní web autora 🚀 ApolloNvim</a>
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
        funkčnosti 🚀 ApolloNvim, prosím budu rád když mi zde napíšete.
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
'