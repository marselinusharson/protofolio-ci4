<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="home" class="pt-36 relative bg-transparent dark:bg-gradient-to-b dark:from-black dark:to-dark">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
                <h1 class="text-base font-semibold text-primary md:text-xl lg:text-2xl">Hello Everyone, I am <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl dark:text-white">Marselinus Rewo</span></h1>
                <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl dark:text-slate-300">Student & <span class="text-dark dark:text-white">Junior Web Developer</span></h2>
                <p class="font-medium text-secondary dark:text-slate-300 mb-10 leading-relaxed"><span class="text-dark dark:text-white">Kebahagiaan</span> adalah ruang antara sebuah hasrat yang terpuaskan dan hasrat baru yang sedang terbentuk</p>
                <a href="https://wa.link/9ejoz8" class="text-base font-semibold bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-90 transition duration-300 ease-in-out">Contact Me!</a>
            </div>
            <div class="w-full self-end px-4 lg:w-1/2">
                <div class="relative mt-10 lg:mt-9 lg:right-0">
                    <img src="/img/pp.png" alt="" class="max-w-full mx-auto relative z-10">
                    <span class="absolute bottom-0  left-1/2 -translate-x-1/2 md:scale-100">
                        <svg width="400" heigth="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#14b8a6" d="M61.2,-13.4C70.6,9.1,63.6,43.5,45.7,54.6C27.7,65.7,-1.1,53.5,-25.9,35.5C-50.7,17.5,-71.4,-6.2,-66.4,-22.6C-61.4,-39,-30.7,-48,-2.4,-47.2C25.9,-46.5,51.8,-35.8,61.2,-13.4Z" transform="translate(100 100) scale(1.1)" />
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