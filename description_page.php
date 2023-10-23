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

    <?php
include 'db_connect.php';

// Get the active slide index and description type from the URL parameter
$activeSlide = isset($_GET['activeSlide']) ? intval($_GET['activeSlide']) : 0;
$descriptionType = isset($_GET['description']) ? $_GET['description'] : 'happy';  // default to 'happy' if not provided

// Validate and sanitize the description type
$allowedDescriptions = ['happy', 'sad', 'neutral', 'angry'];
if (!in_array($descriptionType, $allowedDescriptions)) {
    $descriptionType = 'happy';  // default to 'happy' if invalid value provided
}

$emojiImageUrl = ""; // Initialize the emoji image URL variable
switch($descriptionType) {
    case 'happy':
        $emojiImageUrl = "img/emoji/happy.png";
        break;
    case 'angry':
        $emojiImageUrl = "img/emoji/angry.png";
        break;
    case 'sad':
        $emojiImageUrl = "img/emoji/sad.png";
        break;
    case 'neutral':
        $emojiImageUrl = "img/emoji/neutral.png";
        break;
}

$descriptionColumn = "`" . ucfirst($descriptionType) . " Description`";

// Fetch data for the specific artwork based on the active slide index
$sql = "SELECT `Artwork Name`, `Image`, `Artist`, `Year`, $descriptionColumn AS `Description` FROM `monalisa` LIMIT $activeSlide, 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
    <div class="artwork-info">
        <div class="emoji">
            <img src="<?php echo $emojiImageUrl; ?>" alt="<?php echo $descriptionType; ?>">
        </div>
        <div class="artwork-image">
            <img src="<?php echo $row['Image']; ?>" alt="<?php echo $row['Artwork Name']; ?>">
        </div>
        <div class="artwork-details">
            <h2><?php echo $row['Artwork Name']; ?></h2>
            <p class="artist-name"><?php echo $row['Artist']; ?></p>
            <p class="creation-date">Date Created: <?php echo $row['Year']; ?></p>
            <div class="description">
                <p>Description: <?php echo $row['Description']; ?></p>
            </div>
        </div>
    </div>
<?php
}
?>

    <!-- <?php include 'db_connect.php';

// Get the active slide index and description type from the URL parameter
$activeSlide = isset($_GET['activeSlide']) ? intval($_GET['activeSlide']) : 0;
$descriptionType = isset($_GET['description']) ? $_GET['description'] : 'happy';  // default to 'happy' if not provided

// Validate and sanitize the description type
$allowedDescriptions = ['happy', 'sad', 'neutral', 'angry'];
if (!in_array($descriptionType, $allowedDescriptions)) {
    $descriptionType = 'happy';  // default to 'happy' if invalid value provided
}

// Switch case is not required anymore since we've validated the input
$descriptionColumn = "`" . ucfirst($descriptionType) . " Description`";

// Fetch data for the specific artwork based on the active slide index
$sql = "SELECT `Artwork Name`, `Image`, `Artist`, `Year`, $descriptionColumn AS `Description` FROM `monalisa` LIMIT $activeSlide, 1";
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
                <p><?php echo $descriptionType; ?> Description: <?php echo $row['Description']; ?></p>
            </div>
        </div>
    </div> -->

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