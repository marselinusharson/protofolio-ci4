<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/comic/create" class="mt-3 btn btn-primary">Add Comic</a>
            <h1 class="mt-2">Comic List</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif ?>
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($comic as $c) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img class="cover" src="/img/<?= $c['cover']; ?>" alt=""></td>
                            <td><?= $c['title']; ?></td>
                            <td><a href="/comic/<?= $c['slug']; ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>