<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Pixel Art Museum</title>

  <!-- Favicon and Icon -->
  <link rel="icon" type="image/png" href="img/icon.gif" />

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/info-page.css" />
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/main-pages.css" />
  <link rel="stylesheet" href="css/main-nav.css" />
  <link rel="stylesheet" href="css/main-background.css" />
  <link rel="stylesheet" href="css/color-background.css" />
  <link rel="stylesheet" href="css/main-title.css" />
  <link rel="stylesheet" href="css/light.css" />
  <link rel="stylesheet" href="css/emoji-nav.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/artists-list.css" />
</head>

<body>
  <div class="lamp-wrapper">
    <div class="lamp-rope"></div>
    <div class="lamp">
      <div class="lamp-part -top"></div>
      <div class="lamp-part -top-part"></div>
      <div class="lamp-part -top-part right"></div>
      <div class="lamp-part -body"></div>
      <div class="lamp-part -body right"></div>
      <div class="lamp-part -bottom"></div>
      <div class="bulb"></div>
    </div>
    <div class="wall-light-shadow"></div>
  </div>

  <h1 class="main-title">The Art Museum</h1>

  <nav class="main-nav">
      <a class="main-pages" href="index.php">Home</a>
      <a class="main-pages" href="collection.php"> Collect!</a>
      <a class="main-pages" href="map.html">Map</a>
    </nav>

    <?php include 'db_connect.php';

    // Get the artwork ID from the URL
    $artworkId = isset($_GET['artworkId']) ? intval($_GET['artworkId']) : 1; // Default to 1 if not provided

    // Fetch data for the specific artwork based on the provided artwork ID
    $sql = "SELECT `id`, `Artwork Name`, `Image`, `Artist`, `Year`, `Happy Description`, `Angry Description`, `Sad Description`, `Neutral Description` FROM `monalisa` WHERE `id` = $artworkId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>
        <div class="artwork-info">
        <div class="artwork-image">
            <img src="<?php echo $row['Image']; ?>" alt="<?php echo $row['Artwork Name']; ?>">
        </div>
        <div class="artwork-details">
            <h2><?php echo $row['Artwork Name']; ?></h2>
            <p class="artist-name"><?php echo $row['Artist']; ?></p>
            <p class="creation-date">Date Created: <?php echo $row['Year']; ?></p>
            <div class="description">
                <p><?php echo $row['Happy Description']; ?></p>
                <p><?php echo $row['Angry Description']; ?></p>
                <p><?php echo $row['Sad Description']; ?></p>
                <p><?php echo $row['Neutral Description']; ?></p>
            </div>
        </div>
        </div>
    <?php
    } else {
        echo "No results found";
    }

    $conn->close();
    ?>
  
  <!-- <form oninput="body.setAttribute('data-light', slider.value)">
    <div class="icon sun">
      <div class="ray"></div>
      <div class="ray"></div>
      <div class="ray"></div>
      <div class="ray"></div>
      <div class="ray"></div>
      <div class="ray"></div>
      <div class="ray"></div>
      <div class="ray"></div>
    </div>
    <input type="range" id="slider" value="5" min="0" max="10">
  </form> -->

</body>

</html>