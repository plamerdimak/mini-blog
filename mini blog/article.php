<?php
require_once "./partials/functions.php";
 $id = $_GET["id"];
 $article = getArticleById($id,$articles);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $article ["title"]?></title>
</head>
<body>
     <?php include_once "./partials/menu.php"; ?>
     <h1> <?php echo $article ["title"]; ?></h1>
      <p> 
         <?php echo $article ["content"]; ?>
      </p>
      <div>
            <img src="../mini blog/assets/image/<?php echo $article ["image"];?> " alt="">
     </div>
    <?php require_once "./partials/footer.php"; ?>
</body>
</html>