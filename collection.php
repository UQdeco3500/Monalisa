<!DOCTYPE html>
<html lang="en">

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
  <link rel="stylesheet" href="css/artists-list.css"/>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/main-pages.css" />
  <link rel="stylesheet" href="css/main-nav.css" />
  <link rel="stylesheet" href="css/main-background.css" />
  <link rel="stylesheet" href="css/color-background.css" />
  <link rel="stylesheet" href="css/main-title.css" />
  <link rel="stylesheet" href="css/light.css" />
  <link rel="stylesheet" href="css/emoji-nav.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="css/artists-list.css"/>
</head>

<body>
  <div class="popup">
              <button id="close">&times;</button>
              <h2>Manual to use this wheel</h2>
              <video id="VideoPlayer" src="video/Screen Recording 2022-10-03 at 3.42.13 pm.mp4" 
                  controls="true" autoplay="autoplay" loop="false" muted defaultmuted playsinline />
    </div>

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
      <a class="main-pages" href="collection.php"> Collection</a>
      <a class="main-pages" href="map.html">Map</a>
    </nav>

    <?php include 'db_connect.php';
$sql = "SELECT `id`, `Artwork Name`, `Image`, `Artist`, `Year`, `happy`, `angry`, `sad`, `neutral` FROM `monalisa`";
$result = $conn->query($sql);
?>

<div class="artist-background">
    <div class="main-artworks">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $total = $row['happy'] + $row['angry'] + $row['sad'] + $row['neutral'];

                $happyPercentage = ($total == 0) ? 0 : round(($row['happy'] / $total) * 100);
                $angryPercentage = ($total == 0) ? 0 : round(($row['angry'] / $total) * 100);
                $sadPercentage = ($total == 0) ? 0 : round(($row['sad'] / $total) * 100);
                $neutralPercentage = ($total == 0) ? 0 : round(($row['neutral'] / $total) * 100);
                ?>

              <div class='artworks' data-artwork-id='<?php echo $row['id']; ?>'>
                  <!-- Wrap the image inside an anchor tag -->
                  <a href="description_all.php?artworkId=<?php echo $row['id']; ?>">
                      <img src='<?php echo $row['Image']; ?>' alt='<?php echo $row['Artwork Name']; ?>'>
                  </a>
                  <nav class="emoji">
                        <div class="emoji-option">
                            <img src="img/emoji/happy.png" alt="Happy Emoji">
                            <p><?php echo $happyPercentage . '%'; ?></p>
                        </div>
                        <div class="emoji-option">
                            <img src="img/emoji/angry.png" alt="Angry Emoji">
                            <p><?php echo $angryPercentage . '%'; ?></p>
                        </div>
                        <div class="emoji-option">
                            <img src="img/emoji/sad.png" alt="Sad Emoji">
                            <p><?php echo $sadPercentage . '%'; ?></p>
                        </div>
                        <div class="emoji-option">
                            <img src="img/emoji/neutral.png" alt="Neutral Emoji">
                            <p><?php echo $neutralPercentage . '%'; ?></p>
                        </div>
                    </nav>
              </div>
                <?php
            }
        } else {
            echo "No artworks found.";
        }
        ?>

    </div>
</div>

  <form oninput="body.setAttribute('data-light', slider.value)">
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
  </form>

</body>

</html>