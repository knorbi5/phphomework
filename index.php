<?php
include_once("Templates/header.php");
?>
    <body>
        <?php
            $display = new User();
            $display->showAvailablePage();
        ?>
    </body>
<?php
include_once("Templates/footer.php");
?>