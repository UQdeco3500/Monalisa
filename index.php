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
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/main-pages.css" />
    <link rel="stylesheet" href="css/main-nav.css" />
    <link rel="stylesheet" href="css/main-background.css" />
    <link rel="stylesheet" href="css/color-background.css" />
    <link rel="stylesheet" href="css/main-title.css" />
    <link rel="stylesheet" href="css/light.css" />
    <link rel="stylesheet" href="css/emoji-nav.css">
    <link rel="stylesheet" href="css/words.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css"/>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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
      <a class="main-pages" href="collection.php"> Collection</a>
      <a class="main-pages" href="map.html">Map</a>
    </nav>

    <div class="words">
      <p>Hi there!</p>
      <p>How does this artwork make you feel?</p>
    </div>
    
    <?php include 'db_connect.php';
    $sql = "SELECT `id`, `Artwork Name`, `Image`, `Artist`, `Year`, `Happy Description`, `Angry Description`, `Sad Description`, `Neutral Description`, `happy`, `angry`, `sad`, `neutral` FROM `monalisa`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    ?>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php
            while($row = $result->fetch_assoc()) {
              echo "<div class='swiper-slide slide_1' data-artwork-id='" . $row['id'] . "'>";
              echo "<img src='" . $row['Image'] . "' alt='" . $row['Artwork Name'] . "'>";
              echo "</div>";
            }
            ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <?php
} else {
    echo "0 results";
}
$conn->close();
?>

<nav class="emoji-nav">
  <button type="button" data-description="happy">
    <img src="img/emoji/happy.png" alt="Click Me!">
  </button>
  <button type="button" data-description="angry">
    <img src="img/emoji/angry.png" alt="Click Me!">
  </button>
  <button type="button" data-description="sad">
    <img src="img/emoji/sad.png" alt="Click Me!">
  </button>
  <button type="button" data-description="neutral">
    <img src="img/emoji/neutral.png" alt="Click Me!">
  </button>
</nav>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const mySwiper = new Swiper('.mySwiper', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    const emojiButtons = document.querySelectorAll('.emoji-nav button');
    emojiButtons.forEach(button => {
        button.addEventListener('click', function() {
            const descriptionType = button.getAttribute('data-description');
            const activeSlideIndex = mySwiper.activeIndex;
            const artworkId = document.querySelector(`.swiper-slide:nth-child(${activeSlideIndex + 1})`).getAttribute('data-artwork-id');

            // Send AJAX request to increment click count
            fetch(`update_click_count.php?artworkId=${artworkId}&descriptionType=${descriptionType}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('Click count incremented');
                    } else {
                        console.error('Failed to increment click count');
                    }
                })
                .catch(error => console.error('Error:', error));

            // Redirect to description_page.php
            window.location.href = `description_page.php?activeSlide=${activeSlideIndex}&description=${descriptionType}`;
        });
    });
});
</script>


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

    <script src="js/scrollreveal.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
