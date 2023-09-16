<?php include "app/app.php"; head(); ?>
<body >

<?php headerComposant(); ?>

<main data-bs-spy="scroll" data-bs-target="#navbar-scroll">

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