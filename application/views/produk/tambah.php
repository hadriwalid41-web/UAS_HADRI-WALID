<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container" style="max-width: 600px;">
            <h1 class="title">Tambah Produk Baru</h1>
            <form method="post" action="<?php echo site_url('produk/tambah'); ?>">
                <div class="field">
                    <label class="label">Nama Produk</label>
                    <div class="control">
                        <input class="input" type="text" name="nama_produk" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Harga</label>
                    <div class="control">
                        <input class="input" type="number" name="harga" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Stok</label>
                    <div class="control">
                        <input class="input" type="number" name="stok" required>
                    </div>
                </div>

                <div class="field is-grouped mt-5">
                    <div class="control">
                        <button type="submit" class="button is-link">Simpan</button>
                    </div>
                    <div class="control">
                        <a href="<?php echo site_url('produk'); ?>" class="button is-link is-light">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>