<?php if (!empty($products)) : ?>
    <?php $no = 1; ?>
    <?php foreach ($products as $product) : ?>
        <tr data-id="<?= $product['id'] ?>" class="cursor-pointer hover:bg-[var(--hover-bg)]"
            onclick="window.location='<?= base_url('product/edit/' . $product['id']) ?>'">
            <!--Number-->
            <td class="px-6 py-4 whitespace-nowrap text-sm text-center font-medium"><?= $no ?></td>
            <!--Image-->
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden md:table-cell">
                <?php if (!empty($product['image'])) : ?>
                    <img src="<?= base_url($product['image']) ?>" 
                         alt="<?= esc($product['name']) ?>" 
                         class="h-16 w-16 object-cover rounded-md border border-gray-200">
                <?php else : ?>
                    <span class="text-xs text-gray-400">Tidak ada gambar</span>
                <?php endif; ?>
            </td>
            <!--Name-->
            <td class="px-6 py-4 text-sm md:text-base text-gray-900 break-words whitespace-normal">
                <?= esc($product['name']) ?>
            </td>
            <!--Description-->
            <td class="px-6 py-4 text-sm text-gray-900 max-w-xs hidden md:table-cell"> 
                <div class="overflow-y-auto max-h-16"> <?= nl2br(esc($product['description'])) ?> </div>
            </td>
            <!--Specification-->
            <td class="px-6 py-4 text-sm text-gray-900 max-w-xs hidden md:table-cell"> 
                <div class="overflow-y-auto max-h-16"> <?= nl2br(esc($product['specification'])) ?> </div>
            </td>
            <!--Button Delete-->
            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                <div class="flex justify-center space-x-3">
                    <a href="<?= base_url('product/delete/' . $product['id']) ?>" 
                       onclick="event.stopPropagation(); return confirm('Yakin ingin menghapus produk <?= esc($product['name']) ?>?')"
                       class="text-[var(--danger)] hover:text-[var(--danger-hover)]">
                        <!-- Trash icon SVG -->
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </td>
        </tr>
        <?php $no++; ?>
    <?php endforeach; ?>
<?php else : ?>
    <tr>
        <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center text-base text-gray-500">
            Belum ada data produk. Silakan tambahkan satu!
        </td>
    </tr>
<?php endif; ?>
