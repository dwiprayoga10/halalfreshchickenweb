@extends('layouts.app')

@section('content')

@php
$visits = [
    [
        'role' => 'Pelanggan Outlet',
        'note' => 'Datang langsung memastikan ayam segar.',
        'image' => 'visit-1.jpeg',
        'location' => 'Outlet Halal Fresh Chicken',
        'date' => 'Februari 2026'
    ],
    [
        'role' => 'Pelanggan Outlet',
        'note' => 'Pengambilan langsung ke outlet untuk kebutuhan usaha.',
        'image' => 'visit-2.jpeg',
        'location' => 'Outlet Halal Fresh Chicken',
        'date' => 'Februari 2026'
    ],
    [
        'role' => 'Pelanggan Outlet',
        'note' => 'Belanja langsung untuk kebutuhan rumah tangga.',
        'image' => 'visit-3.jpeg',
        'location' => 'Outlet Halal Fresh Chicken',
        'date' => 'Januari 2026'
    ],
    [
        'role' => 'Pelanggan Outlet',
        'note' => 'Datang langsung melihat proses penanganan ayam.',
        'image' => 'visit-4.jpeg',
        'location' => 'Outlet Halal Fresh Chicken',
        'date' => 'Januari 2026'
    ],
    [
        'role' => 'Pelanggan Outlet',
        'note' => 'Pembelian langsung dalam jumlah tertentu.',
        'image' => 'visit-5.jpeg',
        'location' => 'Outlet Halal Fresh Chicken',
        'date' => 'Januari 2026'
    ],
];
@endphp

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">

        <!-- HEADER -->
        <div class="text-center mb-14">
    <p class="text-[11px] tracking-widest text-[#1B8E4B] font-medium uppercase">
        Kunjungan Langsung Pelanggan
    </p>

    <h2 class="mt-2 text-3xl md:text-4xl font-extrabold text-[#146C43]">
        Pelanggan Datang Langsung ke Outlet
    </h2>

    <p class="mt-3 text-sm text-gray-500 max-w-xl mx-auto">
        Dokumentasi pelanggan yang berkunjung langsung untuk memastikan kualitas dan kesegaran produk.
    </p>
</div>

        <!-- SWIPER -->
        <div class="swiper visit-swiper pb-16">
            <div class="swiper-wrapper">

                @foreach($visits as $v)
                <div class="swiper-slide h-auto">
                    <div
                        x-data="{ open:false }"
                        class="h-full bg-white rounded-3xl shadow-md hover:shadow-xl transition overflow-hidden flex flex-col"
                    >

                        <!-- IMAGE -->
                        <div class="relative">
                            <img
                                src="{{ asset('images/visits/' . $v['image']) }}"
                                @click="open = true"
                                class="w-full h-56 object-cover cursor-pointer"
                                alt="Kunjungan Pelanggan ke Outlet"
                            >

                            <span class="absolute top-3 left-3 bg-green-700 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                Kunjungan Langsung
                            </span>
                        </div>

                        <!-- CONTENT -->
                        <div class="p-5 flex flex-col flex-1">
                            <p class="text-sm font-semibold text-gray-900 mb-1">
                                {{ $v['role'] }}
                            </p>

                            <p class="text-sm text-gray-700 mb-4 leading-relaxed line-clamp-3">
                                {{ $v['note'] }}
                            </p>

                            <!-- FOOTER -->
                            <div class="mt-auto flex items-center justify-between text-xs text-gray-400">
                                <span>{{ $v['location'] }}</span>
                                <span>{{ $v['date'] }}</span>
                            </div>
                        </div>

                        <!-- MODAL -->
                        <div
                            x-show="open"
                            x-transition.opacity
                            x-trap.noscroll="open"
                            @keydown.escape.window="open = false"
                            @click.self="open = false"
                            class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 p-4"
                        >
                            <div class="relative max-w-full max-h-full">
                                <button
                                    @click="open = false"
                                    class="absolute -top-4 -right-4 bg-white text-gray-800 w-9 h-9 rounded-full flex items-center justify-center shadow-lg hover:bg-gray-100 transition"
                                >
                                    &times;
                                </button>

                                <img
                                    src="{{ asset('images/visits/' . $v['image']) }}"
                                    @click.stop
                                    class="max-w-full max-h-[85vh] rounded-xl shadow-2xl"
                                    alt="Dokumentasi Kunjungan Pelanggan"
                                >
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</section>
   @php
$whatsapps = [
    [
        'name' => 'Hermiatun',
        'role' => 'Pelanggan',
        'message' => 'Makasih pak Hadi, semoga rejekinya lancar',
        'image' => 'testi-1.jpeg',
        'rating' => 5,
        'time' => '15.04'
    ],
    [
        'name' => 'Mufatikih',
        'role' => 'Pelanggan',
        'message' => 'Matursuwun pak, ayamnya montok',
        'image' => 'testi-2.jpeg',
        'rating' => 5,
        'time' => '15.54'
    ],
    [
        'name' => 'Nurjanah',
        'role' => 'Pelanggan',
        'message' => 'Terimakasih Pak Hadi, semoga berkah dan lancar rezekinya',
        'image' => 'testi-3.jpeg',
        'rating' => 5,
        'time' => '15.09'
    ],
    [
        'name' => 'Dewi',
        'role' => 'Mitra Usaha',
        'message' => 'Terima kasih HFC Fresh Chicken atas suplai ayam fresh-nya. Kualitas daging sangat segar, bersih, halal dan higienis. Sangat membantu kelancaran produksi kami.',
        'image' => 'testi-4.jpeg',
        'rating' => 5,
        'time' => ''
    ],
];
@endphp

