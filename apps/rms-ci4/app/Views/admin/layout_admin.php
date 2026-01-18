<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?? 'Admin Panel' ?>
    </title>
    <link rel="icon" href="<?= base_url('assets/images/logo.webp') ?>" type="image/x-icon">
    <!-- Tailwind & Flowbite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/admin/theme.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/admin/style.css') ?>" />
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full z-50 bg-white border-b border-gray-200">
        <!--<div class="flex items-center justify-between px-4 py-3 lg:px-6">-->
        <div class="flex items-center justify-between px-4 py-3">
            <!-- Mobile sidebar toggle + Logo -->
            <div class="flex items-center">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" type="button" class="inline-flex items-center p-2 text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                </button>
                <img src="<?= base_url('assets/images/logo.webp') ?>" class="h-8 w-8 rounded-md mr-2" alt="Logo">
                <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Radar Mandiri Sukses</span>
                </a>
            </div>
            <!-- User Menu -->
            <div class="relative">
                <button type="button" class="flex items-center text-sm rounded-full gap-2" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                    <!-- Admin text -->
                    <span class="font-medium text-[var(--text)]">Selamat datang, <?= session()->get('name') ?>!</span>
                    <!-- User photo -->
                    <img class="w-8 h-8 rounded-full" src="<?= base_url('assets/images/logo.webp') ?>" alt="user photo">
                </button>
                <div class="hidden absolute right-0 mt-2 w-48 bg-white border rounded shadow-lg" id="dropdown-user">
                    <div class="px-4 py-3">
                        <p class="text-sm font-medium text-gray-900">
                            <?= session()->get('name') ?>
                        </p>
                    </div>
                    <ul class="py-1">
                        <li>
                            <a href="<?= site_url('logout') ?>" class="flex items-center px-4 py-2 text-sm text-[var(--danger)] hover:bg-[var(--hover-bg)] rounded gap-2">
                                <!-- Icon -->
                                <svg class="w-5 h-5 text-[var(--danger)]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                                </svg> Sign out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->
    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-16 transition-transform -translate-x-full sm:translate-x-0 bg-white border-r border-gray-200">
        <div class="h-full px-3 pb-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="<?= site_url('product') ?>" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-[var(--hover-bg)] group">
                        <!--<i class="fas fa-box w-5 h-5"></i>-->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M9.98189 4.50602c1.24881-.67469 2.78741-.67469 4.03621 0l3.9638 2.14148c.3634.19632.6862.44109.9612.72273l-6.9288 3.60207L5.20654 7.225c.2403-.22108.51215-.41573.81157-.5775l3.96378-2.14148ZM4.16678 8.84364C4.05757 9.18783 4 9.5493 4 9.91844v4.28296c0 1.3494.7693 2.5963 2.01811 3.2709l3.96378 2.1415c.32051.1732.66011.3019 1.00901.3862v-7.4L4.16678 8.84364ZM13.009 20c.3489-.0843.6886-.213 1.0091-.3862l3.9638-2.1415C19.2307 16.7977 20 15.5508 20 14.2014V9.91844c0-.30001-.038-.59496-.1109-.87967L13.009 12.6155V20Z"/>
                        </svg>
                        <span class="ml-3">Produk</span>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('documentation') ?>" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-[var(--hover-bg)] group">
                        <!--<i class="fas fa-file-alt w-5 h-5"></i>-->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M14 7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7Zm2 9.387 4.684 1.562A1 1 0 0 0 22 17V7a1 1 0 0 0-1.316-.949L16 7.613v8.774Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="ml-3">Dokumentasi</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- Main Content -->
    <div class="flex flex-col flex-grow ml-0 sm:ml-64 mt-16 p-4 md:p-8">
        <main class="flex-1 overflow-auto w-full max-w-7xl mx-auto">
            <?= $this->renderSection('content') ?>
        </main>
    </div>
    <!-- Font Awesome CDN for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
</body>

</html>