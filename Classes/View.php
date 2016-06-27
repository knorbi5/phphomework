<?php
/**
 * Created by PhpStorm.
 * User: knorbi
 * Date: 6/27/2016
 * Time: 7:28 PM
 */
class View{
    public function __construct(){
        
    }

    public function showRegistrationLayout(){
        ?>
            <div class="container">
                <form class="form-signin">
                    <h2 class="form-signin-heading">Bejelentkezés</h2>
                    <label for="inputEmail" class="sr-only">Email cím</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email cím" required="" autofocus="">
                    <label for="inputPassword" class="sr-only">Jelszó</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Jelszó" required="">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Belépés</button>
                </form>
            </div>
        <?php
    }

    public function showLoginLayout(){
        ?>
            <div class="container">
                <form class="form-signin">
                    <h2 class="form-signin-heading">Please sign in</h2>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
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
                          <li><a href="#">Kilépés</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>

                  <div class="inner cover">
                    <h1 class="cover-heading">Nyitólap</h1>
                    <p class="lead">Ön sikeresen bejelentkezett, és a nyitóoldalon van. Itt már csak kilépési lehet?sége van.</p>
                  </div>

                  <div class="mastfoot">
                    <div class="inner">
                      <p>
                          Házi feladat <a href="http://getbootstrap.com">Kulcsár Norbert</a>-t?l, a <a href="http://getbootstrap.com">Bootstrap segítségével</a>.
                      </p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
        <?php
    }
}