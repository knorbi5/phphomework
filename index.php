<?php
include_once("Parts/header.php");
?>
    <body>
        <?php
            $display = new User();
            $display->showAvailablePage();
        ?>
    </body>
<?php
include_once("Parts/footer.php");
?>