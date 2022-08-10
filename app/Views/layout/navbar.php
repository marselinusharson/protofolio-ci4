<?php

?>
<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="https://github.com/marselinusharson" target="blank" class="font-bold text-lg text-primary block py-6">MarselinusRewo</a>
            </div>

            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>

                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[200px] w-full right-0 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none dark:bg-dark lg:dark:bg-transparent dark:shadow-slate-400">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="<?= base_url(); ?>/" class="text-base text-dark py-2 mx-8 flex  dark:text-white <?= base_url(uri_string()) == base_url() ? 'bg-primary rounded-full group-hover:text-white px-7 dark:group-hover:text-dark' : 'group-hover:text-primary'; ?>">Home</a>
                        </li>
                        <li class="group">
                            <a href="<?= base_url(); ?>/about" class="text-base text-dark py-2 mx-8 flex dark:text-white <?= base_url(uri_string()) == base_url('about') ? 'bg-primary rounded-full group-hover:text-white px-7 dark:group-hover:text-dark' : 'group-hover:text-primary'; ?>">About</a>
                        </li>
                        <li class="group">
                            <a href="<?= base_url(); ?>/project" class="text-base text-dark py-2 mx-8 flex dark:text-white <?= base_url(uri_string()) == base_url('project') ? 'bg-primary rounded-full group-hover:text-white px-7 dark:group-hover:text-dark' : 'group-hover:text-primary'; ?>">Project</a>
                        </li>
                        <li class="group">
                            <a href="<?= base_url(); ?>/gallery" class="text-base text-dark py-2 mx-8 flex dark:text-white <?= base_url(uri_string()) == base_url('gallery') ? 'bg-primary rounded-full group-hover:text-white px-7 dark:group-hover:text-dark' : 'group-hover:text-primary'; ?>">Gallery</a>
                        </li>
                        <li class="group">
                            <a href="<?= base_url(); ?>/contact" class="text-base text-dark py-2 mx-8 flex dark:text-white <?= base_url(uri_string()) == base_url('contact') ? 'bg-primary rounded-full group-hover:text-white px-7 dark:group-hover:text-dark' : 'group-hover:text-primary'; ?>">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="hidden items-center absolute right-14 lg:right-0">
                <div class="cursor-pointer block dark:text-white">
                    <input class="hidden" type="checkbox" id="toggle" name="toggle">
                    <label class="cursor-pointer text-2xl" for="toggle">
                        <i class="bi bi-circle-half"></i>
                    </label>
                </div>
            </div>
        </div>
    </div>
</header>