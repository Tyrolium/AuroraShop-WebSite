<?php include "app/app.php"; head(); ?>
<body>

<?php headerComposant(); ?>

<div style="height: 500px" class="container">


    <div class="container">


        <h2 style="margin-bottom: 70px">

            :icone: Mes avatars !

        </h2>


        <div class="row galery">

            <div class="col">


                <div class="card" style="width: 301px;">
                    <div class="card-img-top">

                        <a href="https://ko-fi.com/s/f9f163c2c2" alt="Armonia" target="_blank">
                            <div class="card-avatar"  onmouseover="changeImage(this)" onmouseout="restoreImage(this)">
                                <div class="wrapper">
                                    <img data-alt="https://media.discordapp.net/attachments/772173322896539668/1152585241832206356/Screenshot2023916148568.png?width=585&height=585"
                                         src="https://media.discordapp.net/attachments/772173322896539668/1152585240234168361/Screenshot20239161441727417.png?width=585&height=585" class="cover-image" />
                                </div>
                                <img src="https://media.discordapp.net/attachments/772173322896539668/1152585241014325338/Screenshot20239161472340723.png?width=585&height=585" class="character" />
                            </div>
                        </a>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Armonia</h5>
                        <p class="card-text">Je suis un texte</p>

                        <p class="card-text" style="color: var(--colorall-main-purple)">30 €</p>
                        <a href="https://ko-fi.com/s/f9f163c2c2" class="btn btn-primary">Acheter</a>
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="card" style="width: 301px;">
                    <div class="card-img-top">

                        <a href="https://ko-fi.com/s/adcac7b6f0" alt="BlackCat" target="_blank">
                            <div class="card-avatar"  onmouseover="changeImage(this)" onmouseout="restoreImage(this)">
                                <div class="wrapper">
                                    <img data-alt="https://media.discordapp.net/attachments/772173322896539668/1152592251256586360/Screenshot20239161580541805.png?width=585&height=585"
                                         src="https://media.discordapp.net/attachments/772173322896539668/1152592250514198568/Screenshot20239161553922539.png?width=585&height=585" class="cover-image" />
                                </div>
                                <img src="https://media.discordapp.net/attachments/772173322896539668/1152592251831201792/Screenshot20239161585931859.png?width=585&height=585" class="character" />
                            </div>
                        </a>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">BlackCat</h5>
                        <p class="card-text">Je suis un texte</p>

                        <p class="card-text" style="color: var(--colorall-main-purple)">30 €</p>
                        <a href="https://ko-fi.com/s/adcac7b6f0" class="btn btn-primary">Acheter</a>
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="card" style="width: 301px;">
                    <div class="card-img-top">

                        <a href="https://ko-fi.com/s/adcac7b6f0" alt="WhiteCat" target="_blank">
                            <div class="card-avatar"  onmouseover="changeImage(this)" onmouseout="restoreImage(this)">
                                <div class="wrapper">
                                    <img data-alt="https://media.discordapp.net/attachments/772173322896539668/1152593061134745671/Screenshot20239161538033380.png?width=585&height=585"
                                         src="https://media.discordapp.net/attachments/772173322896539668/1152593060379775077/Screenshot20239161512224122.png?width=585&height=585" class="cover-image" />
                                </div>
                                <img src="https://media.discordapp.net/attachments/772173322896539668/1152593059679309835/Screenshot20239161548443484.png?width=585&height=585" class="character" />
                            </div>
                        </a>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">WhiteCat</h5>
                        <p class="card-text">Je suis un texte</p>

                        <p class="card-text" style="color: var(--colorall-main-purple)">30 €</p>
                        <a href="https://ko-fi.com/s/adcac7b6f0" class="btn btn-primary">Acheter</a>
                    </div>
                </div>

            </div>


            <?php require_once "test.phtml" ?>


        </div>



        <hr>





















        <style>

            /** {*/
            /*    box-sizing: border-box;*/
            /*}*/
            /*body {*/
            /*    width: 100vw;*/
            /*    height: 100vh;*/
            /*    margin: 0;*/
            /*    display: flex;*/
            /*    justify-content: center;*/
            /*    align-items: center;*/
            /*    background: #191c29;*/
            /*}*/
            .galery .col{
                margin-bottom: 70px;
            }
            .galery .card{
                width: 301px;
                margin: auto;
            }
            .card-avatar {
                width: 300px;
                height: 300px;
                position: relative;
                display: flex;
                justify-content: center;
                align-items: flex-end;
                padding: 0 36px;
                perspective: 2500px;
                /*margin: 0 50px;*/
            }

            .cover-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .wrapper {
                transition: all 0.5s;
                position: absolute;
                width: 100%;
                z-index: -1;
            }

            .card-avatar:hover .wrapper {
                transform: perspective(900px) translateY(-5%) rotateX(25deg) translateZ(0);
                box-shadow: 2px 35px 32px -8px rgba(0, 0, 0, 0.75);
                -webkit-box-shadow: 2px 35px 32px -8px rgba(0, 0, 0, 0.75);
                -moz-box-shadow: 2px 35px 32px -8px rgba(0, 0, 0, 0.75);
            }

            .wrapper::before,
            .wrapper::after {
                content: "";
                opacity: 0;
                width: 100%;
                height: 80px;
                transition: all 0.5s;
                position: absolute;
                left: 0;
            }
            .wrapper::before {
                top: 0;
                height: 100%;
                background-image: linear-gradient(
                        to top,
                        transparent 46%,
                        rgba(12, 13, 19, 0.5) 68%,
                        rgba(12, 13, 19) 97%
                );
            }
            .wrapper::after {
                bottom: 0;
                opacity: 1;
                background-image: linear-gradient(
                        to bottom,
                        transparent 46%,
                        rgba(12, 13, 19, 0.5) 68%,
                        rgba(12, 13, 19) 97%
                );
            }

            .card-avatar:hover .wrapper::before,
            .wrapper::after {
                opacity: 1;
            }

            .card-avatar:hover .wrapper::after {
                height: 120px;
            }
            .title {
                width: 100%;
                transition: transform 0.5s;
            }
            .card-avatar:hover .title {
                transform: translate3d(0%, -50px, 100px);
            }

            .character {
                width: 100%;
                opacity: 0;
                transition: all 0.5s;
                position: absolute;
                z-index: -1;
            }

            .card-avatar:hover .character {
                opacity: 1;
                transform: translate3d(0%, -19%, 100px);
            }






        </style>


        <script>

            function changeImage(div) {

                image = div.querySelector("img");

                var altSrc = image.getAttribute("data-alt");

                image.setAttribute("data-src", image.src);

                image.src = altSrc;
            }

            function restoreImage(div) {

                image = div.querySelector("img");

                var originalSrc = image.getAttribute("data-src");

                image.src = originalSrc;
            }

        </script>





    </div>







</div>

<div style="height: 10000000px"></div>


</body> </html>