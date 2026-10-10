<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customers</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body>
<body>
    <h1>User Names</h1>
    <ul>
        <?php foreach ($names as $name): ?>
            <li><?= esc($name) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>