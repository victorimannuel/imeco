<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    
    <!--<link rel="icon" href="<?= base_url('logo.ico') ?>" type="image/x-icon">-->
    <!--<link rel="shortcut icon" href="<?= base_url('logo.ico') ?>" type="image/x-icon">-->
    <link rel="canonical" href="https://radar-ms.com/" />
    
    <title>Radar Mandiri Sukses - Your Satisfaction is Our Proud</title>
    
    <!--<title><?= $this->renderSection('title') ?> | Radar-MS</title>-->
    <meta content="Leading Indonesia's sustainable future through innovative scrap management and recycling solutions since 2024" name="description"/>
    
    <!--Google Font-->
    <!--<link rel="preconnect" href="https://fonts.googleapis.com">-->
    <!--<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">-->

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lucide Icons -->
    <!--<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>-->
    
    <!-- Custom Styles -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <?= view('frontend/partials/nav') ?>

    <!-- Content -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <?= view('frontend/partials/footer') ?>

    <!-- Toggle Script -->
    <script>
        document.getElementById('mobileMenuBtn')?.addEventListener('click', function () {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });
    </script>
    <script src="<?= base_url('assets/js/global.js') ?>"></script>
    
</body>

</html>
