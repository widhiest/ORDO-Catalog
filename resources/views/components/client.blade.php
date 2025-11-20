@php
// DAFTAR NAMA FILE LOGO ANDA:
$clientLogos = [
    'biznet.png',
    'hutomo.png',
    'azarine.png',
    'darmo.png',
    'dahlia.png',
    'seagull.png',
    'ardiles.png',
    'mamabear.png',
    'miniletics.png',
    'tirta.png',
];
@endphp

<section class="clients-section">
    <div class="container">
        
        {{-- clients-logo-grid akan di-styling dengan CSS Grid: repeat(5, 1fr) --}}
        <div class="clients-logo-grid">
            
            {{-- Loop melalui array nama file yang berbeda --}}
            @foreach ($clientLogos as $logoFile)
                <div class="client-logo-item">
                    {{-- Menggunakan nama file spesifik dari array --}}
                    <img src="{{ asset('assets/images/' . $logoFile) }}" alt="Client Logo">
                </div>
            @endforeach

        </div>
        
    </div>
</section>