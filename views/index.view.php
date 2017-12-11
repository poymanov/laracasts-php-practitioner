<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tasks</title>
</head>
<body>
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
</body>
</html>