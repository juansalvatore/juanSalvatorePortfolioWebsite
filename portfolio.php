<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juan Salvatore</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link rel="stylesheet" href="styles/portfolio-style.min.css">
  </head>
  <body>


    <div class="generalContainer">
      <div class="gridContainer">



        <div class="col-1">

        </div>
        <div class="col-2">

        </div>
        <div class="col-3">

        </div>
        <div class="col-4">

        </div>
        <div class="col-5">

        </div>
        <div class="col-6">

        </div>
        <div class="col-7">

        </div>
        <div class="col-8">

        </div>
        <div class="col-9">

        </div>
        <div class="col-10">

        </div>
        <div class="col-11">

        </div>
        <div class="col-12">

        </div>

        <h1>01</h1>
        <div class="profileImage">
          <p class="juan">Juan</p>
          <p class="salvatore">Salvatore</p>
          <p><strong>Juan specializes in making things</strong> for human people. By day he works at Sudco. By night he keeps learning, watches netflix, and helps other people to learn programming.</p>
        </div>
        <h2 class="two">02</h2>
        <div class="sudcoSection">
          <p><strong>Sudco is a creative startup. </strong> Juan built their main website and works here doing his best to create awesome responsive web pages and apps. </p>
          <span><button id="sudcoButton" onclick="window.location.href='http://sudco.me/'">Go to page</button></span>

        </div>
        <img class="fish" src='img/fish.png' alt="sudco">
        <h2 class="three">03</h2>
        <div class="booleSection">
          <img src='img/booleMockup.png' alt="boole">
          <p><strong>Digital House's final project.</strong><br> Juan pair programmed a web app in php, javascript and sass, for illustrating a project schedule visually and dinamically. </p>
          <span><button id="booleButton"  onclick="window.location.href='http://proyectodh.tunegocioenlinea.com.ar/'" >Go to page</button></span>
        </div>
        <h2 class="four">04</h2>
        <div class="laNacionSection">
          <img src='img/lanacion.png' alt="lanacion">
          <p><strong>La Nacion redesign.</strong><br> Juan redesigned and programmed his own vision for the argentinian newspaper.</p>
          <span><button id="laNacionButton" onclick="window.location.href='https://github.com/juansalvatore/laNacionRedesign'">Go to github</button></span>
        </div>
        <h3 class="five">05</h3>
        <div class="csSection">
          <div class="videoCs">
            <iframe class="youtube-player" src="https://www.youtube.com/embed/RFYKI1RbAMQ" frameborder="0" allowfullscreen></iframe>
          </div>
          <p><strong>Harvard's CS50 course.</strong><br> Juan finished Harvard University's introduction to the intellectual enterprises of computer science and the art of programming.</p>
          <span><button id="csButton" onclick="window.location.href='https://juansalvatorecs.wordpress.com/'">Go to blog</button></span>
        </div>
        <h3 class="six">06</h3>
        <div class="audiovisualSection">
          <img src='img/girl.png' alt="">
          <p><strong>Connected to emptiness.</strong><br> Juan wrote and direct a short film which was selected at BAFICI, Buenos Aires International Independent Film Festival.</p>
        </div>
        <h3 class="seven">07</h3>
        <div class="comicSection">
          <img src='img/comicBookHeader.jpg' alt="">
          <p><strong>The dessert sparrow.</strong><br> Juan loves drawing, he learned to draw with an argentinian Marvel drawer and he's been working on his 50 page comicbook as a side project.</p>
          <span><button id="comicButton" onclick="window.location.href='https://juansalvatoreblog.blogspot.com.ar/'">Go to blog</button></span>
        </div>
        <h3 class="eight">08</h3>
        <div class="contactSection">
          <a href="mailto:juansalvatore@live.com.ar"><img class="mail" src='img/mail.png' alt="mail"></a>
          <a href="https://www.linkedin.com/in/juansalvatore/"><img src='img/linkedin-social-outline-logotype.png' alt="linkedin"></a>
          <a href="https://github.com/juansalvatore"><img class="git" src='img/github.png' alt="github"><a href="#">
          <a href="https://www.instagram.com/juansalvatore/"><img src='img/instagram-social-outlined-logo.png' alt="instagram"></a>
          <a href="https://twitter.com/jnsalvatore"><img src='img/twitter-social-outlined-logo.png' alt="twitter"></a>
        </div>
    </div>


    <!-- call to JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <!-- call to library for controlling GIF animation -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
    <script type="text/javascript" src="controllers/portfolio-controller.js"></script>
  </body>
</html>
