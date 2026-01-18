<?= $this->extend('admin/layout_admin') ?>

<?= $this->section('content') ?>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    
    <div class="bg-white p-5 rounded-xl shadow-lg border-b-4 border-indigo-500 hover:shadow-xl transition duration-300">
        <p class="text-sm font-semibold text-gray-500 uppercase">Total Produk</p>
        <p class="text-4xl font-extrabold text-gray-900 mt-2">150</p>
    </div>
    
    <div class="bg-white p-5 rounded-xl shadow-lg border-b-4 border-green-500 hover:shadow-xl transition duration-300">
        <p class="text-sm font-semibold text-gray-500 uppercase">Total Pengguna</p>
        <p class="text-4xl font-extrabold text-gray-900 mt-2">3,120</p>
    </div>
    
    <div class="bg-white p-5 rounded-xl shadow-lg border-b-4 border-yellow-500 hover:shadow-xl transition duration-300">
        <p class="text-sm font-semibold text-gray-500 uppercase">Pesanan Baru</p>
        <p class="text-4xl font-extrabold text-gray-900 mt-2">12</p>
    </div>
    
    <div class="bg-white p-5 rounded-xl shadow-lg border-b-4 border-blue-500 hover:shadow-xl transition duration-300">
        <p class="text-sm font-semibold text-gray-500 uppercase">Pendapatan (Bln)</p>
        <p class="text-xl font-extrabold text-gray-900 mt-2">Rp 25.500.000</p>
    </div>
</div>

<div class="bg-white p-6 rounded-xl shadow-lg">
    <h4 class="text-xl font-semibold text-gray-800 mb-4">5 Produk Terbaru</h4>
    
    <p class="mb-4">
        <a href="<?= base_url('admin/products') ?>" class="text-indigo-600 hover:text-indigo-800 font-medium">Lihat Semua Produk &rarr;</a>
    </p>
    
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Produk</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dibuat Pada</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Sepatu Lari X10</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">25 Sept 2025</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Kemeja Flanel Merah</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">24 Sept 2025</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>