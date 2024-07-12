<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Pembayaran Tiket</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Pembayaran Tiket</li>
        </ol>
        <div class="container-fluid py-4">
            <div class="row mb-4">
                <div class="col-md-6 mb-2 mb-md-0">
                    <a href="<?= site_url('pembayaran/create') ?>" class="btn btn-primary btn-block">Tambah Pembayaran Tiket</a>
                </div>
                <div class="col-md-6">
                    <form action="<?= site_url('datakaryawan/search') ?>" method="GET" class="d-flex align-items-center">
                        <input type="text" name="keyword" class="form-control me-2" placeholder="Cari pembayaran tiket...">
                        <button type="submit" class="btn btn-outline-secondary me-2">Search</button>
                        <button type="button" class="btn btn-outline-secondary" onclick="resetForm()">Reset</button>
                    </form>
                </div>
            </div>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Data Pembayaran Tiket</h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Metode Pembayaran</th>
                                <th>Jumlah Tiket</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Total Harga</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php foreach ($pembayaran_tiket as $k) { ?>
                                <tr>
                                    <td><?= $k['id'] ?></td>
                                    <td><?= $k['metode_pembayaran'] ?></td>
                                    <td><?= $k['jumlah_pembayaran'] ?></td>
                                    <td><?= $k['tanggal_pembayaran'] ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="<?= site_url('pelaporan/edit/' . $k['id']) ?>">Edit</a>
                                        <a class="btn btn-danger" href="<?= site_url('pelaporan/delete/' . $k['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data pendaftaran ini?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>

    </div>
</main>