<section class="py-20 bg-[#f9fafb]">
    <div class="max-w-7xl mx-auto px-4">

        {{-- HEADER --}}
        <div class="text-center mb-14">
            <p class="text-[11px] tracking-widest text-[#1B8E4B] font-medium uppercase">
                Kata Mereka
            </p>
            <h2 class="mt-2 text-3xl md:text-4xl font-extrabold text-[#146C43]">
                Testimoni Asli WhatsApp Pelanggan
            </h2>
            <p class="mt-3 text-sm text-gray-500 max-w-xl mx-auto">
                Screenshot chat WhatsApp pelanggan asli tanpa rekayasa.
            </p>
        </div>

        {{-- GRID / SWIPER --}}
        <div class="swiper testimonial-alt-swiper pb-12">
            <div class="swiper-wrapper">

                @foreach($whatsapps as $t)
                <div class="swiper-slide h-auto">
                    <div
                        x-data="{ open:false, show:false }"
                        class="h-full bg-white rounded-3xl shadow-md hover:shadow-xl transition overflow-hidden flex flex-col"
                    >

                        {{-- IMAGE (PERSIS, UTUH, SAMA TINGGI) --}}
                        <div class="relative h-72 bg-gray-100 flex items-center justify-center">
                            <img
                                src="{{ asset('images/testimoni/' . $t['image']) }}"
                                @click="open = true"
                                class="max-h-full max-w-full object-contain cursor-pointer"
                                alt="Chat WhatsApp Asli"
                            >

                            {{-- WhatsApp Badge --}}
                            <div class="absolute top-3 left-3 flex items-center gap-2 bg-[#1F9A55] text-white text-xs font-semibold px-3 py-1.5 rounded-full shadow">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 32 32">
                                    <path d="M16.02 3C9.4 3 4 8.4 4 15.02c0 2.65.87 5.09 2.35 7.07L4 29l7.1-2.28c1.94 1.06 4.17 1.66 6.92 1.66C24.6 28.38 30 23 30 16.02 30 9.4 24.6 3 16.02 3z"/>
                                </svg>
                                WhatsApp
                            </div>
                        </div>

                        {{-- CONTENT --}}
                        <div class="p-5 flex flex-col flex-1">

                            <p class="text-sm font-semibold text-gray-900">
                                {{ $t['name'] }}
                            </p>
                            <p class="text-xs text-gray-500 mb-2">
                                {{ $t['role'] }} {{ $t['time'] ? '• '.$t['time'] : '' }}
                            </p>

                            {{-- TEXT --}}
                            <p
                                class="text-sm text-gray-700 leading-relaxed"
                                :class="{ 'line-clamp-3': !show }"
                            >
                                “{{ $t['message'] }}”
                            </p>

                            @if(strlen($t['message']) > 80)
                            <button
                                @click="show = !show"
                                class="text-xs text-[#1F9A55] font-medium mt-2 self-start"
                            >
                                <span x-show="!show">Baca selengkapnya</span>
                                <span x-show="show">Tutup</span>
                            </button>
                            @endif

                            {{-- FOOTER --}}
                            <div class="mt-auto flex items-center justify-between pt-4">
                                <div class="flex gap-1">
                                    @for($i=0;$i<$t['rating'];$i++)
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path d="M10 15l-5.878 3.09L5.64 11.545 1 7.455l6.06-.88L10 1l2.94 5.575 6.06.88-4.64 4.09 1.518 6.545z"/>
                                        </svg>
                                    @endfor
                                </div>

                                <span class="text-xs text-green-600 font-medium">
                                    Testimoni Asli
                                </span>
                            </div>
                        </div>

                        {{-- MODAL IMAGE --}}
                        <div
                            x-show="open"
                            x-transition.opacity
                            @click.self="open = false"
                            @keydown.escape.window="open = false"
                            class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 p-4"
                        >
                            <div class="relative">
                                <button
                                    @click="open = false"
                                    class="absolute -top-4 -right-4 bg-white w-9 h-9 rounded-full flex items-center justify-center shadow"
                                >
                                    &times;
                                </button>

                                <img
                                    src="{{ asset('images/testimoni/' . $t['image']) }}"
                                    class="max-h-[90vh] max-w-full object-contain rounded-xl shadow-2xl"
                                >
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>

        <p class="text-center text-xs text-gray-500 mt-4">
            Semua screenshot diambil langsung dari WhatsApp pelanggan.
        </p>

    </div>
</section>
@endsection