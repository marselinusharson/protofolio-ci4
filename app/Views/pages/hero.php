<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="home" class="pt-36 relative bg-transparent dark:bg-gradient-to-b dark:from-black dark:to-dark">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
                <h1 class="text-base font-semibold text-primary md:text-xl lg:text-2xl">Hello Everyone, I am <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl dark:text-white">Marselinus Rewo</span></h1>
                <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl dark:text-slate-300">Student & <span class="text-dark dark:text-white">Junior Web Developer</span></h2>
                <p class="font-medium text-secondary dark:text-slate-300 mb-10 leading-relaxed"><span class="text-dark dark:text-white">Kebahagiaan</span> adalah ruang antara sebuah hasrat yang terpuaskan dan hasrat baru yang sedang terbentuk</p>
                <a href="https://wa.me/+6287897886980?text=Halo%20Marsel" target="blank" class="text-base font-semibold bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-90 transition duration-300 ease-in-out">Contact Me!</a>
            </div>
            <div class="w-full self-end px-4 lg:w-1/2">
                <div class="relative mt-10 lg:mt-9 lg:right-0">
                    <img src="/img/pp.png" alt="" class="max-w-full mx-auto relative z-10">
                    <span class="absolute bottom-0  left-1/2 -translate-x-1/2 md:scale-100">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" width="400" height="400" id="blobSvg" transform="rotate(24)" style="opacity: 1;">
                            <defs>
                                <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="0%" style="stop-color: #14b8a6;"></stop>
                                    <stop offset="100%" style="stop-color: #0f172a;"></stop>
                                </linearGradient>
                            </defs>
                            <path id="blob" fill="url(#gradient)" style="opacity: 1;">
                                <animate attributeName="d" dur="15.1s" repeatCount="indefinite" values="M420.7122,331.4339Q380.09423,412.86779,301.16508,392.29219Q222.23594,371.7166,157.11322,349.24982Q91.99051,326.78305,53.64135,232.38203Q15.29219,137.98101,118.09898,129.47187Q220.90577,120.96273,294.67458,111.25967Q368.44339,101.55661,414.88678,175.77831Q461.33017,250,420.7122,331.4339Z;M390.7302,319.10952Q360.37524,388.21905,284.62068,409.39959Q208.86612,430.58014,161.11156,373.20082Q113.35701,315.8215,88.46857,238.04463Q63.58014,160.26776,136.76776,117.04463Q209.95537,73.8215,303.79007,69.52027Q397.62476,65.21905,409.35497,157.60952Q421.08517,250,390.7302,319.10952Z;M411.71818,339.87391Q393.61186,429.74783,302.23794,426.16285Q210.86403,422.57787,122.32727,388.31581Q33.79051,354.05375,61.55534,263.35692Q89.32016,172.66008,145.95613,107.46324Q202.59209,42.2664,289.95613,66.5581Q377.32016,90.8498,403.57233,170.4249Q429.82451,250,411.71818,339.87391Z;M384.02639,318.52969Q359.04619,387.05939,278.02474,435.01815Q197.0033,482.97691,137.94391,408.01485Q78.88453,333.05279,75.91422,249.0132Q72.94391,164.97361,138.46041,107.43731Q203.97691,49.90102,276.0132,88.41917Q348.04949,126.93731,378.52804,188.46866Q409.0066,250,384.02639,318.52969Z;M388.67097,319.27849Q360.55699,388.55699,291.23441,379.72688Q221.91183,370.89678,145.00645,354.28387Q68.10108,337.67097,71.32903,251.33548Q74.55699,165,142.39247,119.95591Q210.22796,74.91183,286.12043,91.61398Q362.0129,108.31613,389.39892,179.15806Q416.78495,250,388.67097,319.27849Z;M400,314Q352,378,277,420Q202,462,143,396Q84,330,66.5,241.5Q49,153,125.5,97.5Q202,42,298.5,55Q395,68,421.5,159Q448,250,400,314Z;M436.87032,349.05548Q408.4258,448.11097,306.06935,451.62968Q203.7129,455.14839,157.4258,385.87516Q111.13871,316.60194,93.22677,241.12968Q75.31484,165.65742,135.48613,87.80097Q195.65742,9.94452,281.80097,56.34258Q367.94452,102.74064,416.62968,176.37032Q465.31484,250,436.87032,349.05548Z;M451.77435,331.68776Q380.0333,413.37552,297.8522,408.1811Q215.67111,402.98668,163.20108,360.14446Q110.73105,317.30225,116.40549,253.17111Q122.07993,189.03996,169.7144,146.88551Q217.34887,104.73105,314.55328,76.47669Q411.75769,48.22232,467.63654,149.11116Q523.51539,250,451.77435,331.68776Z;M420.7122,331.4339Q380.09423,412.86779,301.16508,392.29219Q222.23594,371.7166,157.11322,349.24982Q91.99051,326.78305,53.64135,232.38203Q15.29219,137.98101,118.09898,129.47187Q220.90577,120.96273,294.67458,111.25967Q368.44339,101.55661,414.88678,175.77831Q461.33017,250,420.7122,331.4339Z"></animate>
                            </path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="hidden dark:block dark:absolute dark:w-full dark:mx-auto dark:z-20 dark:py-9 dark:-bottom-0.5  dark:bg-gradient-to-b dark:from-transparent dark:to-dark">

    </div>
</section>
<?= $this->endSection(); ?>