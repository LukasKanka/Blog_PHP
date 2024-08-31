<!doctype html>
<html lang="cs">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="description"
			content="ApolloNvim svoboda v programování...."
		/>
		<meta name="keywords" content="ApolloNvim Distro Instalace" />
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
		<title>ApolloNvim Instalace</title>
	</head>

	<body>
		<header>
			<h1 class="title">🚀ApolloNvim Instalace</h1>

			<!-- Terminal - navigation -->
			<nav class="navigation">:
				<ul>
					<li><a href="index.html">Domů</a></li>
					<li>
						<a href="plugins.html"
							>Pluginy</a
						>
					</li>
					<li>
						<a href="manuals.html"
							>Návody</a
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
		<section class="content" id="welcome">
			<section id="install">
				<h2>Instalace a nastavení:</h2>
				<p>
					<strong>
						Vždy se podívej před instalací
						nových pluginu, na dokumentaci k
						plaginům na Githubu. Předejdeš
						tím případným problémům! Pokud
						si nejsi jistý postupem nebo ti
						není něco jasné, tak raději se
						podívej do dokumentace,napiš nám
						nebo fórech najdeš odpověď. Také si vždy vše před změnou zálohuj!
					</strong>
				</p>

				<p>
					👉 Pokud ještě nemáte nainstalujte si
					<a
						href="https://neovim.io/"
						target="_blank"
						>Neovim</a
					>.
				</p>
				<p>
					👉 Bude potřeba nainstalovat plug.vim
					aby jste mohl/a instalovat rozšíření.
				</p>
				<p>
					👉 Běžte na tuto
					<a
						href="https://github.com/junegunn/vim-plug"
						target="_blank"
						>stránku</a
					>
					pod Installation si najděte svůj
					operační systém a zkopírujte odkaz pod
					ním do svého terminálu.
				</p>
				<p>
					👉 Nejprve si však zálohujte své
					aktuální nastavení Neovim!!!
				</p>
				<p>👉 Linux & Mac:</p>
				<div class="code-box">
					<p>/home/user/.config/nvim/init.vim</p>
				</div>
				<p>Windows:</p>
				<div class="code-box">
					<p>~\AppData\Local\nvim</p>
				</div>
			</section>
			<section id="node">
				<h2>Node.js:</h2>
				<p>
					👉 Doporučuji mít nainstalovaný
					<a
						href="https://nodejs.org/en"
						href="_blank"
						>Node.js</a
					>.
				</p>
				<p>
					👉 Dále si v Node.js nainstalujte
					<a
						href="https://www.npmjs.com/package/live-server"
						target="_blank"
						>Live-server</a
					>
					příkazem:
				</p>
				<div class="code-box">
					<p>npm i live-server</p>
				</div>
				<p>
					👉 Ve svém projektu budete moci pouštět
					svůj index.html příkazem:
				</p>
				<div class="code-box">
					<p>npx live-server</p>
				</div>
				<p>
					👉 Pro správnou funkčnost LSP si
					doinstalujte tyto balíčky:
				</p>

				<p>
					<a
						href="https://github.com/microsoft/vscode-html-languageservice"
						target="_blank"
						>vscode-html-langserver</a
					>
				</p>
				<p>
					<a
						href="https://github.com/microsoft/vscode-css-languageservice"
						target="_blank"
						>vscode-css-langserver</a
					>
				</p>
				<p>
					<a
						href="https://github.com/typescript-language-server/typescript-language-server"
						target="_blank"
						>typescript-language-server</a
					>
				</p>
				<p>
					<a
						href="https://github.com/aca/emmet-ls"
						target="_blank"
						>emmet-ls</a
					>
				</p>
				<p>
					<a
						href="https://eslint.org/docs/latest/use/getting-started"
						target="_blank"
						>eslint</a
					>
				</p>
				<p>
					<a
						href="https://github.com/tailwindlabs/tailwindcss-intellisense/blob/master/packages/tailwindcss-language-server/README.md"
						target="_blank"
						>vtailwindcss-language-server</a
					>
				</p>
				<p>
					<a
						href="https://github.com/artempyanykh/marksman"
						target="_blank"
						>marksman</a
					>
				</p>
				<p>
					<a
						href="https://github.com/markdoc-extra/markdoc-ls"
						target="_blank"
						>markdoc-ls</a
					>
				</p>
			</section>
			<section id="neovim">
				<h2>Neovim:</h2>
				<p>
					👉 Pro instalaci 🚀 ApolloNvim Distra
					stačí stáhnout pouze soubor init.vim s
					tohoto
					<a
						href="https://github.com/LukasKanka/ApolloNvim"
						target="_blank"
						>repositáře</a
					>.
				</p>
				<p>
					👉 Uložte ho do kořenováho adresáře
					<strong>~/.. /nvim</strong> dle tvého
					OS.
					<strong
						>Nezapomeňte na zálohu
						stávajících souborů</strong
					>
				</p>
				<p>
					👉 Neovim pustíte v terminálu příkazem
					<strong>nvim</strong>.
				</p>
				<p>👉 Odklikejte chybová hlášení.</p>
				<p>
					👉 V Neovimu zadejte do command line
					<strong>PlugIns</strong> , tím
					nainstalujete všechny pluginy.
					Restartujte Neovim.
				</p>
				<p>
					👉 Pokud Vám některý plugin chybí,
					můžete ho lehce doinstalovat nebo naopak
					odinstalovat pomocí
					<strong>plug.vim</strong>. Více
					informací najdete na GitHubu
					<a
						href="https://github.com/junegunn/vim-plug"
						target="_blank"
						>plug.vim</a
					>
					nebo velmi rád poradím viz. o nás.
				</p>
				<p>
					👉 Pokud některý plugin nechcete
					používat stačí v souboru
					<strong>init.vim</strong> ho
					zakomentovat pomocí dvojitých uvozovek
					<strong>"</strong>.
				</p>
				<p>
					👉 Do command line ještě zadejte Coc
					příkaz pro doinstalování zbylých
					pluginů:
				</p>
				<div class="code-box">
					<p>
						CocInstall coc-todolist
						coc-tailwindcss coc-json
						coc-html-css-support coc-html
						coc-emmet coc-xml coc-tsserver
						coc-lsp-wl coc-lit-html
						coc-htmldjango coc-css
						coc-markdown-preview-enhanced
						coc-markdownlint
					</p>
				</div>
				<p>
					👉 A ještě jednou restartujte Neovim a
					vše máte připravené.
				</p>
				<p>
					👉 Tuto konfiguraci používám na Linuxu i
					MacOS. Je ozkoušena i na Windows 11.
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
