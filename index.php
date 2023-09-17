<?php include "app/app.php"; head(); ?>
<body>

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

<script src='https://unpkg.com/izitoast/dist/js/iziToast.min.js'></script>
<script  src="javascript/notif.js"></script>

<?php if (!empty($_GET['err'])) {?>
    <script>
        if(Text != 1){
            iziToast.error({
                title: 'Erreur',
                position: 'bottomRight',
                message: 'Une erreur est survenue | Code : <?php echo $_GET['err']; ?>'
            });
        }
    </script>
<?php } ?>

<?php if (!empty($_GET['true'])) {?>
    <script>
        if(Text != 1){
            iziToast.success({
                title: 'OK',
                position: 'bottomRight',
                message: 'Votre demande a bien été envoyé !'
            });
        }
    </script>
<?php } ?>

</body> </html>