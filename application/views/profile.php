<div class="container-fluid">
    
    <div class="form-group">
        <label for="">Nama Lengkap</label>
        <?php if ($this->session->userdata('nama')) { ?>
            <input type="text" name="nama" class="form-control col-sm-4" value="<?php echo $this->session->userdata('nama') ?>" readonly>

        <?php } ?>
    </div>

   

</div>