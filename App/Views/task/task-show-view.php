<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../Public/CSS/dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="card">
                    <h2><?= $task['Title'] ?></h2>
                    <p class="<?= ($task['Status'] == 'done') ? 'done' : 'not-done' ?>"><?= $task['Status'] ?></p>
</div>
</body>
</html>