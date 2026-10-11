@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Dashboard</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="bg-white rounded-xl shadow p-5">
        <p class="text-sm text-gray-500">Total Aset</p>
        <p class="text-3xl font-bold">{{ $totalAset }}</p>
    </div>
    <div class="bg-white rounded-xl shadow p-5">
        <p class="text-sm text-gray-500">Unit Tersedia</p>
        <p class="text-3xl font-bold text-emerald-600">{{ $tersedia }}</p>
    </div>
    <div class="bg-white rounded-xl shadow p-5">
        <p class="text-sm text-gray-500">Dipinjam / Maintenance</p>
        <p class="text-3xl font-bold text-rose-600">{{ $dipinjam + $maintenance }}</p>
    </div>
</div>
@endsection