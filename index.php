
<!DOCTYPE html>
<html lang="cs">


<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script
            crossorigin="anonymous"
            src="https://kit.fontawesome.com/0a43c6cd1f.js"
    ></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/600px-Arch-linux-logo-691350772.png">
    <title>Lukáš Kaňka</title>
</head>

<div>

    <!-- Navigace -->
    <nav>
        <ul class="navigation" id="navigation">
            <li><a href="#about">O mně</a></li>
            <li><a href="#what-we-do">Co dělám </a></li>
            <li><a href="#trips">Stačí si vybrat</a></li>
<!--            <li><a href="#where">Where To Go</a></li>-->
<!--            <li><a href="#reviews">Reviews</a></li>-->
        </ul>
        <img class="icon" src="icons/PngItem_1608357.png" alt="#">
        <?php

            $mesice = array('leden', 'Únor', 'duben', 'červen', 'červenec', 'srpen', 'říjen', 'listopad', 'prosinec');
            $den = date('j');
            $mesic = date('m');
            $mesicSlovy = $mesice[$mesic - 1];
            $rok = date('Y');
            echo ("<p class='date'>Dnes je $den . $mesicSlovy . $rok</p>");
        ?>

    </nav>

    <!-- Hero section -->
    <header class="hero-section ">
        <div class="hero-text-wrapper">
            <h1 class="hero-text">
                </h1>
        </div>
    </header>

    <!-- About Us -->
    <div class="content">
        <section class="about-section" id="about">
            <div class="about-section-wrapper">
                <div class="about-text">
                    <h2 class="h2-about">O mně</h2>
                    <p class="about-text-p">Jsem IT nadšenec s pozitivním přístupem k životu a vášní pro
                        technologie, ve kterých se neustále vzdělávám. Absolvoval jsem kurz
                        testingu a SQL v Acamaru, další kurz byl web developer u společnosti Engeto. Pracoval jsem na pozici testera ve společnosti Uniprog a nyní pracuji ve společnosti Kyndryl na projektu České Spořitelny pro platformu SMART.
                    </p>
                    <p>Nyní navíc nabízím IT služby,<a href="services/" target="_blank"> klikněte sem</a>.</p>
                    
                </div>
                <div class="about-img"><img class="about-img content-container"
                        src="img/IMG_4835.JPG" alt="#">
                </div>
            </div>
        </section>

        <!-- What We Do -->
        <section class="what-section" id="what-we-do">
            <div class="what-section-wrapper">
                <div class="what-text">
                    <h2 class="h2-what-we">Co dělám</h2>
                    <p class="what-text-p">
                    <ul class="dot">
                        
                        <li><strong>Ve volném čase se věnuji:</strong></li>
                <li>Svému blogu:<a href="https://lukan.cz"> Lukáš Bloguje.</a></li>
                <li>Spolku Arch Linux CZ, kde jsem členem a pomáhám se správou webu: <a href="https://arch-linux.cz"
                                                                                        target="_blank">Arch Linux
                    CZ</a> a dalších webových aplikacích Arch Linux CZ.
                </li>
                <li>Linuxu, MacOS a Opensource (i si rozumím s Windows :-)).</li>
                <li>Seberozvoji v oblasti komunikace a emoční inteligence.</li>
                <li>Sportu, který mi dobíjí baterky.</li>
                <li>Missing maps pro Lékaře bez hranic.</li>
                <li>Mapování v OSM.</li>
                <li><strong>V osobním životě se snažím vedle komerčních aplikací poznávat a
                    používat Opensource.</strong></li>
                <li>To to jsou opensource aplikace, které používám vedle placených
                    aplikací a stojí myslím za vyzkoušení:
                </li>
                <li>Alternativa za OneNote od Microsoftu je aplikace <a href="https://joplinapp.org/"
                                                                        target="_blank">Joplin</a></li>

                <li>Pro cloud a tvorbu dokumentů k Microsoft 365 doporučuji <a href="https://cloud.arch-linux.cz"
                                                                               target="_blank">NextCloud</a></li>

                <li>Pokud potřebuji šifrovat dokumenty nebo jen s někým něco sdílet a
                    nechci sdílet s NextCloud nebo OneDrive použiji <a href="https://cryptpad.arch-linux.cz/"
                                                                       target="_blank">CryptPad</a></li>

                <li>Náhradu za Jiru může být <a href="https://tasks.archoslinux.cz/" target="_blank">Vikunja</a></li>

                <li>Mimo GitHub svůj kód ukládám na <a href="https://git.archoslinux.cz/" target="_blank">Gitea</a></li>
                <li>Pro tvorbu tohoto blogu vedle VS Code používám <a href="https://brackets.io/" target="_blank">Brackets</a>
                </li>

                <li>Jako RSS čtečku využívám minimalistickou <a href="https://rss.archoslinux.cz/">MiniFlux</a></li>

                <li> Správce hesel může být <a href="https://bitwarden.archoslinux.cz/" target="_blank">Bitwarden</a>
                </li>

                <li>Internetový prohlížeč <a href="https://www.mozilla.org/en-US/firefox/new/"
                                             target="_blank">Firefox</a>
                </li>

                <li>E-mail klienta používám <a href="https://www.thunderbird.net/en-US/" target="_blank">Thunderbird</a>
                </li>

                <li>Alternativu k sociální sítím může být <a href="https://mastodon.arch-linux.cz/"
                                                             terget="_blank">Mastodon</a><a
                        href="https://element.mxchat.cz/" target="blank">Element</a></li>

                <li>Alternativou k Instagramu může být <a href="https://pixelfed.cz" target="_blank">Pixelfed</a></li>
                    </ul>
                    </p>
                </div>

                <ul class="icon-what-section">
                    <li>
