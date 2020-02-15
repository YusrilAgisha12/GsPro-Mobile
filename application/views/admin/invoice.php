<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Nomor</th>
            <th>Nama Pemesan</th>
            <th>Kelas </th>
            <th>Tanggal Pemesanan</th>
         <th colspan="2" class="text-center">Aksi</th>
        </tr>

        <?php foreach ($invoice as $inv) : ?>
            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->kelas ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo anchor('admin/invoice/detail/' . $inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
                <td align="right"><?php echo anchor('admin/invoice/hapus/' . $inv->id, '<div class="btn btn-sm btn-danger">Clear</div>') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination float-right">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>