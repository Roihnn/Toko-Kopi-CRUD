<x-app-layout>
    <div class="max-w-xl mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4">Edit Produk</h2>

        <form method="POST" action="{{ route('products.update', $product) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block">Nama Produk</label>
                <input type="text" name="nama" value="{{ old('nama', $product->nama) }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block">Kategori</label>
                <select name="kategori" class="w-full border rounded px-3 py-2" required>
                    <option value="makanan" {{ $product->kategori == 'makanan' ? 'selected' : '' }}>Makanan</option>
                    <option value="minuman" {{ $product->kategori == 'minuman' ? 'selected' : '' }}>Minuman</option>
                    <option value="cemilan" {{ $product->kategori == 'cemilan' ? 'selected' : '' }}>Cemilan</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block">Stok</label>
                <input type="number" name="stok" value="{{ old('stok', $product->stok) }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block">Harga</label>
                <input type="number" name="harga" value="{{ old('harga', $product->harga) }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition-all">
                Update Produk
            </button>
        </form>
    </div>
</x-app-layout>
