<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Kakoune svoboda v programování...." />
  <meta name="keywords" content="Kakoune fun-page" />
  <meta name="author" content="Kankys" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="img/kakoune_logo_full.png" />
  <!--nav bar-->
  <script src="https://kit.fontawesome.com/0a43c6cd1f.js" crossorigin="anonymous"></script>
  <!--icons dark, go to up-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!--ubuntu fonts-->
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap");
  </style>
  <title>Kakoune Czech Community</title>
</head>

<body>
  <header>
    <div class="logo">
      <link rel="stylesheet" href="style.css" />
      <img src="img/kakoune_logo_full.png" alt="" />
      <h1 class="title">Kakoune Czech Community</h1>
    </div>


    <!-- Kakoune - navigation -->
    <nav class="navigation">
      <ul>
        <li><a href="#install">Instalace</a></li>
        <li><a href="#kakoune">Kakoune</a></li>
        <li><a href="#contact">Kontakty</a></li>
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
  <button id="toggleButton"><i class="fas fa-adjust"></i></button>
  <div class="test">1</div>

  <!--Začátek sekcí - co h2 sekce + fotogalerie-->
  <section class="content" id="welcome">
    <section class="welcome">
      <h2>Úvod:</h2>
      <p>
        👉 Kakoune Front-End Power postavený na
        <a href="https://github.com/kakoune-lsp/kakoune-lsp" target="_blank">LSP</a>.
      </p>
      <p>
        👉 <a href="http://kakoune.org/">Kakoune</a> je modální editor pro
        <a href="http://www.linux.cz/" target="_blank">Linux</a> a
        <a href="https://cs.wikipedia.org/wiki/MacOS" target="_blank">macOS</a>
        jako je třeba
        <a href="https://www.vim.org/" target="_blank">Vim</a> či
        <a href="https://neovim.io/" target="_blank">Neovim</a>. . Z Kakoune
        vychází také jeden velmi oblíbený modální editor
        <a href="https://helix-editor.com/" target="_blank">Helix-editor</a>.
        Jak Kakoune, tak Helix se od Vim a Neovim liší v ovládání, kde je opačná
        logika příkazu a je bližší lidské řeči. Nespornou výhodou Kakoune je
        oproti Helixu možnost rozšířit aplikaci o pluginy. Proto je
        Kakoune vhodný pro zkušenější uživatele. Náš web by Ti měl pomoct s
        prvotním nastavením. Pokud si i tak na tento editor netroufáš, Helix je skvělá náhrada.
      </p>
      <p>
        👉 Tato distribuce nefunguje tak, že jen klikneš na tlačítko a nainstaluje
        se. Vede Tě k samostatné instalaci pomocí tohoto webu. Cílem je
        pochopit, jak Kakoune funguje, abyste si mohli sami vše modifikovat.
      </p>
      <p>
        👉 Toto nastavení je primárně pro vývoj webu, ale není problém si vše
        přizpůsobit. Inspiroval jsem se pluginy, které jsem využíval ve VSCode a
        Webstorm.
      </p>
      <p>👉 Velký důraz je kladen na rychlost a lehkost.</p>
      <p>👉 Tento blog je stále ve vývoji a postupně se na něm pracuje.</p>
      <p>
        👉 Pro nejlepší zážitek s Kakoune doporučuji používat multiplexor
        <a href="https://git.archoslinux.cz/kankys/zellij-mySetup" target="_blank">Zellij </a>, ale není to samozřejmě
        podmínkou.
      </p>
    </section>
    <section id="advantages">
      <h2>Přednosti:</h2>
      <p>
        👉 Hlavní předností tohoto nastavení jsou AutoSave,
        doplňování HTML, CSS, JS a zkratky k zakomentování a odkomentování
        kódu. Taky je zde několik pluginu pro příjemnější práci v Kakoune.
      </p>
      <p>
        👉 LSP se
        mi velmi osvědčilo v modálním editoru
        <a href="https://helix-editor.com/" target="_blank">Helix-editor</a>.
        Mou konfiguraci Helixu najdete
        <a href="https://git.archoslinux.cz/kankys/Helix-frontend-setup" target="_blank">zde</a>.
      </p>
      <p>
        👉 Ta nejlepší témata v Kakoune nemusíš hledat, najdeš je po instalaci. Defaultně je
        v naší konfiguraci nastaveno gruvbox-dark.
      </p>
      <p>
        👉 Témá v Kakoune si jednoduše změníš v command line příkazem
        `colorscheme` a tlačítkem Tab se budeš přepínat mezi jednotlivými
        tématy. Command mode, česky příkazový mód, vyvoláš zkratkou <strong>Ctrl + :</strong> .
      </p>
    </section>
    <section class="photo">
      <img class="picture" src="img/home.png" alt="Homescreen" />
      <img class="picture1" src="img/config.png" alt="Zellij" />
      <img class="picture2" src="img/command.png" alt="Command" />
    </section>
    <section id="install">
      <h2>Instalace a nastavení:</h2>
      <p>
        👉 Pokud ještě nemáš, nainstaluj si,
        <a href=" http://kakoune.org/" target="_blank">Kakoune</a>.
      </p>
      <p>👉 Nejprve si zálohuj své aktuální nastavení Kakoune!!!</p>
      <p>👉 Linux & Mac:</p>
      <div class="code-box">
        <p>~/.config/kak/kakrc</p>
      </div>
      <p>👉 Aby Kakoune dobře komunikoval s LSP, je potřeba mít nainstalovaný <a href="https://www.rust-lang.org/"
          target="_blank">Rust</a>. </p>
    </section>
    <section id="node">
      <h2>Node.js:</h2>
      <p>
        👉 Doporučuji mít nainstalovaný
        <a href="https://nodejs.org/en" href="_blank">Node.js</a>.
      </p>
      <p>👉 Pro správnou funkčnost LSP si doinstaluj tyto balíčky:</p>
      <p><a href="https://github.com/microsoft/vscode-html-languageservice">vscode-html-language-server</a></p>
      <p><a href="https://github.com/microsoft/vscode-css-languageservice">vscode-css-language-server</a></p>
      <p><a
          href="https://github.com/typescript-language-server/typescript-language-server">typescript-language-server</a>
      </p>
      <p><a href="https://github.com/aca/emmet-ls">emmet-ls</a></p>
      <p><a
          href="https://github.com/tailwindlabs/tailwindcss-intellisense/blob/master/packages/tailwindcss-language-server/README.md">tailwindcss-language-server</a>
      </p>
      <p><a href="https://github.com/artempyanykh/marksman">marksman</a></p>
      <p><a href="https://github.com/markdoc-extra/markdoc-ls">markdoc-ls</a></p>
      <p>👉 A také si doinstaluj tento server pro správnou funkčnost HTML v LSP příkazem: </p>
      <div class="code-box">
        <p>npm install -g vscode-{html,css,json}-languageserver-bin</p>
      </div>
      <p>
        👉 Dále si v Node.js nainstaluj
        <a href="https://www.npmjs.com/package/live-server" target="_blank">Live-server</a>.
      </p>
      <p>
        👉 Platí v případě, že chceš dělat front-end nebo programuješ v
        Javascriptu.
      </p>
      <p>👉 Ve svém projektu budeš moci pouštět index.html příkazem:</p>
      <div class="code-box">
        <p>npx live-server</p>
      </div>
      <p> 👉 Všechny servery, co si můžeš pomocí LSP nainstalovat, najdeš <a
          href="https://github.com/kakoune-lsp/kakoune-lsp/wiki/How-to-install-servers" target="_blank">zde</a>. </p>
    </section>
    <section id="kakoune">
      <h2>Kakoune:</h2>
      <p>
        👉 Pro instalaci Kakoune Front-End Power Ti stačí stáhnout pouze soubor
        <strong>kakrc</strong> z tohoto <a href="https://git.archoslinux.cz/kankys/Kakoune-modal-editor-config"
          target="_blank">repozitáře</a> .
      </p>
      <p>
        👉 Ulož ho do kořenováho adresáře <strong>~/.config/kak/</strong>. <strong>Nezapomeň na zálohu stávajících
          souborů, pokud máš i své configy.</strong>
      </p>
      <p>👉 Kakoune pustíš v terminálu příkazem <strong>kak</strong>.</p>
      <p>
        👉 V Kakoune zadej do command line <strong>plug-install</strong>, tím
        nainstaluješ všechny pluginy. Restartuj Kakoune.
      </p>
      <p>
        👉 Pokud Ti některý plugin chybí, můžeš ho lehce doinstalovat nebo
        naopak odinstalovat. Více informací
        najdeš v Kakoune
        <a href="https://github.com/mawww/kakoune#3-basic-interaction" target="_blank">dokumentaci</a>
        nebo velmi Ti rád poradím viz. <a href="#contact">Kontakty</a>.
      </p>
      <p>
        👉 Pokud některý plugin nechceš používat, stačí ho v souboru
        <strong>kakrc</strong> zakomentovat pomocí hastagu
        <strong>#</strong>.
      </p>
      <p>
        👉 Tuto konfiguraci používám na Linuxu i macOS. </p>
    </section>
    <section id="plans">
      <h2>Plán Kakoune Front-End Power:</h2>
      <p>
        👉 Do budoucna můžeš očekávat tyto nové funkce a další novinky:
      </p>
      <p>
        👉 Web na vlastní doméně. Zatím Kakoune Front-End Power najdeš
        <a href="https://lukaskanka.cz/kakoune/index.php" target="_blank">zde</a>.
      </p>
      <p>👉 Nové pluginy.</p>
      <p>
        👉 Návody k pluginům, jak nastavit a jak s nimi pracovat.
      </p>
      <p>👉 Návody k práci s Kakoune.</p>
    </section>
    <section id="plugin">
      <h2>Výběr pluginu v Kakoune Front-End Power:</h2>
      <p>
        👉 <strong>plug.kak</strong> nejduležitější plugin, aby bylo možné instalovat další pluginy.</p>
      <p>
        👉 <strong>kakoune-lsp</strong>
      </p>
      <p>
        👉 <strong>luar</strong> rozšíří možnost instalovat pluginy napsané v jazyce Lua. </p>
      <p>
        👉 <strong>byline.kak</strong> vybere celý řádek pomocí klávesy <strong>x</strong> jako v Helix-editoru. </p>
      <p>
        👉 <strong>auto-pairs</strong> automaticky doplní závorky. </p>
      <p>
        👉 <strong>fzf.kak</strong> rychlé asynchronní vyhledávaní souborů. </p>
    </section>
    <section id="faq">
      <h2>Otázky a odpovědi:</h2>
      <p>👉 Kolik Kakoune stojí? -> Nic, Kakoune je zdarma.</p>
    </section>
    <section id="contact">
      <h2>Kontakty:</h2>
      <p>
        👉 <a href="https://t.me/+RlXM8oEZ8TJkMWVk" target="_blank"> Kakoune community Telegram skupina</a>
      </p>
      <p>
        👉 <a href="https://lukaskanka.cz/" target="_blank"> Osobní web autora</a>
      </p>
      <p>
        👉 <a href="https://git.archoslinux.cz/kankys" target="_blank"> Gitea profil</a>
      </p>
      <p>
        👉 <a href="https://github.com/LukasKanka/" target="_blank"> GitHub</a>
      </p>
      <p>
        👉 <a href="https://nostr.band/npub12xzu8ejrl9cwpd034cqj5jtuztn4mxp3em2frckm9tk28kmy48vqr0u0yu" target="_blank">
          Nostr</a>
      </p>
      <p>
        👉 <a href="https://mastodon.arch-linux.cz/@Kankys" target="_blank"> Mastodon</a>
      </p>
    </section>
    <section id="help">
      <h2>Podpora:</h2>
      <p>
        👉 Pokud mě chceš podpořit nebo se podílet na obsahu tohoto webu, budu rád, když mi napíšeš.
      </p>
      <p>👉 Taky můžeš tento projekt podpořit pár Satoshi:</p>
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