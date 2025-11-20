{{-- resources/views/welcome.blade.php --}}

@extends('layouts.app')

{{-- Menentukan title halaman --}}
@section('title', 'Halaman Beranda') 

{{-- Menentukan content utama --}}
@section('content')
    
    {{-- Panggil Section/Component Hero Anda --}}
    @include('components.hero')
    @include('components.features')
    @include('components.client')

    {{-- Section-section lain akan di-include di bawah ini --}}
    {{-- @include('components.pricing') --}}
    
@endsection