<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Shadrack Bentil">
    <title>Happy Birthday | Quadjo Bentil</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        require "./routes/class.php";
        $snippet = new Snippet();
    ?>
    <footer> <a href="javascript:;" class="trigger">Add your message to My Wishes Book &#x2295;</a></footer>
    </div>
    <?php
        $snippet->get_cards("happy.jpg" )
    ?>

  <?php echo $snippet->get_formbook() ?>
  <footer>&copy; <a href="http://qbentil.netlify.com" target="_blank" rel="noopener noreferrer">Themanbentil</a> Made it💖!</footer>

  <!-- Custom and Lib JS -->
  <script src="./js/jquery.js"></script>
  <script src="./js/app.js"></script>
  </body>
</body>
</html>
