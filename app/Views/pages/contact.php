<?= $this->extend('layout/template.php'); ?>

<?= $this->section('content'); ?>
<section class="pt-36 pb-32 dark:bg-gradient-to-b dark:from-black dark:to-dark">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
                <h2 class="font-bold text-dark text-3xl mb-4 dark:text-white">Hubungi Saya</h2>
                <p class="font-medium text-medium text-secondary dark:text-slate-300">Lengkapi form berikut dan hubungi saya lebih lanjut!</p>
            </div>
        </div>
        <form action="">
            <div class="w-full lg:w-2/3 lg:mx-auto">
                <div class="w-full mb-8 px-4">
                    <label for="name" class="text-base text-primary font-bold">Name</label>
                    <input type="text" name="name" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary dark:bg-slate-300">
                </div>
                <div class="w-full mb-8 px-4">
                    <label for="email" class="text-base text-primary font-bold">Email</label>
                    <input type="text" name="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary dark:bg-slate-300">
                </div>
                <div class="w-full mb-8 px-4">
                    <label for="pesan" class="text-base text-primary font-bold">Pesan</label>
                    <textarea name="pesan" id="pesan" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-35 dark:bg-slate-300"></textarea>
                </div>
                <div class="w-full px-4">
                    <button class="w-full text-base text-white font-semibold px-8 py-3 rounded-full bg-primary hover:shadow-lg hover:opacity-70 transition duration-500">Send</button>
                </div>
            </div>
        </form>
    </div>
</section>
<?= $this->endSection(); ?>