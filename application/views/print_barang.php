<table>
    <h3>Data Semua Produk</h3>
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Keterangan</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
    </tr>

    <?php
    $no = 1;
    foreach ($barang as $brg) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $brg->nama_brg ?></td>
            <td><?php echo $brg->keterangan ?></td>
            <td><?php echo $brg->kategori ?></td>
            <td><?php echo $brg->harga ?></td>
            <td><?php echo $brg->stok ?></td>
        </tr>
    <?php endforeach; ?>

</table>

<script type="text/javascript">
    window.print();
</script>