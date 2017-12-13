<?php require 'partials/head.php' ?>

    <h1>My Tasks</h1>
	<ul>
		<?php foreach($tasks as $task): ?>
			<?php if($task->completed): ?>
				<li><strike><?=$task->description?></strike></li>
			<?php else: ?>
				<li><?=$task->description?></li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>

    <a href="/new-task">New task</a>
<?php require 'partials/footer.php' ?>