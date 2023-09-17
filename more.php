<?php include "app/app.php"; head(); ?>
<body>
<?php require_once "./composant/navbarMore.phtml"; ?>

<main>
    <section id="projet" class="container">
        <br> <br> <br> <br> <br>
        <h2 style="font-size: 35px">Mentions Légals</h2>
        <p style="font-size: 20px" class="container">Retrouvez ici toutes les informations complémentaires de l'Aurora Store.</p>
        <br>
        <hr style="background: rgb(161, 161, 161);">
    </section>
    <br><br>
    <section id="info">
        <div id="info" class="container" style="text-align: start;">
            <div style="text-align: center">
                <h2 style="text-align: center; margin-bottom: 20px; color: var(--colorall-main-purple)"><i class="fas fa-scroll"></i>Administratif de l'entreprise</h2>
                <p>Auora est une entreprise à but lucratif, toute création de l'entreprise nous appartient.</p>
                <p>Contact : <br> pluquetjade123@gmail.com <br>
            </div>
            <h2 style="margin-top: 20px;text-align: center; color: var(--colorall-main-purple)"><i class="fas fa-paperclip"></i>Crédit du Site Web</h2>
            <div class="row pIn">
                <div class="col-6 textmore">
                    <h3 style="margin-bottom: 12px; margin-top: 20px; color: var(--colorall-blue)">Sources</h3>
                    <p class="no-p">Développement</p>
                    <small>- <a href="https://tyrolium.fr">Tyrolium (© 2017-2023 Tyrolium, Ent.)</a></small><br>
                    <p class="no-p">Web-Designeur</p>
                    <small>- <a href="https://tyrolium.fr">Tyrolium (© 2017-2023 Tyrolium, Ent.)</a></small><br>
                    <p class="no-p">Hebergeur (WebSite)</p>
                    <small>- <a href="https://solidserv.fr">SolidServ ® (© 2017-2023 Tyrolium, Ent.)</a></small><br>
                    <p class="no-p">Hebergeur (DataBase)</p>
                    <small>- OvhCloud (© Copyright 1999-2023 OVHcloud)</small><br>
                </div>
                <div class="col-6 textmore">
                    <h3 style="margin-bottom: 12px; margin-top: 20px;color: var(--colorall-blue)">Technologies</h3>
                    <p class="no-p">FrameWork</p>
                    <small>- <a href="https://github.com/TheMaxium69/TyroSiteFrameWork">TyroSiteFrameWork-1.0.0</a> </small><br>
                    <p class="no-p">Librairies</p>
                    <small>- BootsWatch-5.3.2</small><br>
                    <small>- Bootstrap-5.3.2 </small><br>
                    <small>- FontAwesome-5.15.4</small><br>
                    <small>- JQuery-3.3.1</small><br>
                    <small>- iziToast</small><br>
                    <p class="no-p">Extentions</p>
                    <small>- PhpMyAdmin</small><br>
                    <small>- MySQL</small><br>
                    <p class="no-p">Languages</p>
                    <small>- HTML</small><br>
                    <small>- CSS</small><br>
                    <small>- JavaScript</small><br>
                    <small>- PHP</small><br>
                    <small>- SQL</small><br>
                </div>
            </div>
            <br><br>
            <h2 style="margin-top: 20px;text-align: center; margin-bottom: 10px; color: var(--colorall-main-purple)"><i class="fas fa-balance-scale"></i>Droits</h2>
            <div style="text-align: center">
                <p class="no-p bold">L'intégralité du site et de ses contenus postés sur les serveurs, les contenus mis en ligne qui sont rendus publics, les images, les textes et tout les écrits, le design, le code-source, les logos, les visuels, les photos ainsi que les produits, appartiennent entièrement à l'Aurora.
                    <br>Cela grâce à l'article L111-1 du code de la propriété intellectuelle française.</p>
            </div>
            <br>
            <div class="">
                <div class="textmore">
                    <p class="no-p" style="margin-bottom: 10px">- Tous les logos utilisés appartiennent à leur créateur.</p>
                    <small>© 2017-2023 Tyrolium, Ent.</small><br>
                    <small>© 2023 Google LLC</small><br>
                    <small>© 2023 Meta</small><br>
                    <small>© 2023 Twitter, Inc.</small><br>
                    <small>© 2023 Discord / copyright@discord.com</small><br>
                    <small>LinkedIn Corporation © 2023</small><br>
                    <small>© 2023 Overwolf</small><br>
                    <small>© 2023 Twitch Interactive, Inc.</small><br>
                    <small>© 2023 TikTok</small><br>
                </div>
            </div>
        </div>
    </section>


</main>
<style>
    div#info{
        padding: 30px 60px
    }

    @media (max-width: 496px) {
        div#info{
            padding: 30px 20px
        }

    }
    @media (max-width: 751px) {
        div.textmore{
            width: 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

    }
    .pIn p{
        margin-top: 10px;
        margin-bottom: unset;
    }

    a{
        text-decoration: unset;
    }

</style>

<?php require_once "./composant/footerMore.phtml"; ?> </body> </html>