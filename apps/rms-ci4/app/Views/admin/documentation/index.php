<?= $this->extend('admin/layout_admin') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashdata('success')): ?>
    <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<form id="gallery-form" action="<?= base_url('documentation/upload') ?>" method="post" enctype="multipart/form-data">
    <!--Drag & Drop images/videos here or click to select-->
    <div id="drop-zone" class="border-4 border-dashed border-gray-300 rounded-lg p-10 text-center cursor-pointer">
        Drag & Drop gambar/video di sini atau klik untuk memilih
        <input type="file" name="file[]" id="file-input" multiple accept="image/*,video/*" class="hidden">
    </div>
    <div id="preview" class="grid grid-cols-3 gap-4 mt-4"></div>
    <button id="upload-btn" type="submit" class="mt-4 px-6 py-2 bg-[var(--primary)] hover:bg-[var(--primary-hover)] text-white rounded">Upload</button>
</form>

<h2 class="text-xl font-semibold mt-10 mb-4">Dokumentasi</h2>
<div id="gallery" class="grid grid-cols-3 gap-4">
    <?php foreach ($documentation as $item): ?>
        <div class="relative group cursor-grab" data-id="<?= $item['id'] ?>">
            <?php if ($item['type'] == 'image'): ?>
                <img src="<?= base_url($item['file_path']) ?>" class="w-full h-32 object-cover rounded" alt="image">
            <?php else: ?>
                <video src="<?= base_url($item['file_path']) ?>" controls class="w-full h-32 object-cover rounded"></video>
            <?php endif; ?>

            <!-- Delete button -->
            <form method="post" action="<?= base_url('documentation/delete/' . $item['id']) ?>" class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity">
                <?= csrf_field() ?>
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus file ini?')" class="bg-[var(--danger)] bg-[var(--danger-hover)] text-white px-2 py-1 rounded">
                        Delete
                    </button>
            </form>
        </div>
    <?php endforeach; ?>
</div>

<!-- Include SortableJS -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

<script>
    const form = document.getElementById('gallery-form');
    const uploadBtn = document.getElementById('upload-btn');
    const dropZone = document.getElementById('drop-zone');
    const fileInput = document.getElementById('file-input');
    const preview = document.getElementById('preview');
    const gallery = document.getElementById('gallery');
    
    form.addEventListener('submit', function(e) {
        if (!fileInput.files.length) {
            e.preventDefault();
            alert("Silakan pilih minimal 1 file untuk diupload!");
        }
    });
    
    dropZone.addEventListener('click', () => fileInput.click());
    
    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('border-blue-500');
    });
    
    dropZone.addEventListener('dragleave', (e) => {
        e.preventDefault();
        dropZone.classList.remove('border-blue-500');
    });
    
    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropZone.classList.remove('border-blue-500');
        handleFiles(e.dataTransfer.files);
    });
    
    fileInput.addEventListener('change', (e) => handleFiles(e.target.files));
    
    function handleFiles(files) {
        const dataTransfer = new DataTransfer();
        for (let file of files) {
            dataTransfer.items.add(file);
        }
        fileInput.files = dataTransfer.files;
    
        preview.innerHTML = '';
        for (let file of files) {
            const reader = new FileReader();
            reader.onload = (e) => {
                const url = e.target.result;
                let el;
                if (file.type.startsWith('image/')) {
                    el = document.createElement('img');
                    el.src = url;
                    el.className = "w-full h-32 object-cover rounded";
                } else if (file.type.startsWith('video/')) {
                    el = document.createElement('video');
                    el.src = url;
                    el.controls = true;
                    el.className = "w-full h-32 object-cover rounded";
                }
                preview.appendChild(el);
            }
            reader.readAsDataURL(file);
        }
    }
    
    // Initialize Sortable
    new Sortable(gallery, {
        animation: 150,
        ghostClass: 'opacity-50',
        onEnd: function (evt) {
            const order = [];
            gallery.querySelectorAll('.group').forEach((el, index) => {
                order.push({
                    id: el.dataset.id,
                    position: index + 1
                });
            });
    
            // Send new order to server
            fetch('<?= base_url("documentation/reorder") ?>', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                body: JSON.stringify(order)
            }).then(res => res.json()).then(res => {
                console.log('Reordered', res);
            }).catch(err => console.error(err));
        }
    });
</script>

<?= $this->endSection() ?>