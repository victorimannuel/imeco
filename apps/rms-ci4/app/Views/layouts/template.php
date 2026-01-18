<!DOCTYPE html>
<html lang="en">
<head>
    <title>Website Saya</title>
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
</head>
<body>

    <header>
        <h1>Ini Header Website</h1>
    </header>

    <?= $this->renderSection('content') ?>

    <footer>
        <p>&copy; 2025 Website Saya</p>
    </footer>

</body>
</html>