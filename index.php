<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday | QUadjo Bentil</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        require "./class.php";
        $snippet = new Snippet();

    ?>
    <footer> <a href="javascript:;" class="trigger">Add your message to My Wishes Book💖!</a></footer>
    
    <!-- <div class="card">
        <div class="back"></div>
        <div class="front">
        <div class="imgset">
            <img width="100%" src="./img/front.jpg">
            </div>
        </div>
        <div class="text-container">
        <p id="head">Happy Birthday Bby❤💖!</p>
        <p>I hope your special day will bring you lots of happiness, love, and fun. You deserve them a lot. Enjoy your day for me!</p>
        <p>Have a memorable day!🥰</p>
        </div>
    </div> -->
    <?php
        $snippet->get_card("Happy Birthday Bentil","I hope your special day will bring you lots of happiness, love, and fun. You deserve them a lot. Enjoy your day for me!", "John Doe", "happy.jpg" )
    ?>
    <div class="card">
        <div class="back"></div>
        <div class="front">
        <div class="imgset">
            <img width="100%" src="./img/happy.jpg">
            </div>
        </div>
        <div class="text-container">
        <p id="head">Happy Birthday Minash!</p>
        <p>My wish for you on this special day of yours is that life brings you everything that puts a smile on your face. You are such a wonderful woman, and I love you more than I can ever say in words. Happy birthday Bby❤💖. 
        </p>
        <p>I Love you💖!</p>
        </div>
    </div>

    <!-- <div class="card">
        <div class="back"></div>
        <div class="front">
        <div class="imgset">
            <img width="100%" src="./img/happy.jpg">
            </div>
        </div>
        <div class="text-container">
        <p id="head">Happy Birthday Minash!</p>
        <p>I hope your special day will bring you lots of happiness, love, and fun. You deserve them a lot. Enjoy!</p>
        <p>Hope your day goes great!</p>
        </div>
    </div> -->

  <?php echo $snippet->get_formbook() ?>
  <footer>&copy; <a href="http://qbentil.netlify.com" target="_blank" rel="noopener noreferrer">Themanbentil</a> Made it💖!</footer>
  <script src="app.js"></script>
  </body>
</body>
</html>