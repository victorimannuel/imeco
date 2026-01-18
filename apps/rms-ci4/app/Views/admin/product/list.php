<?= $this->extend('admin/layout_admin') ?>

<?php 
    // // Data yang dilewatkan ke layout untuk mengatur Judul dan status aktif Sidebar
    // $data_to_layout = [
    //     'title' => 'Produk'
    // ];
    
    // // Memuat data ini ke dalam layout
    // $this->setData($data_to_layout);
?>

<?= $this->section('content') ?>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<!-- Flash Messages -->
<?php if (session()->getFlashdata('message')): ?>
    <script>
        showToast("<?= addslashes(session()->getFlashdata('message')) ?>", 'success');
    </script>
<?php endif; ?>
<?php if (session()->getFlashdata('error')) : ?>
    <script>
        showToast("<?= addslashes(session()->getFlashdata('message')) ?>", 'error');
    </script>
<?php endif; ?>

<!-- 1️⃣ Search Box -->
<form method="get" action="<?= base_url('product') ?>" class="mb-4 flex">
    <input type="text" name="query"
           placeholder="Cari produk..." 
           class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-[var(--primary)]"/>
           <!--class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"/>-->
</form>

<!-- 2️⃣ Tombol Tambah Produk Baru -->
<a href="<?= base_url('product/new') ?>" 
    class="inline-flex items-center ml-1 px-4 py-2 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-[var(--primary)] hover:bg-[var(--primary-hover)] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[var(--primary)] mb-6 transition duration-150">
    + Tambah Produk Baru
</a>

<!-- 3️⃣ Tabel Produk -->
<div class="shadow border-b border-gray-200 sm:rounded-lg">
    <table class="min-w-full table-auto divide-y divide-gray-200 text-xs md:text-sm">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="w-1/12 px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">No.</th>
                <th scope="col" class="w-1/12 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">Gambar</th>
                <th scope="col" class="w-3/12 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                <th scope="col" class="w-3/12 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">Deskripsi</th>
                <th scope="col" class="w-3/12 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">Spesifikasi</th>
                <th scope="col" class="w-1/12 px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
            </tr>
        </thead>
        <tbody id="products-tbody" class="bg-white divide-y divide-gray-200">
            <?= $this->include('admin/product/table_rows') ?>
        </tbody>
    </table>
</div>

<!-- Toast Container -->
<div id="toast-container" class="fixed top-5 right-5 space-y-2 z-50"></div>

<script>
function showToast(message, type = 'success', duration = 3000) {
    const container = document.getElementById('toast-container');
    const colors = {
        success: 'bg-green-500 text-white',
        error: 'bg-red-500 text-white'
    };
    const toast = document.createElement('div');
    toast.className = `px-4 py-2 rounded shadow ${colors[type]} animate-slide-in`;
    toast.textContent = message;

    container.appendChild(toast);

    setTimeout(() => {
        toast.classList.add('opacity-0');
        setTimeout(() => toast.remove(), 500);
    }, duration);
}

// Tampilkan flash message CI4
<?php if (session()->getFlashdata('message')): ?>
    showToast("<?= addslashes(session()->getFlashdata('message')) ?>", 'success');
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    showToast("<?= addslashes(session()->getFlashdata('error')) ?>", 'error');
<?php endif; ?>
</script>

<style>
@keyframes slide-in {
    0% { transform: translateX(100%); opacity: 0; }
    100% { transform: translateX(0); opacity: 1; }
}
.animate-slide-in {
    animation: slide-in 0.3s ease-out forwards;
    transition: opacity 0.5s;
}
</style>


<!-- 4️⃣ Inline JS langsung di file ini -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('input[name="query"]');
    const tableBody = document.querySelector('tbody');

    if (!searchInput || !tableBody) return;

    let timeout = null;

    const searchUrl = '<?= site_url('products/search') ?>'; // ✅ PHP dieksekusi

    searchInput.addEventListener('input', function() {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            fetch(searchUrl + '?query=' + encodeURIComponent(this.value))
                .then(res => res.text())
                .then(html => {
                    tableBody.innerHTML = html;
                });
        }, 300);
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tbody = document.getElementById('products-tbody');

    new Sortable(tbody, {
        animation: 150,
        handle: 'tr', // entire row is draggable
        onEnd(evt) {
            const order = [...tbody.querySelectorAll('tr')].map((row, index) => ({
                id: row.dataset.id,
                sequence: index + 1
            }));
        
            fetch('products/reorder', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(order)
            });
        }
    });
});
</script>

<?= $this->endSection() ?>