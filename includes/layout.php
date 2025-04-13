<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/css/styles.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>
<?php
include __DIR__ . "/header.php"; ?>
<main class="min-h-screen w-full max-w-6xl mx-auto pt-10 px-4"><?php include $parent_content; ?></main>
<?php include __DIR__ . "/footer.php";?>
</body>
</html>
