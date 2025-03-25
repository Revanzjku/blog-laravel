<section class="py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Tambah Artikel Baru</h2>
            
            <form id="articleForm">
                <!-- Judul Artikel -->
                <div class="mb-6">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul Artikel</label>
                    <input type="text" id="title" name="title" required 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Kategori -->
                <div class="mb-6">
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                    <select id="category" name="category" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="teknologi">Teknologi</option>
                        <option value="produktivitas">Produktivitas</option>
                        <option value="kesehatan">Kesehatan</option>
                        <option value="pengembangan-diri">Pengembangan Diri</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                
                <!-- Gambar -->
                <div class="mb-6">
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Gambar Utama</label>
                    <input type="file" id="image" name="image" accept="image/*"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <p class="mt-1 text-sm text-gray-500">Format: JPG, PNG (Maksimal 2MB)</p>
                </div>
                
                <!-- Konten Artikel -->
                <div class="mb-6">
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Konten Artikel</label>
                    <textarea id="content" name="content" rows="10" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                
                <!-- Tombol Submit -->
                <div class="flex justify-end space-x-4">
                    <a href="index.html" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-2 rounded-md font-medium">
                        Batal
                    </a>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md font-medium">
                        Simpan Artikel
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
