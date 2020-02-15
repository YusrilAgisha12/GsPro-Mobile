<div class="container-fluid">
    <h3>Semua Data Perlengkapan Rumah</h3>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th>AKSI</th>
        </tr>

        <?php
        $no = 1;
        foreach ($data_perlengkapan_rumah as $brg) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $brg->nama_brg ?></td>
                <td><?php echo $brg->keterangan ?></td>
                <td><?php echo $brg->kategori ?></td>
                <td><?php echo number_format($brg->harga, 0, ',', '.')  ?></td>
                <td><?php echo $brg->stok ?></td>
                <td><?php echo anchor('admin/data_barang/detail/' . $brg->id_brg, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?>
                </td>
            </tr>

        <?php endforeach; ?>


    </table>
</div>