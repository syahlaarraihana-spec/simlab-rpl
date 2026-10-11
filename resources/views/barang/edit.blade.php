@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Ubah Barang</h1>

<form action="{{ route('barang.update', $barang) }}" method="POST" class="bg-white rounded-xl shadow p-5">
    @csrf
    @method('PUT')
    @include('barang._form')
    <div class="mt-5 flex gap-2">
        <button type="submit" class="bg-slate-800 text-white px-4 py-2 rounded-lg">Perbarui</button>
        <a href="{{ route('barang.index') }}" class="px-4 py-2 rounded-lg border">Batal</a>
    </div>
</form>
@endsection