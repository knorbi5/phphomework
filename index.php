<?php
    /**
     * Created by PhpStorm.
     * User: knorbi
     * Date: 6/27/2016
     * Time: 7:13 PM
     */

    include_once("Classes/User.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- jQuery és Bootstrap betöltése -->
        <script type="text/javascript" src="Components/jquery-3.0.0.min.js"></script>
        <link rel="stylesheet" type="text/css" href="Components/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" type="text/css" href="Components/bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
    </head>
    <body>
        <?php
            $display = new User();
            $display->showUserPage();
        ?>
    </body>
</html>