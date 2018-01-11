
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags  -->

    <title>Home</title>

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
    <div class="jumbotron-home text-center">
      <div class="container">
        <h1><img style="width:100px; height:auto;" src="img/logoPlain.svg"></img>thnikk's keypads</h1>
        <h2>Keypads for the rhythm games!</h2>
        <a class="btn btn-success btn-lg ng-scope" href="https://www.etsy.com/shop/thnikk"><span class="glyphicon glyphicon-shopping-cart"></span> Buy now</a>

        <ul class="list-inline">
          <li><i class="fa fa-rocket"></i>
            <a href="http://docs.thnikk.moe/en/latest/quickstart.html">Quickstart Guide</a>
          </li>
          <li>·</li>
          <li>
            Cross-Compatible
          </li>
          <li>·</li>
          <li>
            Open Source
          </li>
        </ul>
      </div>
    </div>

    <div class="jumbotron-showcase">
      <div class="container image-showcase text-center">
        <!--<p><img class="showcase-img" src="img/render.png"></img></p>-->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <p><img class="showcase-img" src="img/ftRender.png"></p>
            </div>

            <div class="item">
              <p><img class="showcase-img" src="img/render.png"></p>
            </div>
          </div>

        </div>

        <div class="row text-center">
          <div class="col-md-4">
            <center>
              <div class="img-circle">
                <a href="#">
                  <i class="material-icons">lightbulb_outline</i>
                </a>
              </div>
            </center>
            <h2>LED Options</h2>
            <p>
              White and RGB LED options are available. Have the keys illuminate white on the LED model or set each LED a different color independently on the RGB model -- and that's just the beginning.
            </p>
          </div>
          <div class="col-md-4">
            <center>
              <div class="img-circle">
                <a href="http://docs.thnikk.moe/en/latest/remap.html">
                  <i class="material-icons">sort_by_alpha</i>
                </a>
              </div>
            </center>
            <h2>Remap</h2>
            <p>
              Each button can be mapped to up to three keys, including modifiers. Perfect for both Osu! and professional applications like Photoshop.
            </p>
          </div>
          <div class="col-md-4">
            <center>
              <div class="img-circle">
                <a href="http://docs.thnikk.moe/en/latest/program.html">
                  <i class="material-icons">code</i>
                </a>
              </div>
            </center>
            <h2>Easy</h2>
            <p>
              No drivers required for basic use! Settings like LED brightness, color, and effects can be easily changed with key combinations.
            </p>
          </div>
        </div>

      </div>
    </div>

    <!-- Serial Remapper -->
    <div class="jumbotron-2">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <h1>Remapper</h1>
            <dl>
              <dt>Easy to use</dt>
              <dd>Just download and run. No configuration required*</dd>
              <dt>Remap to any printable character and/or modifiers</dt>
              <dd>Use it for simple mapping in video games like osu or for your favorite keyboard shortcuts like ctrl+alt+z.</dd>
              <dt>Flexible</dt>
              <dd>Use the recommended program Termite(pre-configured) or one of many others including PuTTY, screen, or even the Serial Monitor built into the Arduino IDE!</dd>
            </dl>
          </div>
          <div class="col-md-8">
            <img class="img-fluid img-thumbnail" src="http://puu.sh/td559/4c0e8de787.png"><img>
          </div>
      </div>

      <div class="footnote"> <p>*The driver must be installed for Windows systems on 8.1 or lower.</p> </div>
    </div>
  </body>

  <!-- Arduino IDE
  <div class="jumbotron-3">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <img class="img-fluid img-thumbnail" src="http://puu.sh/tdG9L/b389a4ba02.png"></img>
        </div>
        <div class="col-md-4">
          <h1>Reprogramming</h1>
          <dl>
            <dt>New Web IDE</dt>
            <dd>No need to download anything with the new Arduino Web Editor. Runs directly from your web browser and installs drivers for you.</dd>
            <dt>Built-in Serial Monitor</dt>
            <dd>Remap your keys through the Web IDE.</dd>
            <dt>Upload the latest code</dt>
            <dd>The code available on the Web IDE will be the same code I upload to boards when I ship them. Release Candidates only, no beta updates. For the latest code, go to my GitHub.</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>-->


  <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/share/foot.php";
     include_once($path);
  ?>

</html>
