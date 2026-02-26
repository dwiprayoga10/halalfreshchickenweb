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

<section class="py- bg-white">
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
    Dokumentasi kunjungan pelanggan sebagai bukti kualitas dan kesegaran produk.
</p>
</div>

        <!-- SWIPER -->
        <div class="swiper visit-swiper">
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