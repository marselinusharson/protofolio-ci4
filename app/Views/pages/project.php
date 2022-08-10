<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="pt-36 pb-16 bg-slate-100 dark:bg-gradient-to-b dark:from-black dark:to-dark">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Project</h4>
                <h2 class="font-bold text-dark dark:text-white text-3xl mb-4">My Current Project</h2>
                <p class="font-medium text-medium text-secondary dark:text-slate-300">Berikut merupakan beberapa project yang pernah saya kerjakan baik berupa tugas kuliah ataupun project lainnya.</p>
            </div>
        </div>

        <div class="w-full px-4">
            <div class="flex flex-wrap justify-center">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="/img/project/p-1.png" alt="E-Comerse" width="w-full">
                    </div>
                    <h3 class="text-xl font-semibold tex-dark mt-5 mb-3 dark:text-white">E-Comerse Using Public API</h3>
                    <p class="font-medium text-base text-secondary dark:text-slate-300">Hasil Pelatihan FGA Javascript with API Bacth-2</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="/img/project/p-2.png" alt="E-Comerse" width="w-full">
                    </div>
                    <h3 class="text-xl font-semibold tex-dark mt-5 mb-3 dark:text-white">KRS Checker HMJ-TI Undiksha <span class="text-primary">On Going</span></h3>
                    <p class="font-medium text-base text-secondary dark:text-slate-300">Hasil eksekusi program kerja bidang 5 HMJ TI 2022/2023</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="/img/project/p-3.png" alt="E-Comerse" width="w-full">
                    </div>
                    <h3 class="text-xl font-semibold tex-dark mt-5 mb-3 dark:text-white">Perancangan Basis Data E-Ticketing Konser</h3>
                    <p class="font-medium text-base text-secondary dark:text-slate-300">Project berkelompok akhir semester mata kuliah Perancangan Basis Data</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="/img/project/p-4.png" alt="E-Comerse" width="w-full">
                    </div>
                    <h3 class="text-xl font-semibold tex-dark mt-5 mb-3 dark:text-white">Portal Siswa Regina Pacis <span class="text-primary">On Going</span></h3>
                    <p class="font-medium text-base text-secondary dark:text-slate-300">Pembuatan portal siswa regina pacis bajawa sebagai bahan latihan pemrograman web</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>