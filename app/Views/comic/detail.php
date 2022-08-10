<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Komik</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $comic['cover']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $comic['title']; ?></h5>
                            <p class="card-text"><strong>Penulis: </strong><?= $comic['writter']; ?></p>
                            <p class="card-text"><small class="text-muted"><strong>Penerbit: </strong><?= $comic['penerbit']; ?></small></p>
                            <a href="/comic/edit/<?= $comic['slug']; ?>" class="btn btn-warning">Update</a>
                            <form class="d-inline" action="/comic/<?= $comic['id']; ?>" method='post'>
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Untuk menghapus <?= $comic['title']; ?>?')">Hapus</button>
                            </form>
                            <br>
                            <a href="/comic">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>