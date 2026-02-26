<footer class="bg-white border-t border-gray-200 text-gray-700">

    <div class="max-w-7xl mx-auto px-5 py-10">

        {{-- GRID --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">

            {{-- BRAND (FULL WIDTH DI MOBILE) --}}
            <div class="col-span-2 lg:col-span-2 text-center lg:text-left">

                <div class="flex items-center gap-4 mb-4
                            justify-center lg:justify-start">
                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="Halal Fresh Chicken"
                        class="h-12 sm:h-14 object-contain mx-auto lg:mx-0"
                    >
                    <img
                        src="{{ asset('images/logobumi.png') }}"
                        alt="Sertifikasi Halal"
                        class="h-12 sm:h-14 object-contain mx-auto lg:mx-0"
                    >
                </div>

                <p class="text-sm text-gray-600 leading-relaxed
                          max-w-md mx-auto lg:mx-0">
                    Penyedia ayam segar berkualitas yang diproses secara halal,
                    higienis, dan terstandarisasi untuk kebutuhan rumah tangga
                    hingga usaha kuliner.
                </p>
            </div>

            {{-- NAVIGATION --}}
            <div>
                <h4 class="text-sm font-semibold text-gray-900 mb-4 uppercase tracking-wide">
                    Navigasi
                </h4>

                <ul class="space-y-3 text-sm">
                    <li><a href="#produk" class="hover:text-[#1F9A55] transition">Produk</a></li>
                    <li><a href="#testimoni" class="hover:text-[#1F9A55] transition">Testimoni</a></li>
                    <li><a href="#kunjungan" class="hover:text-[#1F9A55] transition">Kunjungan</a></li>
                    <li><a href="#kontak" class="hover:text-[#1F9A55] transition">Kontak</a></li>
                </ul>
            </div>

            {{-- CONTACT --}}
            <div>
                <h4 class="text-sm font-semibold text-gray-900 mb-4 uppercase tracking-wide">
                    Kontak
                </h4>

                <ul class="space-y-4 text-sm text-gray-600">

                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-[#1F9A55]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 21s7-6.5 7-11a7 7 0 1 0-14 0c0 4.5 7 11 7 11z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <span>
                            Cibuyur, Warungpring<br>
                            Pemalang
                        </span>
                    </li>

                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#1F9A55]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 6.75c0 8.28 6.72 15 15 15h1.5a2.25 2.25 0 0 0 2.25-2.25v-1.2a2.25 2.25 0 0 0-1.64-2.16l-3.36-.84a2.25 2.25 0 0 0-2.52 1.08l-.72 1.2a12.06 12.06 0 0 1-5.1-5.1l1.2-.72a2.25 2.25 0 0 0 1.08-2.52l-.84-3.36A2.25 2.25 0 0 0 7.2 3H6a2.25 2.25 0 0 0-2.25 2.25v1.5z"/>
                        </svg>
                        <a href="https://wa.me/6285199606037"
                           target="_blank"
                           class="hover:text-[#1F9A55] transition">
                            +6285199606037
                        </a>
                    </li>

                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#1F9A55]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3 3"/>
                        </svg>
                        <span>08.00 – 17.00 WIB</span>
                    </li>

                </ul>
            </div>

        </div>

        {{-- BOTTOM --}}
        <div class="border-t border-gray-200 mt-10 pt-6
            flex flex-col
            items-center
            text-center">

    <p class="text-xs text-gray-500 max-w-xl">
        © {{ date('Y') }} Halal Fresh Chicken. All rights reserved.
    </p>

</div>

    </div>
</footer>