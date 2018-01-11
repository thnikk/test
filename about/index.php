
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>About Me</title>

    <?php
  	   $path = $_SERVER['DOCUMENT_ROOT'];
  	   $path .= "/share/htag.php";
  	   include_once($path);
  	?>

  </head>

  <body>

    <?php
  	   $path = $_SERVER['DOCUMENT_ROOT'];
  	   $path .= "/share/nav.php";
  	   include_once($path);
  	?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">

        <div class="row">
          <div class="col-md-2">
            <center>
              <img class="about-pic" src="img/mii.png" alt="Mii">
            </center>
          </div>
          <div class="col-md-10">
            <h1>Who am I?</h1>
            <p>I'm an anime snob, figure collector, programmer, web designer, maker, and a guy who plays video games on occasion. I'm also that one guy that makes osu keypads. I have fun messing with electronics and ruining my website every few months.</p>
          </div>
        </div>

      </div>
    </div>

    <div class="jumbotron-links">
      <div class="container image-showcase">
        <h1> Where am I? </h1>
        </br>
        <div class="row">
          <div class="col-md-4">

            <div class="row">
              <div class="col-md-4">
                <div class="img-circle text-center">
                  <a href="https://twitter.com/thnikk">
                    <i class="material-icons">chat_bubble</i>
                  </a>
                </div>
              </div>
              <div class="col-md-8">
                <h2>Twitter</h2>
                <p>
                  See my updates when I remember that my phone has a camera.
                </p>
              </div>
            </div>

          </div>
          <div class="col-md-4">

            <div class="row">
              <div class="col-md-4">
                <div class="img-circle text-center">
                  <a href="https://www.youtube.com/user/thnikker">
                    <i class="material-icons">play_arrow</i>
                  </a>
                </div>
              </div>
              <div class="col-md-8">
                <h2>Youtube</h2>
                <p>
                  Watch out of date videos showing off older versions of keypads.
                </p>
              </div>
            </div>

          </div>
          <div class="col-md-4">

            <div class="row">
              <div class="col-md-4">
                <div class="img-circle text-center">
                  <a href="https://github.com/thnikk">
                    <i class="material-icons">code</i>
                  </a>
                </div>
              </div>
              <div class="col-md-8">
                <h2>GitHub</h2>
                <p>
                  See my decent documentation and code for various projects.
                </p>
              </div>
            </div>

          </div>
        </div>

        <div class="row" style="margin-top:50px;">
          <div class="col-md-4">

            <div class="row">
              <div class="col-md-4">
                <div class="img-circle text-center">
                  <a href="https://osu.ppy.sh/u/519270">
                    <i class="material-icons">games</i>
                  </a>
                </div>
              </div>
              <div class="col-md-8">
                <h2>Osu!</h2>
                <p>
                  See how bad I am at the game I spend all of my time working to make controllers for.
                </p>
              </div>
            </div>

          </div>
          <div class="col-md-4">

            <div class="row">
              <div class="col-md-4">
                <div class="img-circle text-center">
                  <a href="http://myanimelist.net/profile/thnikk">
                    <i class="material-icons">movie</i>
                  </a>
                </div>
              </div>
              <div class="col-md-8">
                <h2>MAL</h2>
                <p>
                  Check my taste in anime and I'll insult what you like.
                </p>
              </div>
            </div>

          </div>
          <div class="col-md-4">

            <div class="row">
              <div class="col-md-4">
                <div class="img-circle text-center">
                  <a href="http://myfigurecollection.net/profile/thnikk">
                    <i class="material-icons">account_balance_wallet</i>
                  </a>
                </div>
              </div>
              <div class="col-md-8">
                <h2>MFC</h2>
                <p>
                  Follow me on my descent into bankruptcy as I keep buying Miku figures.
                </p>
              </div>
            </div>

          </div>
        </div>



      </div>
    </div>


  <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/share/foot.php";
     include_once($path);
  ?>

</html>
