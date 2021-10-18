<?php require('partials/head.view.php'); ?>
  <header>
    <h1>My Tasks</h1>
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
<?php require('partials/footer.view.php'); ?>