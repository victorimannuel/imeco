<?= $this->extend('frontend/layout_public') ?>
<?= $this->section('content') ?>

<section class="py-20 bg-gradient-to-br from-red-50 via-white to-blue-50 text-gray-800 relative overflow-hidden mt-10" id="contact">

    <!-- Decorative gradients (won't block clicks) -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_20%_30%,rgba(30,58,138,0.1),transparent_50%)] pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-full h-full bg-[radial-gradient(circle_at_80%_70%,rgba(178,34,34,0.1),transparent_50%)] pointer-events-none"></div>
    </div>

    <div class="container mx-auto px-4 relative">
        <div class="text-center mb-16 fade-in">
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Gallery</span>
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800 mt-4">
                Activity <span class="bg-gradient-to-r from-red-600 to-blue-600 bg-clip-text text-transparent">Documentation</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-16">A comprehensive documentation of our activities</p>

            <!-- Gallery Grid -->
            <div class="grid md:grid-cols-3 gap-4">
                <?php foreach ($documentation as $item): ?>
                    <?php if ($item['type'] === 'image'): ?>
                        <img src="<?= base_url($item['file_path']) ?>" 
                             class="w-full h-64 object-cover rounded-lg shadow cursor-pointer doc-item" 
                             alt="Documentation Image"
                             loading="lazy"
                             data-src="<?= base_url($item['file_path']) ?>">
                    <?php else: ?>
                        <video src="<?= base_url($item['file_path']) ?>" 
                               class="w-full h-64 object-cover rounded-lg shadow cursor-pointer doc-item" 
                               data-src="<?= base_url($item['file_path']) ?>"></video>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Popup Modal -->
        <div id="popup" class="fixed inset-0 bg-black bg-opacity-80 hidden items-center justify-center z-50">
            <span class="absolute top-5 right-8 text-white text-3xl cursor-pointer" onclick="closePopup()">&times;</span>
            <div id="popupContent"></div>
        </div>
    </div>
</section>

<script>
    const popup = document.getElementById('popup');
    const popupContent = document.getElementById('popupContent');

    function openPopup(src) {
        if (src.endsWith('.mp4')) {
            popupContent.innerHTML = `<video src="${src}" controls autoplay class="max-h-[80vh] max-w-[90vw] rounded-lg shadow-lg"></video>`;
        } else {
            popupContent.innerHTML = `<img src="${src}" class="max-h-[80vh] max-w-[90vw] rounded-lg shadow-lg">`;
        }
        popup.classList.remove('hidden');
        popup.classList.add('flex');
    }

    function closePopup() {
        popup.classList.add('hidden');
        popup.classList.remove('flex');
        popupContent.innerHTML = '';
    }

    // Attach click events dynamically
    document.querySelectorAll('.doc-item').forEach(el => {
        el.addEventListener('click', () => openPopup(el.dataset.src));
    });
</script>

<?= $this->endSection() ?>
