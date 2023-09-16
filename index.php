<?php include "app/app.php"; head(); ?>
<body>

<?php headerComposant(); ?>

<main>

    <div class="container">

        <?php mainComposant(); ?>

    </div>

    <?php
        aboutComposant();
        contactComposant();
    ?>

</main>

<?php footerComposant(); ?>

</body> </html>