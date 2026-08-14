<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Data Produk</h1>
            <a href="<?php echo site_url('produk/tambah'); ?>" class="button is-primary mb-4">+ Tambah Produk</a>

            <div class="level">
                <div class="level-left">
                    <h1 class="title">Data Produk</h1>
                </div>
                <div class="level-right">
                    <!-- Mengambil data session -->
                    <span class="mr-3">Halo, <strong><?php echo $this->session->userdata('username'); ?></strong></span>
                    <a href="<?php echo site_url('auth/logout'); ?>" class="button is-danger is-outlined">Logout</a>
                </div>
            </div>
            
            <table class="table is-striped is-fullwidth is-hoverable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($produk as $p): ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $p['nama_produk']; ?></td>
                        <td>Rp <?php echo number_format($p['harga'], 0, ',', '.'); ?></td>
                        <td><?php echo $p['stok']; ?></td>
                        <td>
                            <a href="<?php echo site_url('produk/edit/'.$p['id']); ?>" class="button is-small is-info">Edit</a>
                            <a href="<?php echo site_url('produk/hapus/'.$p['id']); ?>" onclick="return confirm('Yakin hapus?')" class="button is-small is-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>