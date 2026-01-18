<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/admin/theme.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/admin/style.css') ?>" />

    <style>
        /* Gaya untuk memastikan tinggi penuh layar dan centering vertikal */
        .full-screen {
            height: 100vh;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">

    <div class="full-screen flex items-center justify-center p-4">

        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-2xl border border-gray-200">

            <div class="text-center mb-8">
                <img src="<?= base_url('assets/images/logo.webp') ?>" class="h-16 w-16 rounded-md mx-auto mb-4" alt="Logo">
                <h1 class="text-3xl font-extrabold text-gray-900">
                    Silakan Login
                </h1>
                <p class="text-sm text-gray-600 mt-1">Masuk ke Dashboard Admin</p>
            </div>

            <?php if (session()->getFlashdata('error')) : ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm" role="alert">
                <span class="block sm:inline"><?= session()->getFlashdata('error') ?></span>
            </div>
            <?php endif; ?>

            <form action="<?= site_url('login') ?>" method="post" class="space-y-6">

                <div>
                    <!--<label for="email" class="block text-sm font-medium text-gray-700">Email</label>-->
                    <input type="email" name="email" id="email" required autocomplete="email" placeholder="Email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-[var(--primary)] sm:text-sm">
                </div>

                <div class="mt-1 relative">
                    <input type="password" name="password" id="password" required autocomplete="current-password" placeholder="Password" class="block w-full pr-10 px-3 py-2 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-[var(--primary)] sm:text-sm">

                    <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-500 hover:text-gray-700 focus:outline-none">
                        <!-- Show icon -->
                        <svg id="showIcon" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <!-- Hide icon (hidden by default) -->
                        <svg id="hideIcon" class="w-6 h-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="m4 15.6 3.055-3.056A4.913 4.913 0 0 1 7 12.012a5.006 5.006 0 0 1 5-5c.178.009.356.027.532.054l1.744-1.744A8.973 8.973 0 0 0 12 5.012c-5.388 0-10 5.336-10 7A6.49 6.49 0 0 0 4 15.6Z" />
                            <path d="m14.7 10.726 4.995-5.007A.998.998 0 0 0 18.99 4a1 1 0 0 0-.71.305l-4.995 5.007a2.98 2.98 0 0 0-.588-.21l-.035-.01a2.981 2.981 0 0 0-3.584 3.583c0 .012.008.022.01.033.05.204.12.402.211.59l-4.995 4.983a1 1 0 1 0 1.414 1.414l4.995-4.983c.189.091.386.162.59.211.011 0 .021.007.033.01a2.982 2.982 0 0 0 3.584-3.584c0-.012-.008-.023-.011-.035a3.05 3.05 0 0 0-.21-.588Z"
                            />
                            <path d="m19.821 8.605-2.857 2.857a4.952 4.952 0 0 1-5.514 5.514l-1.785 1.785c.767.166 1.55.25 2.335.251 6.453 0 10-5.258 10-7 0-1.166-1.637-2.874-2.179-3.407Z" />
                        </svg>
                    </button>
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-[var(--primary)] hover:bg-[var(--primary-hover)] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150">
                        Masuk
                    </button>
                </div>
            </form>

        </div>
    </div>

</body>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    const showIcon = document.querySelector('#showIcon');
    const hideIcon = document.querySelector('#hideIcon');
    
    togglePassword.addEventListener('click', () => {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        
        // toggle icons
        showIcon.classList.toggle('hidden');
        hideIcon.classList.toggle('hidden');
    });
</script>

</html>