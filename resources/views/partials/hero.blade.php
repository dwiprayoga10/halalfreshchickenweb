<section id="home"
    class="relative overflow-hidden text-white
           bg-gradient-to-br
           from-[#1B8E4B] via-[#1F8F4F] to-[#E9D84A]">

    <div class="relative max-w-6xl mx-auto px-6 lg:px-10 pt-24 pb-28">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

            <!-- ================= LEFT CONTENT ================= -->
            <div class="flex flex-col gap-5 text-center lg:text-left">

                <span
                    class="mx-auto lg:mx-0 w-fit
                           inline-flex items-center
                           bg-white/15
                           px-4 py-1.5 rounded-full
                           text-xs font-medium tracking-wide">
                    Jelas Halalnya · Jelas Higienisnya
                </span>

                <h1
                    class="font-extrabold leading-tight
                           text-3xl sm:text-4xl md:text-[42px] xl:text-[48px]">
                    Halal Fresh Chicken
                    <span class="block text-[#F7E21B]">
                        Ayam Segar & Ungkep Berkualitas
                    </span>
                </h1>

                <p
                    class="max-w-lg mx-auto lg:mx-0
                           text-sm sm:text-base
                           text-white/90 leading-relaxed">
                    Penyedia ayam potong segar dan ayam ungkep siap goreng
                    yang diproses sesuai syariat dan ditangani secara higienis.
                </p>

                <!-- ================= CTA ================= -->
                <div
                    class="flex flex-col sm:flex-row gap-4
                           justify-center lg:justify-start mt-3">

                    <!-- PESAN SEKARANG (WA AUTO TEXT) -->
                    <a
                        href="#"
                        id="btnPesan"
                        class="inline-flex items-center justify-center gap-2
                               bg-[#F7E21B] text-[#1F2933]
                               font-semibold px-8 py-4 rounded-xl
                               shadow-xl shadow-black/20
                               hover:brightness-95
                               active:scale-95 transition-all">
                        Pesan Sekarang
                    </a>

                    <!-- LIHAT PRODUK (SCROLL) -->
                    <a
                        href="#produk"
                        class="inline-flex items-center justify-center
                               px-8 py-4 rounded-xl
                               border border-white/40
                               text-white font-medium
                               hover:bg-white/10
                               active:scale-95 transition-all">
                        Lihat Produk
                    </a>
                </div>
            </div>

            <!-- ================= RIGHT : HERO IMAGE ================= -->
            <div class="relative flex justify-center items-center">

                <div class="hero-wrapper">
                    <img id="heroImage"
                         src="{{ asset('images/1.png') }}"
                         alt="Produk Unggulan"
                         class="hero-img">
                </div>

                <div class="absolute -bottom-12 text-center">
                    <div id="heroCaption" class="text-sm font-semibold">
                        Ayam Segar
                    </div>
                    <div id="heroSub" class="text-xs text-white/70 mt-0.5">
                        Fresh Harian
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ================= STYLE ================= -->
    <style>
        .hero-wrapper {
            width: clamp(260px, 32vw, 360px);
            max-width: 90vw;
        }

        .hero-img {
            width: 100%;
            height: auto;
            display: block;
            background: transparent;
            filter: drop-shadow(0 20px 38px rgba(0,0,0,.32));
            transition: transform 0.9s cubic-bezier(.4,0,.2,1),
                        opacity 0.4s ease;
            transform: translateX(0);
            opacity: 1;
        }

        .slide-out-right {
            transform: translateX(130%);
            opacity: 0;
        }

        .hidden-left {
            transform: translateX(-130%);
            opacity: 0;
        }

        .slide-in {
            transform: translateX(0);
            opacity: 1;
        }
    </style>

    <!-- ================= SCRIPT ================= -->
    <script>
        const heroImage   = document.getElementById('heroImage');
        const heroCaption = document.getElementById('heroCaption');
        const heroSub     = document.getElementById('heroSub');
        const btnPesan    = document.getElementById('btnPesan');

        const phoneNumber = '6285199606037'; // GANTI JIKA PERLU

        const slides = [
            {
                img: "{{ asset('images/1.png') }}",
                caption: "Ayam Segar",
                sub: "Fresh Harian"
            },
            {
                img: "{{ asset('images/3.png') }}",
                caption: "Ayam Ungkep",
                sub: "Siap Goreng"
            },
            {
                img: "{{ asset('images/2.png') }}",
                caption: "Paket Nasi Box",
                sub: "Untuk Acara"
            }
        ];

        let index = 0;
        let isAnimating = false;

        /* ================= SLIDER ================= */
        function changeSlide() {
            if (isAnimating) return;
            isAnimating = true;

            heroImage.classList.add('slide-out-right');

            setTimeout(() => {
                index = (index + 1) % slides.length;

                heroImage.src = slides[index].img;
                heroCaption.textContent = slides[index].caption;
                heroSub.textContent = slides[index].sub;

                heroImage.classList.remove('slide-out-right');
                heroImage.classList.add('hidden-left');

                requestAnimationFrame(() => {
                    heroImage.classList.remove('hidden-left');
                    heroImage.classList.add('slide-in');

                    setTimeout(() => {
                        heroImage.classList.remove('slide-in');
                        isAnimating = false;
                    }, 900);
                });

            }, 900);
        }

        setInterval(changeSlide, 5000);

        /* ================= WA AUTO TEXT ================= */
        btnPesan.addEventListener('click', function (e) {
            e.preventDefault();

            const message = `Halo admin,
Saya ingin menanyakan informasi produk dan pemesanan.
Terima kasih.`;

            const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            window.open(url, '_blank');
        });
    </script>

</section>