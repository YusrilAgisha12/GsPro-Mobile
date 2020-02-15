<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "Total Belanjaan Anda : Rp. " . number_format($grand_total, 0, ',', '.');
                    ?>
            </div><br><br>

            <h3>Input Kelas dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?>">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <?php if ($this->session->userdata('nama')) { ?>
                        <input type="text" name="nama" class="form-control col-sm-8" value="<?php echo $this->session->userdata('nama') ?>" readonly>

                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kelas :</label>
                    <select class="form-control col-sm-8" id="exampleFormControlSelect1" name="kelas">
                        <option>X BDP 1</option>
                        <option>X BDP 2</option>
                        <option>X OTKP 1</option>
                        <option>X OTKP 2</option>
                        <option>X AKL 1</option>
                        <option>X AKL 2</option>
                        <option>X RPL 1</option>
                        <option>X RPL 2</option>
                        <option>XI BDP 1</option>
                        <option>XI BDP 2</option>
                        <option>XI OTKP 1</option>
                        <option>XI OTKP 2</option>
                        <option>XI AKL 1</option>
                        <option>XI AKL 2</option>
                        <option>XI RPL 1</option>
                        <option>XI RPL 2</option>
                        <option>XII BDP 1</option>
                        <option>XII BDP 2</option>
                        <option>XII OTKP 1</option>
                        <option>XII OTKP 2</option>
                        <option>XII AKL 1</option>
                        <option>XII AKL 2</option>
                        <option>XII RPL 1</option>
                        <option>XII RPL 2</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="">Jenis Pembayaran <i class="fas fa-handshake"></i> :</label>
                    <img style="height:120px; width:120px; border:2px solid blue; border-radius:60px; margin-left:50px;" src="<?php echo base_url('assets/img/cod.jpg') ?>">
                </div>

                <a href="<?php echo base_url('welcome') ?>">
                    <div class="btn btn-sm btn-primary "><i class="fas fa-arrow-left"></i></div>
                </a>
                <button type="submit" style="margin-right:150px;" class="btn btn-sm btn-primary float-right">Pesan</button>
            </form>

        <?php
        } else {
            echo "Keranjang Belanja Anda masih kosong";
        }
        ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>