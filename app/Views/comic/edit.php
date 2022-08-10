<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="continer">
    <div class="row">
        <div class="col-8 m-auto">
            <h2 class="my-3">Form Ubah data Komik</h2>
            <form action="/comic/update/<?= $comic['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $comic['slug']; ?>">
                <div class="form-group row my-2">
                    <label for="penerbit" class="col-sm-2 col-form-label">penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''  ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $comic['title'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row my-2">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''  ?>" id="penulis" name="penulis" value="<?= (old('penulis')) ? old('penulis') : $comic['writter'] ?>">
                        <div class=" invalid-feedback">
                            <?= $validation->getError('penulis'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row my-2">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''  ?>" id="penerbit" name="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $comic['penerbit'] ?>">
                        <div class=" invalid-feedback">
                            <?= $validation->getError('penerbit'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row my-2">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''  ?>" id="sampul" name="sampul" value="<?= (old('sampul')) ? old('sampul') : $comic['cover'] ?>">
                        <div class=" invalid-feedback">
                            <?= $validation->getError('sampul'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row my-2">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>