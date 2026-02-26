<section id="produk"
    class="relative bg-white px-5 pt-14 pb-20 overflow-hidden">

    <div class="relative max-w-6xl mx-auto">

        {{-- ================= TITLE ================= --}}
        <div class="text-center mb-10">
            <p class="text-[11px] tracking-widest text-[#1B8E4B] font-medium uppercase">
                Produk & Layanan
            </p>

            <h2 class="mt-2 text-2xl md:text-3xl font-extrabold text-[#146C43]">
                Pilihan Produk Unggulan Kami
            </h2>

            <p class="mt-3 text-sm text-gray-500 max-w-md mx-auto">
                Produk segar dan siap olah, diproses higienis dan halal.
            </p>
        </div>

        {{-- ================= GRID PRODUK ================= --}}
        <div
            class="flex gap-6 overflow-x-auto snap-x snap-mandatory
                   lg:grid lg:grid-cols-3 lg:gap-6 lg:overflow-visible
                   scrollbar-hide">

            {{-- ================= ITEM 1 ================= --}}
            <div
                class="min-w-[85%] sm:min-w-[60%] lg:min-w-0
                       snap-center rounded-3xl bg-white
                       border border-[#1B8E4B]/15
                       shadow-[0_18px_50px_rgba(0,0,0,0.08)]
                       overflow-hidden transition
                       md:hover:-translate-y-1 md:hover:shadow-xl">

                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/hero-ayam-segar.jpg') }}"
                         alt="Ayam Potong Segar"
                         class="w-full h-full object-cover transition-transform duration-500 md:hover:scale-105">
                </div>

                <div class="p-6 text-center">
                    <h3 class="text-lg font-semibold text-[#1F2933]">
                        Ayam Potong Segar
                    </h3>

                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">
                        Diproses setiap hari, segar, higienis, dan siap diolah untuk berbagai kebutuhan.
                    </p>
                </div>
            </div>

            {{-- ================= ITEM 2 ================= --}}
            <div
                class="min-w-[85%] sm:min-w-[60%] lg:min-w-0
                       snap-center rounded-3xl bg-white
                       border border-[#1B8E4B]/15
                       shadow-[0_18px_50px_rgba(0,0,0,0.08)]
                       overflow-hidden transition
                       md:hover:-translate-y-1 md:hover:shadow-xl">

                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/hero-ayam-ungkep.jpg') }}"
                         alt="Ayam Ungkep"
                         class="w-full h-full object-cover transition-transform duration-500 md:hover:scale-105">
                </div>

                <div class="p-6 text-center">
                    <h3 class="text-lg font-semibold text-[#1F2933]">
                        Ayam Ungkep
                    </h3>

                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">
                        Ayam berbumbu khas, praktis dan siap dimasak kapan saja.
                    </p>
                </div>
            </div>

            {{-- ================= ITEM 3 ================= --}}
            <div
                class="min-w-[85%] sm:min-w-[60%] lg:min-w-0
                       snap-center rounded-3xl bg-white
                       border border-[#1B8E4B]/15
                       shadow-[0_18px_50px_rgba(0,0,0,0.08)]
                       overflow-hidden transition
                       md:hover:-translate-y-1 md:hover:shadow-xl">

                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/nasibox.jpg') }}"
                         alt="Paket Nasi Box"
                         class="w-full h-full object-cover transition-transform duration-500 md:hover:scale-105">
                </div>

                <div class="p-6 text-center">
                    <h3 class="text-lg font-semibold text-[#1F2933]">
                        Paket Nasi Box
                    </h3>

                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">
                        Solusi praktis untuk acara, rapi, lezat, dan siap dibagikan.
                    </p>
                </div>
            </div>
        </div>

        {{-- ================= CTA ================= --}}
        <div class="mt-14 flex justify-center">
            <a
                href="{{ route('produk') }}"
                class="group inline-flex items-center gap-2
                       px-9 py-4 rounded-xl
                       border border-[#1B8E4B]/40
                       text-[#146C43] font-semibold
                       hover:bg-[#1B8E4B]/10
                       transition-all active:scale-95">
                Jelajahi Produk
                <span class="transition-transform group-hover:translate-x-1">→</span>
            </a>
        </div>

    </div>

    {{-- ================= HIDE SCROLLBAR ================= --}}
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</section>