{{-- resources/views/components/features.blade.php --}}

<section class="features-section">

    <div class="showcase-group-wrapper">
        <div class="showcase-group-3">

            <div class="showcase-mockup-row">
                <div class="mockup-item mockup-1"><img src="{{ asset('assets/images/mockup1.svg') }}" alt="Tablet in Hand Mockup"></div>
                <div class="mockup-item mockup-2"><img src="{{ asset('assets/images/mockup2.svg') }}" alt="Central Screen Mockup"></div>
                <div class="mockup-item mockup-3"><img src="{{ asset('assets/images/mockup3.svg') }}" alt="Keyboard With Tablet Mockup"></div>
            </div>
            
            <div class="floating-item item-left"><img src="{{ asset('assets/images/mockup-popup1.svg') }}" alt="Floating Detail Left"></div>
            <div class="floating-item item-right"><img src="{{ asset('assets/images/mockup-popup2.svg') }}" alt="Floating Detail Right"></div>

        </div>
    </div>

    <div class="container">
        
        {{-- Frame 17918: 3 CARD SAJA --}}
        <div class="features-grid">
            
            {{-- Card 1: Search Category --}}
            <div class="service-card">
                <div class="card-icon">
                    <img src="assets/images/search-category.svg" alt="">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Search Category</h3>
                    <p class="card-description">Temukan Produk Favorit Anda dengan Mudah Menggunakan Search dan Filter!</p>
                </div>
            </div>

            {{-- Card 2: Product Detail --}}
            <div class="service-card">
                <div class="card-icon">
                     <img src="assets/images/product-detail.svg" alt="">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Product Detail</h3>
                    <p class="card-description">Jelajahi Semua Varian Produk Lengkap dengan Gambar dan Deskripsi!</p>
                </div>
            </div>

            {{-- Card 3: Check Out --}}
            <div class="service-card">
                <div class="card-icon">
                    <img src="assets/images/check-out.svg" alt="">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Check Out</h3>
                    <p class="card-description">Tentukan Bagaimana Cara Check Out Produk Sesuai dengan Pilihan Anda!</p>
                </div>
            </div>

        </div>
        
    </div>
</section>