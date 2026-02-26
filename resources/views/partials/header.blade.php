<header
    id="mainHeader"
    class="fixed top-0 inset-x-0 z-50
           bg-[#1B8E4B]/95 backdrop-blur
           border-b border-[#1B8E4B]
           transition-all duration-300">

    <!-- CONTAINER -->
    <div
        id="headerInner"
        class="relative
               h-18 md:h-[76px]
               max-w-7xl mx-auto
               px-4 md:px-6
               flex items-center
               transition-all duration-300">

        <!-- ================= MOBILE ================= -->
        <div class="relative flex items-center w-full h-full md:hidden">

            <!-- LOGO (LEFT) -->
            <a href="{{ route('home') }}" class="flex items-center z-10">
                <img
                    id="logoMobile"
                    src="{{ asset('images/logo3.png') }}"
                    alt="Halal Fresh Chicken"
                    class="w-auto h-[46px]
                           transition-all duration-300" />
            </a>

            <!-- BRAND TEXT (CENTER ABSOLUTE) -->
            <span
                id="brandMobile"
                class="brand-mobile
                       absolute left-1/2 -translate-x-1/2
                       text-white
                       transition-colors duration-300">
                Halal Fresh Chicken
            </span>

            <!-- LOGIN (RIGHT) -->
            <button
                title="Login"
                class="ml-auto z-10
                       p-2 rounded-full
                       border border-white/30
                       hover:bg-white/10
                       transition active:scale-95">

                <svg xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="1.5"
                     class="loginIcon w-6 h-6
                            text-white
                            transition-colors duration-300">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975"/>
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </button>
        </div>

        <!-- ================= DESKTOP ================= -->
        <div class="hidden md:grid grid-cols-3 items-center w-full h-full">

            <!-- LOGO DESKTOP -->
            <div class="flex items-center">
                <a href="{{ route('home') }}">
                    <img
                        id="logoDesktop"
                        src="{{ asset('images/logo.png') }}"
                        alt="Halal Fresh Chicken"
                        class="w-auto h-[62px] -mt-1
                               transition-all duration-300" />
                </a>
            </div>

            <!-- MENU -->
            <nav class="flex justify-center items-center gap-10">
                @foreach ([
                    ['home','Home'],
                    ['produk','Produk'],
                    ['tentang','Tentang'],
                    ['kontak','Kontak']
                ] as [$route,$label])
                    <a href="{{ route($route) }}"
                       class="nav-link
                              relative text-sm font-semibold uppercase tracking-wide
                              text-[#FFD84D]
                              transition-all duration-300
                              hover:text-[#FFE98A]
                              after:absolute after:left-0 after:-bottom-1
                              after:h-[2px] after:w-0
                              after:bg-[#FFD84D]
                              after:transition-all after:duration-300
                              hover:after:w-full
                              {{ request()->routeIs($route) ? 'after:w-full' : '' }}">
                        {{ $label }}
                    </a>
                @endforeach
            </nav>

            <!-- LOGIN DESKTOP -->
            <div class="flex justify-end">
                <button
                    title="Login"
                    class="p-2 rounded-full
                           border border-white/30
                           hover:bg-white/10
                           transition active:scale-95">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="1.5"
                         class="loginIcon w-6 h-6
                                text-[#FFD84D]
                                transition-colors duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>
</header>

<!-- ================= MOBILE FONT ================= -->
<style>
.brand-mobile {
    font-family: 'Poppins', 'Inter', system-ui, sans-serif;
    font-size: 0.95rem;
    font-weight: 600;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    white-space: nowrap;
}
</style>

<!-- ================= SHRINK SCRIPT ================= -->
<script>
const header      = document.getElementById('mainHeader');
const inner       = document.getElementById('headerInner');
const logoMobile  = document.getElementById('logoMobile');
const logoDesktop = document.getElementById('logoDesktop');
const brandMobile = document.getElementById('brandMobile');
const navLinks    = document.querySelectorAll('.nav-link');
const loginIcons  = document.querySelectorAll('.loginIcon');

window.addEventListener('scroll', () => {
    const shrink = window.scrollY > 80;

    header.classList.toggle('bg-white', shrink);
    header.classList.toggle('shadow-lg', shrink);
    header.classList.toggle('border-[#1B8E4B]/20', shrink);
    header.classList.toggle('bg-[#1B8E4B]/95', !shrink);

    inner.classList.toggle('h-14', shrink);
    inner.classList.toggle('md:h-[64px]', shrink);
    inner.classList.toggle('h-18', !shrink);
    inner.classList.toggle('md:h-[76px]', !shrink);

    logoMobile.classList.toggle('h-[40px]', shrink);
    logoMobile.classList.toggle('h-[46px]', !shrink);

    logoDesktop.classList.toggle('h-[48px]', shrink);
    logoDesktop.classList.toggle('h-[62px]', !shrink);

    brandMobile.classList.toggle('text-[#1B8E4B]', shrink);
    brandMobile.classList.toggle('text-white', !shrink);

    navLinks.forEach(link => {
        link.classList.toggle('text-[#1B8E4B]', shrink);
        link.classList.toggle('hover:text-[#146C43]', shrink);
        link.classList.toggle('text-[#FFD84D]', !shrink);
        link.classList.toggle('hover:text-[#FFE98A]', !shrink);
    });

    loginIcons.forEach(icon => {
        icon.classList.toggle('text-[#1B8E4B]', shrink);
        icon.classList.toggle('text-white', !shrink);
    });
});
</script>