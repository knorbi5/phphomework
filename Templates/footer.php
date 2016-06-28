    <!-- jQuery és Bootstrap betöltése -->
    <script type="text/javascript" src="Extensions/jquery-3.0.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Extensions/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="Extensions/bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="Extensions/bootstrap-3.3.6-dist/css/signin.css"/>
    <link rel="stylesheet" type="text/css" href="Extensions/bootstrap-3.3.6-dist/css/cover.css"/>

    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery("#registerUser").submit(function (event) {
                var dataToRegister = jQuery(this).serialize();

                jQuery.ajax({
                    method: "POST",
                    url: "interfaces/register.php",
                    data: dataToRegister
                }).done(function(msg){
                    if(msg == "1"){
                        alert("Sikeres regisztráció");
                    }else{
                        alert("Sikertelen regisztráció");
                    }
                });

                event.preventDefault();
            });

            jQuery("#loginUser").submit(function (event) {
                var dataToLogin = jQuery(this).serialize();

                jQuery.ajax({
                    method: "POST",
                    url: "interfaces/login.php",
                    data: dataToLogin
                }).done(function(msg){
                    if(msg == "1"){
                        location.reload();
                    }else{
                        alert("Sikertelen belépés");
                    }
                });

                event.preventDefault();
            });
        });

        function logoutUser(){
            jQuery.ajax({
                method: "POST",
                url: "interfaces/logout.php"
            }).done(function(msg){
                if(msg == "1"){
                    location.reload();
                }else{
                    alert("Hiba!");
                }
            });
        }
    </script>
</html>