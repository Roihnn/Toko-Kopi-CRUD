<x-app-layout>
    <div class="max-w-7xl mx-auto p-5">
        <div class="flex justify-between items-center mb-6">
        
            <h3 class="text-3xl font-bold ">Daftar Produk ToPi</h3>
            <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700 transition-all duration-300">
                Tambah Produk
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">{{ session('success') }}</div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($products as $product)
            <div class="p-4 border rounded-lg shadow hover:scale-105 transition-transform duration-300 bg-white">
                <h3 class="text-xl font-semibold">{{ $product->nama }}</h3>
                <p class="text-gray-600 capitalize">Kategori: {{ $product->kategori }}</p>
                <p class="text-gray-600">Stok: {{ $product->stok }}</p>
                <p class="text-gray-600">Harga: Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                <p class="text-sm text-gray-400">Dibuat: {{ $product->created_at->diffForHumans() }}</p>

                <div class="flex gap-2 mt-4">
                    <a href="{{ route('products.edit', $product) }}" class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin ingin menghapus?')" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Hapus</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
