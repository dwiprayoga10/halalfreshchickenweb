{{-- OVERLAY --}}
<div id="mobileMenuOverlay"
     class="fixed inset-0 z-40 bg-black/40 hidden"
     onclick="closeMobileMenu()"></div>

{{-- BOTTOM SHEET --}}
<div id="mobileMenu"
     class="fixed bottom-0 left-0 right-0 z-50
            bg-white rounded-t-2xl
            translate-y-full
            transition-transform duration-300 ease-out">

    <div class="p-6">

        {{-- HANDLE --}}
        <div class="w-12 h-1.5 bg-gray-300 rounded-full mx-auto mb-6"></div>

        {{-- MENU --}}
        <nav class="flex flex-col gap-5 text-center text-lg font-semibold text-[#146C43]">
            <a href="#home" onclick="closeMobileMenu()">Home</a>
            <a href="#produk" onclick="closeMobileMenu()">Produk</a>
            <a href="#paket" onclick="closeMobileMenu()">Paket</a>
            <a href="#kontak" onclick="closeMobileMenu()">Kontak</a>
        </nav>

        {{-- LOGIN --}}
        <div class="mt-8">
            <button class="w-full flex items-center justify-center gap-2
                           bg-[#1B8E4B] hover:bg-[#146C43]
                           text-white py-3 rounded-xl transition">
                <svg xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="1.5"
                     class="w-5 h-5">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975"/>
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Login
            </button>
        </div>

    </div>
</div>

<script>
    function openMobileMenu() {
        const overlay = document.getElementById('mobileMenuOverlay');
        const menu = document.getElementById('mobileMenu');

        overlay.classList.remove('hidden');
        menu.classList.remove('translate-y-full');
    }

    function closeMobileMenu() {
        const overlay = document.getElementById('mobileMenuOverlay');
        const menu = document.getElementById('mobileMenu');

        overlay.classList.add('hidden');
        menu.classList.add('translate-y-full');
    }
</script>