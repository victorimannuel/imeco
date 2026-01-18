<?= $this->extend('admin/layout_admin') ?>

<?php 
    // Logika PHP untuk menentukan mode, action form, dan data
    $is_edit = isset($product['id']);
    $form_title = $is_edit ? 'Edit Produk: ' . esc($product['name']) : 'Tambah Produk Baru';
    $form_action = $is_edit ? base_url('product/update/' . $product['id']) : base_url('product/save');
    
    // Memastikan variabel ada untuk menghindari error
    $product = $product ?? [];
    $validation = $validation ?? service('validation');
?>

<?= $this->section('content') ?>
    
<main class="max-w-4xl mx-auto">
    
    <div class="mb-6">
        <a href="<?= base_url('product') ?>" class="text-[var(--primary)] hover:text-[var(--primary-hover)] font-medium underline">
            &larr; Kembali ke Daftar Produk
        </a>
    </div>
  
    <h1 class="text-3xl font-bold text-gray-800 mb-6"><?= $form_title ?></h1>
    
    <div class="bg-white shadow overflow-hidden sm:rounded-lg p-6">
        <form action="<?= $form_action ?>" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Produk <span class="text-red-500">*</span></label>
                <input type="text" name="name" id="name" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[var(--primary)] focus:ring-indigo-500 sm:text-sm p-2 border"
                    value="<?= old('name', $product['name'] ?? '') ?>" required>
                <?php if ($validation->hasError('name')) : ?>
                    <p class="text-sm text-red-500 mt-1"><?= $validation->getError('name') ?></p>
                <?php endif; ?>
            </div>
            
            <!--Description-->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="description" id="description" rows="4"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[var(--primary)] focus:ring-indigo-500 sm:text-sm p-2 border"><?= old('description', $product['description'] ?? '') ?></textarea>
                <?php if ($validation->hasError('description')) : ?>
                    <p class="text-sm text-red-500 mt-1"><?= $validation->getError('description') ?></p>
                <?php endif; ?>
            </div>
            
            <!--Specification-->
            <div class="mb-4">
                <label for="specification" class="block text-sm font-medium text-gray-700">Spesifikasi</label>
                <textarea name="specification" id="specification" rows="4"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[var(--primary)] focus:ring-indigo-500 sm:text-sm p-2 border"><?= old('specification', $product['specification'] ?? '') ?></textarea>
                <?php if ($validation->hasError('specification')) : ?>
                    <p class="text-sm text-red-500 mt-1"><?= $validation->getError('specification') ?></p>
                <?php endif; ?>
            </div>

            <div class="mb-6">
                <label for="image" class="block text-sm font-medium text-gray-700">Gambar Produk</label>
                
                <?php if ($is_edit && !empty($product['image'])) : ?>
                    <div class="mt-2 mb-2">
                        <p class="text-xs text-gray-500">Gambar saat ini:</p>
                        <img src="<?= base_url($product['image']) ?>" alt="Gambar produk saat ini" class="h-20 w-20 object-cover rounded-md border border-gray-200">
                        <input type="hidden" name="old_image" value="<?= esc($product['image']) ?>">
                    </div>
                <?php endif; ?>

                <input type="file" name="image" id="image" 
                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:ml-0 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[var(--primary)] file:text-[var(--primary-foreground)] hover:file:bg-[var(--primary-hover)]">
                <p class="text-xs text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengubah gambar.</p>

                <?php if ($validation->hasError('image')) : ?>
                    <p class="text-sm text-red-500 mt-1"><?= $validation->getError('image') ?></p>
                <?php endif; ?>
            </div>
            
            <div class="mb-6">
                <img id="imagePreview" 
                     class="hidden h-32 w-32 object-cover rounded-md border border-gray-200 mt-2" 
                     alt="Preview Gambar">
            </div>

            <div class="flex justify-end space-x-3 mt-6">
                <a href="<?= base_url('product') ?>" 
                    class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-lg text-gray-700 bg-[var(--secondary)] hover:bg-[var(--secondary-hover)] transition duration-150">
                    Batal
                </a>
                <!--<button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-[var(--primary)] hover:bg-[var(--primary-hover)] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150">-->
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-[var(--primary)] hover:bg-[var(--primary-hover)] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[var(--primary)] transition duration-150">
                    <?= $is_edit ? 'Simpan Perubahan' : 'Tambah Produk' ?>
                </button>
            </div>
        </form>
    </div>
    
</main>
    
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Autofocus cursor on product name field
        const input = document.getElementById("name");
        if (input) {
            input.focus();
            const val = input.value;
            input.setSelectionRange(val.length, val.length); // move cursor to end
        }
        
        const imageInput = document.querySelector('#image');
        const imagePreview = document.querySelector('#imagePreview');
    
        imageInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            } else {
                imagePreview.src = '';
                imagePreview.classList.add('hidden');
            }
        });
    });
</script>
<?= $this->endSection() ?>