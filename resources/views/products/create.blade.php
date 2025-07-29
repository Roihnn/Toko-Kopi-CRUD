<x-app-layout>
    <div class="max-w-xl mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4">Tambah Produk</h2>

        <form method="POST" action="{{ route('products.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block font-semibold">Nama Produk</label>
                <input type="text" name="nama" value="{{ old('nama') }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold">Kategori</label>
                <select name="kategori" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                    <option value="cemilan">Cemilan</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block font-semibold">Stok</label>
                <input type="number" name="stok" value="{{ old('stok') }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold">Harga</label>
                <input type="number" name="harga" value="{{ old('harga') }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold px-5 py-2 rounded shadow transition duration-300 ease-in-out">
                Simpan Produk
            </button>
        </form>
    </div>
</x-app-layout>