<!--                        <img class="img-icons" src="icons/hiking-white.png " alt="#"><br>-->
                        <p class="icon-text">PHP</p>

                    </li>
                    <li>
<!--                        <img class="img-icons" src="icons/cycle-white.png" alt="#">-->
                        <p class="icon-text">MySQL</p>
                    </li>
                    <li>
<!--                        <img class="img-icons" src="icons/water-white.png" alt="#">-->
                        <p class="icon-text">Linux</p>
                    </li>
                    <li>
<!--                        <img class="img-icons" src="icons/car-white.png" alt="#">-->
                        <p class="icon-text">Opensource</p>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Our Trips -->
        <section class="trips-section">
            <div class="trips-section-wrapper">
                <div class="images-trips-1 images-item "></div>
                <div class="images-trips-2 images-item "></div>
                <div class="images-trips-3 images-item "></div>
                <div class="images-trips-4 images-item "></div>
                <div class="text-trips images-item" id="trips">Stačí si vybrat</div>
                <div class="images-trips-5 images-item "></div>
                <div class="images-trips-6 images-item "></div>
                <div class="images-trips-7 images-item "></div>
                <div class="images-trips-8 images-item "></div>
            </div>
        </section>
        <!-- What We Do -->
        <section class="what-section" id="what-we-do">
            <div class="what-section-wrapper">
                <div class="what-text">
                    <h2 class="h2-what-we">Kontakty</h2>
                    <p class="what-text-p">
                        
                    
            <ul class="dot dotkontakt">
                <li><strong>Kde všude mně najdete: </strong></li>
                <li><a href="https://mastodon.arch-linux.cz/deck/@Kankys"
					
					target="_blank"
					><i class="fa fa-mastodon"></i>
					Mastodon</a
				></li>
				<li><a
					href="https://t.me/Kankys"
					
					target="_blank"
					><i class="fa fa-telegram"></i>
					Telegram</a
				></li>	
                <li><a
					href="https://pixelfed.cz/i/web/profile/464150575238569182"
					
					><i class="fa fa-pixelfed"></i> Pixelded
					CZ</a
				></li>
                <a
					href="https://discord.com/kankys_"
					
					target="_blank"
					><i class="fa fa-discord"></i>
					Discord</a
				>
				
				
                <li><a href="https://git.archoslinux.cz/kankys" target="_blank"><i
                        class="fa fa-gitea"></i> Gitea</a></li>
                <li><a href="https://www.github.com/LukasKanka" target="_blank"><i
                        class="fa fa-github"></i> GitHub</a></li>
                <li><a href="https://www.linkedin.com/in/luk%C3%A1%C5%A1-ka%C5%88ka-b2a0a1a0/"
                                      target="_blank"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
                

            </ul>
        </div>
                
            </div>
        </section>

        <!-- Where togo -->
        <section class="where-section" id="where">
            <div class="where-section-wrapper">
                <div class="where-text">

                    <div class="h2-where">
                        <h2 class="desktop"></h2>
                        <h2 class="mobile"></h2>
                    </div>
                    <div class="where-text-div">
                      
                        <p class="contact-text">Telefoní číslo: <i class="fas fa-phone"></i> <a href="tel:+725303747"> +420 725 303 747</a></a></p>
                        <p class="contact-text">E-mail: <i class="fas fa-envelope"></i> <a href="mailto:lukas.kanka@outlook.cz"> Lukáš Kaňka</a></p>
