<?php
if (!empty($_GET['q'])) {
  switch ($_GET['q']) {
    case 'info':
      phpinfo();
      exit;
      break;
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Laragon</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <div class="karosel">
    <div id="carouselExampleControls" class="carousel slide" data-bs-touch="true" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="left.png" class="hey" alt="Language">
        </div>
        <div class="carousel-item">
          <img src="center.jpg" class="hey" alt="Art">
        </div>
        <div class="carousel-item">
          <img src="right.jpg" class="hey" alt="Representation">
        </div>
      </div>

    </div>
  </div>
  <marquee direction="down" scrolldelay="0" scrollamount="30">01010010 01000101 01000001 <br> 01000011 01010100 00100000 <br>
    01001110 01000001 01010100 <br> 01001001 01010110 01000101 00100000 01010111 01001001 <br>
    01001100 01001100 00100000 <br> 01000100 01001001 01000101 01010010 01000101 01000001 <br>
    01001110 01000001 01010100 <br> 01001001 01010110 01000101 00100000 01010111 01001001 <br>

  </marquee>
  <!-- <marquee scrolldelay="0" direction="down" scrollamount="60">
    01010010 01000101 01000001 01000011 01010100 00100000
    01001100 01001100 00100000 01000100 01001001 01000101 01010010 01000101 01000001

  </marquee> -->
  <center>
    <h3 class="blink">LOCALHOST</h3>
  </center>
  <p>Developed by </p> <img src="logo.jpg" alt="" class="logo">


  <style>
    marquee {
      color: white;
      height: 100%;
      width: 15%;
      position: absolute;
      right: 0%;
      z-index: -1;
      writing-mode: vertical-rl;
      text-orientation: upright;
    }

    .karosel {
      position: absolute;
      left: 35%;
      top: 10%;
      width: 30%;
      height: 50%;
      z-index: -1;
    }

    .hey {
      width: 370px;
      border-radius: 5%;
      height: 500px;
    }

    .logo {
      width: 30px;
      transform: rotate(-90deg);
      margin: 0;
      position: absolute;
      right: 45%;
      bottom: -2%;
      z-index: -1;

    }

    p {
      font-size: 15px;
      font-family: Lovelo;
      margin: 0;
      position: absolute;
      left: 43%;
      bottom: 1%;
      z-index: -1;
    }

    .blink {
      animation: blinker 2s linear infinite;
      color: white;
      font-size: 30px;
      margin: 0;
      font-weight: bold;
      font-family: NewAlenia;
    }

    @font-face {
      font-family: NewAlenia;
      src: url(NewAlenia.ttf);
      font-family: Lovelo;
      src: url(Lovelo.otf);
    }

    @keyframes blinker {
      50% {
        opacity: 0;
      }
    }

    body {
      margin: 0;
      padding: 0;
      font-weight: 100;
      font-family: 'Karla';
      background-color: black;
      color: white;
    }

    .title {
      font-size: 40px;
      font-family: 'Lovelo';
      position: absolute;
      top: 0%;
      right: 0%;
      z-index: -1;
    }
  </style>
</head>

<body>
  <div class="title" title="Laragon">Laragon</div>

  <?php foreach (glob("*", GLOB_ONLYDIR) as $filename) {
    if ($filename != "folder") {
      echo '<div class="border"><center>
            <a class="project" href="/' . $filename . '/"><br>
            <img src="folder.jpg" class="folder"' . $filename . ' ></img><h6>' . $filename . '</h6></a></center></div><br>';
    }
  } ?>

  <style>
    .project {
      color: white;
    }

    .folder {
      width: 30%;
      margin: 0;

    }

    h6 {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      text-align: center;
      position: relative;

      font-size: 15px;
    }

    .border {

      box-shadow: 4px 0px 30px 15px purple;
      border-radius: 10%;
      width: 10%;
    }
  </style>

</body>

</html>