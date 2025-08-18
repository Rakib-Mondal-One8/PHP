<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <?php if(!empty($pageTitle)): ?>
        <title>Culinary Cove &bull; <?php echo $pageTitle; ?></title>
    <?php else: ?>
        <title>Culinary Cove</title>
    <?php endif; ?>
</head>
<body>
<?php
/*
if(empty($headerImg)):
    $headerImg = './images/logo.png';
*/
?>
    <?php
        if(!isset($headerImg)):$headerImg = '';
    ?>
  <header class="header-with-background" style="background-image:
    <?php if(!empty($headerImg)): ?> url(<?php echo $headerImg; ?>)
    <?php else: ?> url(<?php echo $defaultImg; ?>)
    <?php endif; ?>
    "
    >
    <h1>Culinary Cove</h1>
    <p>Your sanctuary for exceptional flavors</p>
    <nav>
        <?php
        if(!isset($pageKey)): $pageKey = '';
        ?>
      <a href="our-mission.php" class="<?php if(!empty($pageKey) &&$pageKey === 'mission') : ?> active <?php endif; ?>">Our mission</a>
      <a href="ingredients.php" class="<?php if(!empty($pageKey)&&$pageKey === 'ingredients') : ?> active <?php endif; ?>">Ingredients</a>
      <a href="menu.php" class="<?php if(!empty($pageKey)&&$pageKey === 'menu') : ?> active <?php endif; ?>">Menu</a>
    </nav>
  </header>

  <main>