<!--                        <div class="contact-button">-->
<!--                            <a href="#" class="contact-button-text"></a>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </section>

<!--        &lt;!&ndash; Reviews section &ndash;&gt;-->
<!--        <section class="reviews-section" id="reviews">-->
<!--            <h2 class="h2-reviews">Reviews</h2>-->
<!--            <div class="reviews-text">-->
<!--                <p>Our amazing clients are the reason we exist, and their reactions to our-->
<!--                    customized travel experiences-->
<!--                    and personalized service keep us smiling all day long. Here is just a sampling of what they’ve said:-->
<!--                </p>-->
<!--            </div>-->
<!--            <div class="reviews-card-wrapper">-->
<!--                <div class="reviews-card">-->
<!--                    <img src="images/kalen-emsley-kGSapVfg8Kw-unsplash.jpg" alt="#">-->
<!--                    <div class="reviews-card-text">-->
<!--                        She has booked two major European trips for us in the past year and every aspect has met, and-->
<!--                        in-->
<!--                        most cases exceeded, our expectations. Best prices, best hotels, best itineraries, and best-->
<!--                        cruises, she does it all. But the most important thing is she remembers the little things-->
<!--                        that-->
<!--                        we would do if we were making the plans ourselves.-->
<!--                        <div class="reviews-name">-->
<!--                            Bertie Norton-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="reviews-card-1">-->
<!--                    <img src="images/jeffrey-keenan-pUhxoSapPFA-unsplash.jpg" alt="#">-->
<!--                    <div class="reviews-card-text">-->
<!--                        Leigh McAdam has been making my travel arrangements for about 20 years and there is no one-->
<!--                        else I would trust to arrange my trips and tours. I've also had great fun on a few of the-->
<!--                        group trips she has arranged - Peru & Machu Picchu and a 10-day cruise out of Venice and-->
<!--                        diving. It's always an eclectic group of well traveled, interesting people.-->
<!--                        <div class="reviews-name">-->
<!--                            Frank Kinney-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->

<!--        &lt;!&ndash; Photo galery &ndash;&gt;-->
<!--        <section class="photo-gallery">-->
<!--            <div class="photo-gallery-wrapper">-->
<!--                <img class="picture-img" src="images/alexey-fedenkov-BaCZYH9RLmQ-unsplash.jpg" alt="picture-1">-->
<!--                <img class="picture-img" src="images/omer-salom-LoijtQXXNhs-unsplash.jpg" alt="picture-2">-->
<!--                <img class="picture-img" src="images/vincentiu-solomon-7MH4ped6_Mo-unsplash.jpg" alt="picture-3">-->
<!--                <img class="picture-img" src="images/daniel-tseng-73lmMKhi2U8-unsplash.jpg" alt="picture-4">-->
<!--            </div>-->
<!--        </section>-->

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-wrapper">
                <div class="footer-text">
<!--                    <a class="footer-contact" href="#">Contact</a>-->
                    <div class="footer-text-div">
                        <p class="footer-text-p">
                            © 2024 - Lukáš Kaňka. All Rights Reserved.

                        </p>


                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>

<button id="scrollToTopBtn" onclick="scrollToTop()" title="Go to top">
    <i class="fas fa-arrow-up"></i>
</button>
<script src="script.js"></script>

</body>
</html>