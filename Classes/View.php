<?php

class View{
    public function __construct(){
        
    }

    public function showRegistrationLayout(){
        ?>
            <div class="container">
                <form id="registerUser" class="form-signin">
                    <h2 class="form-signin-heading">Regisztráció</h2>
                    <label for="inputEmail" class="sr-only">Email cím</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email cím" required="" autofocus="">
                    <label for="inputPassword" class="sr-only">Jelszó</label>
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Jelszó" required="" min="5" max="40">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Regisztrálok</button>
                </form>
            </div>
        <?php
    }

    public function showLoginLayout(){
        ?>
            <div class="container">
                <form id="loginUser" class="form-signin">
                    <h2 class="form-signin-heading">Bejelentkezés</h2>
                    <label for="inputEmail" class="sr-only">Email cím</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email cím" required="" autofocus="">
                    <label for="inputPassword" class="sr-only">Jelszó</label>
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Jelszó" required="">
                    <button class="btn btn-lg btn-success btn-block" type="submit">Belépés</button>
                    <button class="btn btn-lg btn-primary btn-block" type="button" onClick="location.href='<?php echo "registration.php"; ?>'">Regisztráció</button>
                </form>
            </div>
        <?php
    }

    public function showLoggedInLayout(){
        ?>
            <div class="site-wrapper">
              <div class="site-wrapper-inner">
                <div class="cover-container">

                  <div class="masthead clearfix">
                    <div class="inner">
                      <h3 class="masthead-brand">Nyitólap</h3>
                      <nav>
                        <ul class="nav masthead-nav">
                          <li class="active"><a href="#">Nyitólap</a></li>
                          <li onClick="logoutUser();"><a href="#">Kilépés</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>

                  <div class="inner cover">
                    <h1 class="cover-heading">Üdvözlöm</h1>
                    <p class="lead">Ön sikeresen bejelentkezett, és a nyitóoldalon van. Itt már csak kilépési lehetősége van.</p>
                  </div>

                  <div class="mastfoot">
                    <div class="inner">
                      <p>
                          Házi feladat <a href="http://getbootstrap.com">Kulcsár Norbert</a>-től, a <a href="http://getbootstrap.com">Bootstrap segítségével</a>.
                      </p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
        <?php
    }
}