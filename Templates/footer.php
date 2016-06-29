    <!-- jQuery és Bootstrap betöltése -->
    <script type="text/javascript" src="Extensions/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="Extensions/jQuery.validate.js"></script>
    <link rel="stylesheet" type="text/css" href="Extensions/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="Extensions/bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="Extensions/bootstrap-3.3.6-dist/css/signin.css"/>
    <link rel="stylesheet" type="text/css" href="Extensions/bootstrap-3.3.6-dist/css/cover.css"/>

    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery("#registerUser").validate({
                rules: {
                    password: {
                        minlength: 5,
                        maxlength: 40,
                        required: true
                    },
                    name: {
                        maxlength: 200,
                        required: true
                    },
                    email: {
                        required: true
                    }
                },
                messages: {
                    password: {
                        required: "A jelszó megadása kötelező",
                        minlength: "Minimum 5 karakter megadása szükséges",
                        maxlength: "Maximum 40 karakter adható meg"
                    },
                    name: {
                        required: "A név megadása kötelező",
                        maxlength: "Maximum 200 karakter adható meg"
                    },
                    email: {
                        required: "Az email cím megadása kötelező"
                    }
                },
                submitHandler: function(form){
                    var dataToRegister = jQuery(form).serialize();

                    jQuery.ajax({
                        method: "POST",
                        url: "interfaces/register.php",
                        data: dataToRegister
                    }).done(function(msg){
                        if(msg == "1"){
                            alert("Sikeres regisztráció");
                            location.href = "index.php";
                        }else{
                            alert("Sikertelen regisztráció");
                        }
                    });
                }
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