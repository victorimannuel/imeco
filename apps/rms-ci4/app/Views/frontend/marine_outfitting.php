<?= $this->extend('frontend/layout_public') ?>
<?= $this->section('content') ?>

<!-- Products Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 via-white to-blue-50 relative overflow-hidden mt-10">
    <div class="container mx-auto px-4 relative">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16 fade-in">
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Our Products</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6 mt-4">
                    Marine <span class="bg-gradient-to-r from-red-600 to-blue-600 bg-clip-text text-transparent">Outfitting Products</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    High-quality marine equipment and supplies for all your maritime needs
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php foreach ($products as $p): ?>
                    <div class="product-card bg-white shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg overflow-hidden group relative cursor-pointer"
                        data-id="<?= $p['id'] ?>"
                         data-title="<?= esc($p['name']) ?>"
                         data-img="<?= base_url($p['image']) ?>"
                         data-desc="<?= esc($p['description']) ?>"
                         data-spec="<?= esc($p['specification']) ?>"
                         data-price="<?= esc($p['price'] ?? '') ?>"
                         data-click-count="<?= esc($p['click_count'] ?? '') ?>">

                        <div class="aspect-square bg-gray-100 flex items-center justify-center p-4 relative">
                            <img src="<?= base_url($p['image']) ?>" alt="<?= esc($p['name']) ?>" loading="lazy" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-3 group-hover:text-<?= $p['color'] ?? 'blue' ?>-600 transition-colors">
                                <?= esc($p['name']) ?>
                            </h3>
                            <div class="space-y-2 text-sm text-gray-600 mb-4">
                                <?php foreach (explode("\n", $p['specification']) as $spec): ?>
                                    <p>• <?= esc(trim($spec)) ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Call to Action -->
            <div class="mt-16 text-center fade-in delay-700">
                <div class="bg-gradient-to-r from-blue-50 via-white to-red-50 border-0 shadow-xl rounded-lg p-12">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-16 w-16 mx-auto mb-6 text-blue-600 lucide lucide-shopping-cart-icon lucide-shopping-cart"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
                    <h3 class="text-3xl font-bold mb-6 text-gray-800">Need Custom Solutions?</h3>
                    <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                        We provide custom marine outfitting solutions tailored to your specific requirements. 
                        Contact us for personalized quotes and technical specifications.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a class="bg-gradient-to-r from-red-600 to-blue-800 hover:from-red-700 hover:to-blue-700 text-white px-8 py-4 rounded-lg transition-all duration-300 flex items-center justify-center font-medium text-lg" href="https://wa.me/6281364588546" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-5 w-5 lucide lucide-phone-icon lucide-phone"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                            Contact Us Now
                        </a>
                        <a class="bg-white border-2 border-gray-300 hover:border-blue-500 text-gray-700 hover:text-blue-600 px-8 py-4 rounded-lg transition-all duration-300 flex items-center justify-center font-medium text-lg" href="contact.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-5 w-5 lucide lucide-mail-icon lucide-mail"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
                            Send Inquiry
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Modal -->
<div id="product-modal" class="fixed inset-0 z-[60] hidden">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/60 flex items-center justify-center z-0" data-close="overlay"></div>
    
    <!-- Modal Box -->
    <div class="absolute w-[95%] max-w-4xl bg-white rounded-2xl shadow-2xl overflow-hidden 
                top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 relative z-[50]">
        
        <!-- Tombol X di paling atas -->
        <button class="absolute top-3 right-3 z-[70] p-2 bg-white/80 backdrop-blur-sm 
                       rounded-full shadow-md hover:bg-red-500 hover:text-white 
                       transition-all duration-300" aria-label="Close" data-close="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" class="lucide lucide-x">
                <path d="M18 6 6 18"/>
                <path d="m6 6 12 12"/>
            </svg>
        </button>

        <!-- Modal Content -->
        <div class="grid md:grid-cols-2 gap-0 h-full relative z-[40]">
            <div class="bg-gray-100 p-4 flex items-center justify-center">
                <img id="modal-image" src="" alt="Product image" class="max-h-96 md:max-h-[28rem] object-contain">
            </div>
            <div class="p-6 relative">
                <h3 id="modal-title" class="text-2xl font-bold text-gray-800 mb-3"></h3>
                <p id="modal-desc" class="text-gray-600 mb-4"></p>
                <ul id="modal-specs" class="list-disc list-inside text-gray-700 space-y-1 mb-6"></ul>
                <div class="text-gray-600 mb-4">
                    <span>Dilihat sebanyak: </span><span id="modal-click-count"></span><span> kali</span>
                </div>
                <div class="absolute right-6 bottom-6 text-right">
                    <div id="modal-price" class="text-sm text-gray-500 mb-2"></div>
                    <a id="modal-call" href="https://wa.me/6281364588546" target="_blank"
                       class="inline-flex bg-gradient-to-r from-orange-500 to-orange-600 
                              hover:from-orange-600 hover:to-orange-700 text-white px-5 py-3 
                              rounded-lg transition-all duration-300 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round"
                             class="mr-2 h-5 w-5 lucide lucide-phone">
                            <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/>
                        </svg>
                        CALL
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Script -->
<script>
(function(){
    const qs = (sel, root) => (root||document).querySelector(sel);
    const qsa = (sel, root) => Array.from((root||document).querySelectorAll(sel));

    const modal = qs('#product-modal');
    const imgEl = qs('#modal-image');
    const titleEl = qs('#modal-title');
    const descEl = qs('#modal-desc');
    const specsEl = qs('#modal-specs');
    const callEl = qs('#modal-call');
    const priceEl = qs('#modal-price');
    const clickCountEl = qs('#modal-click-count');

    function openModal(data){
        titleEl.textContent = data.title || '';
        descEl.textContent = data.desc || '';
        imgEl.src = data.img || '';
        imgEl.alt = data.title || 'Product image';
        specsEl.innerHTML = '';
        (data.specs || []).forEach(item => {
            const li = document.createElement('li');
            li.textContent = item;
            specsEl.appendChild(li);
        });
        const waText = encodeURIComponent('Hi, I am interested in ' + (data.title || 'your product'));
        callEl.href = 'https://wa.me/6281364588546?text=' + waText;
        priceEl.textContent = data.price ? ('Price: ' + data.price) : '';
        clickCountEl.textContent = data.clickCount || 0;
        modal.classList.remove('hidden');
        if (window.lucide) window.lucide.createIcons();
        document.body.style.overflow = 'hidden';
    }

    function closeModal(){
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    }

    // Open modal on product click
    qsa('.product-card').forEach(card => {
        card.addEventListener('click', () => {
            const specs = (card.getAttribute('data-spec') || '').split(/\r?\n/).filter(Boolean);
            const productId = card.dataset.id;

            // Increment click locally first
            let clickCount = parseInt(card.dataset.clickCount || 0, 10) + 1;
            card.dataset.clickCount = clickCount;

            // Open modal immediately
            openModal({
                title: card.getAttribute('data-title'),
                img: card.getAttribute('data-img'),
                desc: card.getAttribute('data-desc'),
                specs: specs,
                price: card.getAttribute('data-price'),
                clickCount: clickCount
            });

            // Update server asynchronously
            fetch(`/product/click`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                body: JSON.stringify({ id: productId })
            })
            .then(res => res.json())
            .then(data => {
                // Sync with server value in case of race conditions
                card.dataset.clickCount = data.click_count;
                clickCountEl.textContent = data.click_count;
            })
            .catch(err => console.error(err));
        });
    });


    // Close modal on button or overlay click
    qsa('[data-close]').forEach(el => el.addEventListener('click', closeModal));
    modal.addEventListener('click', e => {
        if (e.target && e.target.getAttribute('data-close') === 'overlay') closeModal();
    });

    // Close modal on Escape key
    document.addEventListener('keydown', e => { if(e.key === 'Escape') closeModal(); });
})();
</script>

<?= $this->endSection() ?>
