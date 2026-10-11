@php $b = $barang ?? null; @endphp

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
        <label class="block text-sm font-medium mb-1">Kode Barang</label>
        <input type="text" name="kode_barang" value="{{ old('kode_barang', $b?->kode_barang) }}"
            class="w-full border rounded-lg px-3 py-2" placeholder="LAB-RPL-001">
        @error('kode_barang')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-medium mb-1">Nama Barang</label>
        <input type="text" name="nama_barang" value="{{ old('nama_barang', $b?->nama_barang) }}"
            class="w-full border rounded-lg px-3 py-2">
        @error('nama_barang')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-medium mb-1">Kategori</label>
        <select name="kategori_id" class="w-full border rounded-lg px-3 py-2">
            <option value="">-- Pilih Kategori --</option>
            @foreach ($kategoris as $k)
                <option value="{{ $k->id }}" {{ old('kategori_id', $b?->kategori_id) == $k->id ? 'selected' : '' }}>
                    {{ $k->nama_kategori }}
                </option>
            @endforeach
        </select>
        @error('kategori_id')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-medium mb-1">Stok</label>
        <input type="number" name="stok" min="0" value="{{ old('stok', $b?->stok ?? 0) }}"
            class="w-full border rounded-lg px-3 py-2">
        @error('stok')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-medium mb-1">Kondisi</label>
        <select name="kondisi" class="w-full border rounded-lg px-3 py-2">
            @foreach (['Baik', 'Rusak Ringan', 'Rusak Berat'] as $opt)
                <option value="{{ $opt }}" {{ old('kondisi', $b?->kondisi ?? 'Baik') == $opt ? 'selected' : '' }}>
                    {{ $opt }}
                </option>
            @endforeach
        </select>
        @error('kondisi')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-medium mb-1">Status</label>
        <select name="status" class="w-full border rounded-lg px-3 py-2">
            @foreach (['Tersedia', 'Dipinjam', 'Maintenance'] as $opt)
                <option value="{{ $opt }}" {{ old('status', $b?->status ?? 'Tersedia') == $opt ? 'selected' : '' }}>
                    {{ $opt }}
                </option>
            @endforeach
        </select>
        @error('status')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="md:col-span-2">
        <label class="block text-sm font-medium mb-1">Spesifikasi (opsional)</label>
        <textarea name="spesifikasi" rows="3"
            class="w-full border rounded-lg px-3 py-2">{{ old('spesifikasi', $b?->spesifikasi) }}</textarea>
        @error('spesifikasi')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>
</div>