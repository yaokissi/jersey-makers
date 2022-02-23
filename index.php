<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="widht=device-width, initial-scale=1">
    <meta charset="utf-8"><title>Nba Jersey Makers</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel ="stylesheet"  type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="img/yao-logo.png" sizes="32x32"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tourney:wght@200&display=swap" rel="stylesheet">
    <link href="https://fr.allfont.net/allfont.css?fonts=fancy-footwork" rel="stylesheet" type="text/css" />

     <!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
  </head>
  <body>
    <header>
         <img src="img/yao-logo.png" class="yao" alt="">
         <nav>
          <a href="https://www.github.com/yaokissi"><i class="fa fa-github fa-1x"></i> </a>
          <a href="mailto:yaokissi.pro@gmail.com"><i class="fa fa-envelope fa-1x"></i> </a>
          <a href="https://www.instagram.com/yaobears"> <i class="fa fa-instagram fa-1x"></i> </a>
         </nav>
    </header>
      <main>
        <article class="fonctionnement">
        <h1> CUSTOM JERSEY BACKGROUND</h1>
        <p> Create your own personal NBA jersey background by following these importants steps below.</p>
        <ul>
          <li><span>1.</span>Enter your name </li>
          <li><span>2.</span>Enter your Jersey number </li>
          <li><span>3.</span>Customize </li>
          <li><span>4.</span>Choose you team</li>
          <li><span>5.</span>Generate your Jersey </li>
          <li><span>6.</span>Download your Jersey.</li>
        </ul>
        <!--
        <ul>
          <li><span>3.</span>Customize </li>
          <li><span>4.</span>choose you team</li>
        </ul>
        <ul>
          <li><span>5.</span>Generate your Jersey </li>
          <li><span>6.</span>Download your new NBA jersey background.</li>
        </ul>-->
              <br><br>
            <p>
            We would love to see what you make so be sure to share your new look and tag <a href="https://www.instagram.com/yaobears">@yaobears</a> on social media.
          </p>
        </article>
        <section class="teams">
          <article class="teams-logo">
            <!-- <button id="phily">PHILA</button> -->
            <button id="griz"><img src="img/grizzly.png" alt=""></button>
            <button><img src="img/blazers.png" id="blaz" alt=""></button>
            <button><img src="img/bucks.png" id="bucks" alt=""></button>
            <button><img src="img/bulls.png" id="bulls" alt=""></button>
            <button><img src="img/cavs.png" id="cavs" alt=""></button>
            <button><img src="img/celtics.png" id="celtics" alt=""></button>
            <button><img src="img/clippers.png" id="clippers" alt=""></button>
            <button><img src="img/hawks.png" id="hawks" alt=""></button>
            <button><img src="img/heat.png" id="heat" alt=""></button>
            <button><img src="img/hornets.png" id="hornets" alt=""></button>
            <button><img src="img/jazz.png" id="jazz" alt=""></button>
            <button><img src="img/kings.png" id="kings" alt=""></button>
            <button><img src="img/knicks.png" id="knicks" alt=""></button>
            <button><img src="img/lakers.png" id="lakers" alt=""></button>
            <button><img src="img/magic.png" id="magic" alt=""></button>
            <button><img src="img/mavericks.png" id="mavericks" alt=""></button>
            <button><img src="img/minnesota.png" id="minnesota" alt=""></button>
            <button><img src="img/nets.png" id="nets" alt=""></button>
            <button><img src="img/nuggets.png" id="nuggets" alt=""></button>
            <button><img src="img/pacers.png" id="pacers" alt=""></button>
            <button><img src="img/pelicans.png" id="pelicans" alt=""></button>
            <button><img src="img/pistons.png" id="pistons" alt=""></button>
            <button><img src="img/raptors.png" id="raptors" alt=""></button>
            <button><img src="img/rockets.png" id="rockets" alt=""></button>
            <button><img src="img/sixers.png" id="sixers" alt=""></button>
            <button><img src="img/spurs.png" id="spurs" alt=""></button>
            <button><img src="img/suns.png" id="suns" alt=""></button>
            <button><img src="img/thunder.png" id="thunder" alt=""></button>
            <button><img src="img/warriors.png" id="warriors" alt=""></button>
            <button><img src="img/wizards.png" id="wizards" alt=""></button>
          </article>
        </section>
   <section class="custom">
     <article class="teams-jersey">
       <div id="screen">
       <img id="current_img" src="img/jersey/memphis.jpg" alt="">
       <div class="imgbloc">
         <?php
         $username="";
         $usernumber="";

         if (isset($_POST['username']))
         {
           $username = $_POST['username'];
         }
         if (isset($_POST['usernumber']))

         {
           $usernumber = $_POST['usernumber'];
         }
                if (!Empty($_POST["username"]));
                if (!Empty($_POST["usernumber"]));
         {

         echo "<h3> <p>$username</p> <br> <span>$usernumber</span></h3>";
         }



         ?>
</div>
</div>
<!-- <br><br><br><br><br><br><br><br><br><br><br> -->
     </article>
     <article class="formulaire">
      <form class="" action="" method="POST">
        <h2>CUSTOMIZE </h2>
         <p>Edit Name </p>
        <input type="text" maxlength="" name="username" value=""  placeholder="Your Name" required>
        <br><br> <p>Edit Jersey Number</p>
        <input type="number" maxlength="" name="usernumber"  placeholder="Your Number" value="" required><br><br><br>
        <input type="submit" name="generer" value="Customize" > <br><br><br>
        <input id="btn-Preview-Image" type="button" value="Generate Jersey"/><br><br>
      <!--<a href="javascript:genScreenshotgraph()">  -->
      <a id="btn-Convert-Html2Image"><input type="button" name="download" value="Download Your Jersey"></a>
      </form>
     </article>
     </section>
   </main>

    <footer>
      <div>
       <p>Make With <i class="fa fa-heart fa-1x"></i> by  <a href="https://www.instagram.com/yaobears">Yao Kissi</a> </p>
      </div>
    </footer>
    <script src="javascript/switch.js"></script>
    <script src="javascript/jersey-data.js"></script>
  </body>
  <!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
  <script>
  $(document).ready(function(){


 var element = $("#screen"); // global variable
 var getCanvas; // global variable

      $("#btn-Preview-Image").on('click', function () {
           html2canvas(element, {
           onrendered: function (canvas) {
                  $("#previewImage").append(canvas);
                  getCanvas = canvas;
               }
           });
      });

  	$("#btn-Convert-Html2Image").on('click', function () {
      var imgageData = getCanvas.toDataURL("image/png");
      // Now browser starts downloading it instead of just showing it
      var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
      $("#btn-Convert-Html2Image").attr("download", "nba-wallapaper.png").attr("href", newData);
  	});

  });
/*
  function genScreenshotgraph()
  {
      html2canvas($('#screen'), {

        onrendered: function(canvas) {

          var imgData = canvas.toDataURL("image/jpeg");
          var pdf = new jsPDF();
          pdf.addImage(imgData, 'JPEG', 0, 0, -180, -180);
          pdf.save("nba-wallapaper.pdf");
        }
       });

  }
*/

  </script>

</html>
<!--
<?php
$username="";
$usernumber="";

if (isset($_POST['username']))
{
  $username = $_POST['username'];
}
if (isset($_POST['usernumber']))

{
  $usernumber = $_POST['usernumber'];
}
       if (!Empty($_POST["username"]));
       if (!Empty($_POST["usernumber"]));
  {
       echo "<h3> <p>$username</p> <br> <span>$usernumber</span></h3>";
  }
 ?>
-->
