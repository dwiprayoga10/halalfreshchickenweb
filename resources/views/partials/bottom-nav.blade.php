@php
$waMessage = "Halo Halal Fresh Chicken

Saya ingin order ayam hari ini.
Bisa kirim daftar harga dan stok yang tersedia ya?

Terima kasih ";

$waLink = "https://wa.me/6285199606037?text=" . rawurlencode($waMessage);
@endphp
<nav class="fixed bottom-0 inset-x-0 z-40 
            bg-white/95 backdrop-blur-md 
            border-t border-gray-200 
            overflow-visible md:hidden">

    <div class="relative h-16 flex items-center justify-between px-8">

        <!-- LEFT GROUP -->
        <div class="flex items-center gap-8">

            <!-- HOME -->
            <a href="{{ route('home') }}"
               class="flex flex-col items-center text-[11px] transition-all duration-200
               {{ request()->routeIs('home') ? 'text-[#166534] font-semibold scale-105' : 'text-gray-500 hover:text-[#166534]' }}">

                <svg viewBox="0 0 24 24"
                     fill="currentColor"
                     class="w-6 h-6 mb-1">
                    <path d="M11.47 3.84a.75.75 0 011.06 0l7.5 7.5a.75.75 0 01-1.06 1.06L18 11.44V19.5a.75.75 0 01-.75.75h-4.5a.75.75 0 01-.75-.75v-4.5h-2.5v4.5a.75.75 0 01-.75.75H6.75A.75.75 0 016 19.5v-8.06l-.97.96a.75.75 0 01-1.06-1.06l7.5-7.5z"/>
                </svg>

                Home
            </a>

            <!-- PRODUK -->
            <a href="{{ route('produk') }}"
               class="flex flex-col items-center text-[11px] transition-all duration-200
               {{ request()->routeIs('produk') ? 'text-[#166534] font-semibold scale-105' : 'text-gray-500 hover:text-[#166534]' }}">

                <svg viewBox="0 0 24 24"
                     fill="currentColor"
                     class="w-6 h-6 mb-1">
                    <path d="M6 6a6 6 0 0112 0v1h1.25A1.75 1.75 0 0121 8.75v9.5A1.75 1.75 0 0119.25 20H4.75A1.75 1.75 0 013 18.25v-9.5A1.75 1.75 0 014.75 7H6V6zm2 1h8V6a4 4 0 00-8 0v1z"/>
                </svg>

                Produk
            </a>

        </div>

        <!-- RIGHT GROUP -->
        <div class="flex items-center gap-8">

            <!-- KONTAK -->
            <a href="{{ route('kontak') }}"
               class="flex flex-col items-center text-[11px] transition-all duration-200
               {{ request()->routeIs('kontak') ? 'text-[#166534] font-semibold scale-105' : 'text-gray-500 hover:text-[#166534]' }}">

                <svg viewBox="0 0 24 24"
                     fill="currentColor"
                     class="w-6 h-6 mb-1">
                    <path d="M2.25 6.75A2.25 2.25 0 014.5 4.5h15A2.25 2.25 0 0121.75 6.75v10.5A2.25 2.25 0 0119.5 19.5h-15A2.25 2.25 0 012.25 17.25V6.75zm2.1.75L12 12.75 19.65 7.5H4.35z"/>
                </svg>

                Kontak
            </a>

            <!-- AKUN -->
            <a href="#login"
               class="flex flex-col items-center text-[11px] text-gray-500 hover:text-[#166534] transition">

                <svg viewBox="0 0 24 24"
                     fill="currentColor"
                     class="w-6 h-6 mb-1">
                    <path d="M12 12a5 5 0 100-10 5 5 0 000 10z"/>
                    <path d="M4.5 20.25a7.5 7.5 0 0115 0v.75H4.5v-.75z"/>
                </svg>

                Akun
            </a>

        </div>

        <!-- FLOATING WHATSAPP CENTER -->
        <a href="{{ $waLink }}"
   target="_blank"
   aria-label="Chat WhatsApp"
   class="absolute -top-7 left-1/2 -translate-x-1/2
          w-16 h-16
          flex items-center justify-center
          rounded-full
          bg-[#25D366]
          shadow-[0_15px_30px_rgba(37,211,102,0.35)]
          border-4 border-white
          transition-all duration-300
          hover:scale-110
          active:scale-95">

            <svg viewBox="0 0 24 24"
     fill="currentColor"
     class="w-7 h-7 text-white">

    <path d="M20.52 3.48A11.88 11.88 0 0012.01 0C5.38 0 .01 5.37.01 12c0 2.12.55 4.19 1.6 6.01L0 24l6.18-1.62A11.95 11.95 0 0012.01 24C18.64 24 24 18.63 24 12c0-3.2-1.25-6.21-3.48-8.52zM12 21.82c-1.8 0-3.55-.48-5.08-1.38l-.36-.21-3.67.96.98-3.58-.23-.37A9.77 9.77 0 012.18 12c0-5.41 4.41-9.82 9.82-9.82 2.62 0 5.08 1.02 6.93 2.88A9.75 9.75 0 0121.82 12c0 5.41-4.41 9.82-9.82 9.82zm5.39-7.36c-.29-.15-1.72-.85-1.99-.95-.27-.1-.47-.15-.67.15-.2.29-.77.95-.94 1.15-.17.2-.35.22-.64.07-.29-.15-1.23-.45-2.34-1.44-.86-.77-1.44-1.72-1.61-2.01-.17-.29-.02-.45.13-.6.14-.14.29-.35.44-.52.15-.17.2-.29.3-.49.1-.2.05-.37-.02-.52-.07-.15-.67-1.61-.92-2.2-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.8.37-.27.29-1.05 1.02-1.05 2.48 0 1.46 1.08 2.88 1.23 3.08.15.2 2.12 3.23 5.13 4.53.72.31 1.28.49 1.72.63.72.23 1.37.2 1.88.12.57-.08 1.72-.7 1.96-1.38.24-.68.24-1.26.17-1.38-.07-.12-.27-.2-.57-.35z"/>
</svg>

        </a>

    </div>
</nav>