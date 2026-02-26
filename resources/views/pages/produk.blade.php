@extends('layouts.app')

@section('content')
<section class="relative bg-[#f0fdf4] px-4 py-16 overflow-hidden">

    {{-- BACKGROUND PATTERN --}}
    <div class="absolute inset-0 opacity-[0.035]"
         style="background-image: radial-gradient(circle at 1px 1px, #14532d 1px, transparent 0);
                background-size: 24px 24px;">
    </div>

    <div class="relative max-w-6xl mx-auto">

        {{-- TITLE --}}
        <div class="text-center mb-12 px-2">
            <p class="text-[11px] tracking-widest text-[#1B8E4B] font-medium uppercase">
                Produk & Layanan
            </p>
            <h2 class="mt-2 text-2xl md:text-3xl font-extrabold text-[#146C43]">
                Produk Unggulan Kami
            </h2>
            <p class="mt-3 text-sm text-[#14532d] max-w-md mx-auto leading-relaxed">
                Ayam segar dan siap olah dengan proses halal serta penanganan higienis.
            </p>
            <div class="mt-6 flex justify-center">
                <span class="block w-16 h-[3px] rounded-full bg-[#1B8E4B]/70"></span>
            </div>
        </div>

        {{-- GRID --}}
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">

            @php
                $phone = '6285199606037';

                $products = [
                    [
                        'name' => 'Ayam Potong Segar',
                        'image' => 'hero-ayam-segar.jpg',
                        'tag' => 'Fresh',
                        'meta' => 'Potong Harian · Halal',
                        'desc' => 'Ayam potong segar yang diproses setiap hari dengan standar halal dan kebersihan tinggi.',
                        'benefits' => ['Diproses harian','Halal terjaga','Kualitas konsisten'],
                    ],
                    [
                        'name' => 'Ayam Ungkep',
                        'image' => 'hero-ayam-ungkep.jpg',
                        'tag' => 'Praktis',
                        'meta' => 'Siap Goreng · Hemat Waktu',
                        'desc' => 'Ayam ungkep berbumbu dengan rasa konsisten dan siap goreng.',
                        'benefits' => ['Bumbu meresap','Siap goreng','Hemat waktu'],
                    ],
                    [
                        'name' => 'Paket Nasi Box',
                        'image' => 'nasibox.jpg',
                        'tag' => 'Event',
                        'meta' => 'Acara & Kantor',
                        'desc' => 'Paket nasi box rapi dan higienis untuk berbagai kebutuhan acara.',
                        'benefits' => ['Menu variatif','Bisa jumlah besar','Cocok event'],
                    ],
                ];
            @endphp

            @foreach($products as $p)
            @php
                if ($p['name'] === 'Paket Nasi Box') {
                    $waMessage =
                        "Halo Halal Fresh Chicken\n\n".
                        "Saya tertarik dengan produk:\n".
                        "• {$p['name']}\n\n".
                        "Mohon info menu, harga per box, dan minimal pemesanan ya.\n".
                        "Terima kasih";
                } else {
                    $waMessage =
                        "Halo Halal Fresh Chicken\n\n".
                        "Saya tertarik dengan produk:\n".
                        "• {$p['name']}\n\n".
                        "Mohon info harga dan ketersediaannya ya.\n".
                        "Terima kasih";
                }

                $waText = urlencode($waMessage);
            @endphp

            <div
                x-data="{
                    open:false,
                    startY:0,
                    currentY:0,
                    translateY:0,
                    dragging:false,
                }"
                class="group bg-white rounded-2xl border border-[#1B8E4B]/15
                       shadow-[0_10px_28px_rgba(0,0,0,0.08)]
                       overflow-hidden transition hover:-translate-y-1 hover:shadow-xl">

                {{-- IMAGE --}}
                <div class="relative h-36 sm:h-40 md:h-48 overflow-hidden">
                    <img src="{{ asset('images/'.$p['image']) }}"
                         alt="{{ $p['name'] }}"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    <span class="absolute top-2 left-2 bg-white/90 text-[#1B8E4B]
                                 text-[10px] font-semibold px-2.5 py-1 rounded-full">
                        {{ $p['tag'] }}
                    </span>
                </div>

                {{-- CONTENT --}}
                <div class="p-3 text-center">
                    <h3 class="text-sm font-semibold text-[#1F2933]">
                        {{ $p['name'] }}
                    </h3>
                    <p class="mt-1 text-[10px] text-gray-500">
                        {{ $p['meta'] }}
                    </p>

                    <div class="mt-3 flex items-center justify-center gap-2">
                        <button @click="open=true"
                                class="flex-1 text-[11px] font-semibold
                                       border border-[#1B8E4B]
                                       text-[#1B8E4B]
                                       py-2 rounded-lg
                                       hover:bg-[#1B8E4B]/10 transition">
                            Detail
                        </button>

                        <a href="https://wa.me/{{ $phone }}?text={{ $waText }}"
   target="_blank"
   class="w-9 h-9 flex items-center justify-center
          rounded-lg bg-[#25D366]
          hover:scale-105 transition">

    <svg xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 24 24"
         class="w-5 h-5 fill-white">

        <path d="M20.52 3.48A11.88 11.88 0 0012.05 0C5.42 0 .03 5.39.03 12.02c0 2.12.55 4.19 1.6 6.02L0 24l6.14-1.61a11.94 11.94 0 005.91 1.51h.01c6.63 0 12.02-5.39 12.02-12.02 0-3.21-1.25-6.23-3.56-8.4zM12.06 21.3c-1.8 0-3.56-.48-5.1-1.39l-.37-.22-3.64.95.97-3.55-.24-.37a9.27 9.27 0 01-1.42-4.98c0-5.13 4.18-9.31 9.31-9.31 2.49 0 4.83.97 6.59 2.73a9.25 9.25 0 012.72 6.58c0 5.13-4.18 9.31-9.31 9.31zm5.1-6.97c-.28-.14-1.65-.81-1.9-.9-.25-.09-.43-.14-.61.14-.18.28-.7.9-.86 1.08-.16.18-.32.21-.6.07-.28-.14-1.18-.43-2.25-1.38-.83-.74-1.39-1.66-1.55-1.94-.16-.28-.02-.43.12-.57.12-.12.28-.32.42-.48.14-.16.18-.28.28-.46.09-.18.05-.34-.02-.48-.07-.14-.61-1.48-.84-2.03-.22-.53-.45-.46-.61-.47h-.52c-.18 0-.48.07-.73.34-.25.28-.96.94-.96 2.3s.99 2.66 1.13 2.84c.14.18 1.95 2.98 4.73 4.18.66.28 1.17.45 1.57.58.66.21 1.26.18 1.73.11.53-.08 1.65-.67 1.88-1.32.23-.65.23-1.2.16-1.32-.07-.12-.25-.18-.53-.32z"/>
    </svg>
</a>
                    </div>
                </div>

                {{-- MODAL --}}
                <div
    x-show="open"
    x-cloak
    x-trap.noscroll="open"
    class="fixed inset-0 z-50 flex items-end justify-center"
>
                    {{-- OVERLAY --}}
                    <div @click="open=false"
                         x-transition.opacity.duration.300ms
                         class="absolute inset-0 bg-black/60"></div>

                    {{-- MODAL CONTENT --}}
                    <div
    x-show="open"
    x-transition:enter="transition transform duration-300 ease-out"
    x-transition:enter-start="translate-y-full"
    x-transition:enter-end="translate-y-0"
    x-transition:leave="transition transform duration-200 ease-in"
    x-transition:leave-start="translate-y-0"
    x-transition:leave-end="translate-y-full"

    class="relative bg-white w-full max-w-lg rounded-t-3xl overflow-hidden"
    :style="dragging ? `transform: translateY(${translateY}px)` : ''"

    @touchstart.passive="
        startY = $event.touches[0].clientY;
        dragging = true;
    "

    @touchmove.passive="
        if (!dragging) return;
        currentY = $event.touches[0].clientY;
        translateY = Math.max(0, currentY - startY);
    "

    @touchend="
        dragging = false;
        if (translateY > 120) {
            open = false;
        }
        translateY = 0;
    "
>

                        {{-- DRAG INDICATOR --}}
                        <div class="py-3 flex justify-center cursor-grab">
                            <span class="w-12 h-1.5 bg-gray-300 rounded-full"></span>
                        </div>

                        {{-- IMAGE --}}
                        <div class="h-48 overflow-hidden">
                            <img src="{{ asset('images/'.$p['image']) }}"
                                 alt="{{ $p['name'] }}"
                                 class="w-full h-full object-cover">
                        </div>

                        <div class="p-5">
                            <h3 class="text-lg font-bold text-[#146C43] mb-2">
                                {{ $p['name'] }}
                            </h3>

                            <p class="text-sm text-gray-600 mb-4">
                                {{ $p['desc'] }}
                            </p>

                            <ul class="grid grid-cols-2 gap-2 text-sm mb-5">
                                @foreach($p['benefits'] as $b)
                                <li class="flex gap-2">
                                    <span class="w-1.5 h-1.5 mt-2 bg-[#1B8E4B] rounded-full"></span>
                                    {{ $b }}
                                </li>
                                @endforeach
                            </ul>

                            <div class="grid grid-cols-2 gap-3">
                                <button @click="open=false"
                                        class="py-3 rounded-xl border border-gray-300 text-sm font-semibold">
                                    Tutup
                                </button>

                                <a href="https://wa.me/{{ $phone }}?text={{ $waText }}"
                                   target="_blank"
                                   class="py-3 rounded-xl bg-[#1B8E4B]
                                          text-white text-sm font-semibold text-center">
                                    Pesan WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>
</section>

@include('partials.footer')
@endsection