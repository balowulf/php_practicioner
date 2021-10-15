<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    header {
      background: #e3d3d3;
      padding: 2em;
      text-align: center;
    }
  </style>
</head>
<body>
  <nav>
    <a href="about">About</a>
    <a href="about/culture">Our Culture</a>
    <a href="contact">Contact</a>
  </nav>
  <header>
    <ul>
      <?php foreach ($tasks as $task) : ?>
        <li>
          <?php if ($task->isCompleted()) : ?> 
            <strike><?= $task->getDescription(); ?></strike>
          <?php else: ?> 
            <?= $task->getDescription(); ?>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </header>
</body>
</html>