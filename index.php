
<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <nav class="blue-grey darken-2 lighten-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Wilson Variedades</a>

        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>
      <br><br>
      <br><br>
<div class="container">
  <div class="section">

    <!--   Icon Section   -->
    <div class="row">
      <div class="col s12 m6 push-m3">
        <div class="card blue-grey darken-1 center">
          <div class="card-content white-text">
            <form class="form" method="post" action="authentication.php">
              <div class="row center">
                <p>User<br><input type="text" name="user" placeholder="User" value="admin"></p>
                <p>Password<br><input type="password" name="password" placeholder="Password" value="admin"></p>
                <input type="submit" name="submit" value="Submit" class="btn black"><br>
                <p>
                  <?php
                  if(isset($_SESSION['loginErro'])){
                    echo $_SESSION['loginErro'];
                    unset($_SESSION['loginErro']);
                  }
                  ?>
                </p>
              </div>

          </form>
          </div>
        </div>
      </div>
  </div>

</div>
</div>
  </body>
</html>
