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
        require "./routes/class.php";
        $snippet = new Snippet();

    ?>
    <footer> <a href="javascript:;" class="trigger">Add your message to My Wishes Book💖!</a></footer>
    </div>
    <?php
        $snippet->get_card("Happy Birthday Bentil","I hope your special day will bring you lots of happiness, love, and fun. You deserve them a lot. Enjoy your day for me!", "Alexandra Doe", "happy.jpg" )
    ?>

  <?php echo $snippet->get_formbook() ?>
  <footer>&copy; <a href="http://qbentil.netlify.com" target="_blank" rel="noopener noreferrer">Themanbentil</a> Made it💖!</footer>

  <!-- jquery -->
  <script src="./js/jquery.js"></script>
  <script src="./js/app.js"></script>
  </body>
</body>
</html>