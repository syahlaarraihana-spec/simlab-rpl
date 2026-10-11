@extends('layouts.app')

@section('content')
<div class="flex items-center justify-between mb-4">
    <h1 class="text-2xl font-bold">Data Inventaris</h1>
    <a href="{{ route('barang.create') }}"
       class="bg-slate-800 text-white px-4 py-2 rounded-lg text-sm hover:bg-slate-700">
        + Tambah Barang
    </a>
</div>

<div class="bg-white rounded-xl shadow">
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-50 text-left text-gray-600">
                <tr>
                    <th class="px-4 py-3">Kode</th>
                    <th class="px-4 py-3">Nama</th>
                    <th class="px-4 py-3">Kategori</th>
                    <th class="px-4 py-3">Stok</th>
                    <th class="px-4 py-3">Kondisi</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @forelse ($barangs as $barang)
                    <tr>
                        <td class="px-4 py-3 whitespace-nowrap">{{ $barang->kode_barang }}</td>
                        <td class="px-4 py-3">{{ $barang->nama_barang }}</td>
                        <td class="px-4 py-3">{{ $barang->kategori->nama_kategori }}</td>
                        <td class="px-4 py-3">{{ $barang->stok }}</td>
                        <td class="px-4 py-3 whitespace-nowrap">{{ $barang->kondisi }}</td>
                        <td class="px-4 py-3">
                            @php
                                $badge = match ($barang->status) {
                                    'Tersedia'    => 'bg-emerald-100 text-emerald-800',
                                    'Dipinjam'    => 'bg-rose-100 text-rose-800',
                                    'Maintenance' => 'bg-amber-100 text-amber-800',
                                };
                            @endphp
                            <span class="px-2 py-1 rounded-full text-xs font-medium {{ $badge }}">
                                {{ $barang->status }}
                            </span>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <a href="{{ route('barang.edit', $barang) }}"
                               class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('barang.destroy', $barang) }}" method="POST" class="inline"
                                  onsubmit="return confirm('Yakin hapus {{ $barang->nama_barang }}?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-rose-600 hover:underline ml-2">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-6 text-center text-gray-500">
                            Belum ada data inventaris.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection