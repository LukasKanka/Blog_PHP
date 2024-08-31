<!doctype html>
<html lang="cs">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="description"
			content="ApolloNvim svoboda v programování...."
		/>
		<meta name="keywords" content="ApolloNvim Distro Návody" />
		<meta name="author" content="Kankys" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<link rel="stylesheet" href="style.css" />
		<link rel="shortcut icon" href="img/icons8-rocket.gif" />
		<!--nav bar-->
		<script
			src="https://kit.fontawesome.com/0a43c6cd1f.js"
			crossorigin="anonymous"
		></script>
		<!--icons dark, go to up-->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
		/>
		<!--ubuntu fonts-->
		<style>
			@import url("https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap");
		</style>
		<title>ApolloNvim Návody</title>
	</head>

	<body>
		<header>
			<h1 class="title">🚀ApolloNvim Návody</h1>
			<!-- Terminal - navigation -->
			<nav class="navigation">
				<ul>
					<li><a href="index.php">Domů</a></li>
					<li>
						<a href="install.php"
							>Instalace</a
						>
					</li>
					<li>
						<a href="plugins.php"
							>Pluginy</a
						>
					</li>
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
			<p>
				<strong
					>Vždy se podívej před Instalací na
					Githubu, na zdroj. Předejdeš tím
					případným problémům! Pokud si nejsi
					jistý postupem nebo ti není něco jasné,
					tak raději se podívej do
					dokumntace,napiš nebo fórech najdeš
					odpověď.</strong
				>
			</p>
			<section class="list">
				<ul>
					<li>
						<a href="#plug-vim"
							>Jak nainstalovat
							plug.vim do Neovim</a
						>
					</li>
					<li>
						<a href="#codeium"
							>Jak nainstalovat
							Codeium do Neovim</a
						>
					</li>
				</ul>
			</section>
			<section id="plug-vim" class="plug-vim">
				<h2 class="h2-install">
					Jak nainstalovat vim.plug do Neovim
				</h2>

				<p>
					Nejprve si však zálohujte své aktuální
					nastavení Neovim!!!
				</p>
				<p>Linux & Mac:</p>
				<div class="code-box">
					<p>/home/user/.config/nvim/init.vim</p>
				</div>
				<p>Windows:</p>
				<div class="code-box">
					<p>~\AppData\Local\nvim</p>
				</div>
				<p>
					Běžte na tuto
					<a
						href="https://github.com/junegunn/vim-plug"
						target="_blank"
						>stránku</a
					>
					pod Installation si najděte svůj
					operační systém a zkopírujte odkaz pod
					ním do svého terminálu a pomocí Enter
					nainstalujete vim.plug.
				</p>
				<p>Na Linuxu a macOS to bude tento příkaz:</p>
				<div class="code-box">
					<p>
						sh -c 'curl -fLo
						"${XDG_DATA_HOME:-$HOME/.local/share}"/nvim/site/autoload/plug.vim
						--create-dirs \
						https://raw.githubusercontent.com/junegunn/vim-plug/master/plug.vim'
					</p>
				</div>
				<p>
					Pro Windows příkaz najdete na
					odkazovaném webu výšše.
				</p>
				<!--<div class="code-box">-->
				<!--<p>-->
				<!--<LeftMouse>iwr -useb https://raw.githubusercontent.com/junegunn/vim-plug/master/plug.vim |`-->
				<!--ni "$(@($env:XDG_DATA_HOME, $env:LOCALAPPDATA)[$null -eq-->
				<!--$env:XDG_DATA_HOME])/nvim-data/site/autoload/plug.vim" -Force-->
				<!--</p>-->
				<!--</div>-->
				<p>
					Dále si otevřeme soubor init.vim a pokud
					ho nemáme tak si ho vytvoříme zde:
				</p>
				<p>Linux & Mac:</p>
				<div class="code-box">
					<p>/home/user/.config/nvim/init.vim</p>
				</div>
				<p>Windows:</p>
				<div class="code-box">
					<p>~\AppData\Local\nvim</p>
				</div>
				<p>
					A do něj vložíme a následně uložíme
					tento kód:
				</p>
				<div class="code-box">
					<p>
						call plug#begin(has('nvim') ?
						stdpath('data') . '/plugged' :
						'~/.vim/plugged')
					</p>
					<br />
					<p>
						# Jsem budeš v budoucnu vkládat
						pluginy. Začínající PLug a
						adresa ke stažení
					</p>
					<br />
					<p>call plug#end()</p>
				</div>
				<p>
					A příkazem Nvim v terminálu spustíme
					Neovim. Pokud vám vyskočí chybové
					hlášení jen ho odklikněte.
				</p>
				<p>
					Pomocí <code>Ctrl + :</code> se
					dostanete do příkazového řádku a tam
					napíšete <code>PlugInstall</code>
				</p>
				<p>
					A restartujeme Neovim. Příkazem
					<code>Ctrl + :</code> do príkazového
					řádku napíšete <code>q</code> a
					restartujeme Neovim.
				</p>
				<p>
					Takto pokaždé když si přidáte do
					init.vim pluginy, příkazem
					<code>PlugInstall</code> je
					nainstalujete a restartujeme Neovim.
				</p>
				<p>
					Zdroj na
					<a
						href="https://github.com/junegunn/vim-plug"
						target="_blank"
						>GitHub</a
					>
				</p>
			</section>

			<section id="codeium" class="codeium">
				ï
				<h2 class="h2-install">
					Jak nainstalovat Codeium do Neovim
				</h2>
				<p>
					<a
						href="https: //codeium.com"
						target="_blank"
						>Codeium</a
					>
					je alternativou k
					<a
						href="https://github.com/features/copilothttps://github.com/features/copilot"
						target="_blank"
						>GitHub Copilot</a
					>
					s tím, že pro jednotlivce je zdarma.
					Codeium hodnotím velmi pozitivně a
					Copilotu se vyrovná.
				</p>
				<p>
					Instalace pomocí plug.vim je jednoduchá,
					stačí pouze upravit svůj
					<code>init.vim</code>
				</p>
				<p>Vložíme do něj:</p>
				<div class="code-box">
					<p>
						" Free AI codium <br />
						Plug 'Exafunction/codeium.vim',
						{ 'branch': 'main' }
					</p>
				</div>
				<p>
					Výsledný <code>init.vim</code> bude
					vypadat takto:
				</p>
				<div class="code-box">
					<p>
						call plug#begin(has('nvim') ?
						stdpath('data') . '/plugged' :
						'~/.vim/plugged') <br />

						" Free AI codium <br />
						Plug 'Exafunction/codeium.vim',
						{ 'branch': 'main' } <br />
						call plug#end()
					</p>
				</div>
				<p>
					A restartujeme Neovim. Příkazem
					<code>Ctrl + :</code> do príkazového
					řádku napíšete <code>q</code> a
					restartujeme Neovim.
				</p>
				<p>
					Po restartu provedeme
					<code>PlugInstall</code> a ještě jednou
					restartujeme Neovim.
				</p>
				<p>
					Poslední krok bude konfigurace Codeium,
					příkazem <code>CodeiumEnable</code> do
					command line.
				</p>
				<p>
					Codium vás vyzve k propojení API se
					serverem Codium.
				</p>
				<p>A vše by Vám mělo fungovat.</p>
				<p>
					Zdroj na
					<a
						href="https://github.com/Exafunction/codeium.vim"
						target="_blank"
						>GitHub</a
					>
				</p>
			</section>
			<button
				onclick="scrollToTop()"
				id="scrollToTopBtn"
				title="Go to top"
			>
				<i class="fas fa-arrow-up"></i>
			</button>
			<footer>
				Copyright &copy;
				<a
					href="https://git.archoslinux.cz/kankys"
					target="_blank"
					>Lukáš Kaňka</a
				>
				2024
			</footer>
		</section>
		<script src="script.js"></script>
	</body>
</html>
