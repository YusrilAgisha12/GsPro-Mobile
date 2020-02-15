<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar Akun!</h1>
                            </div>
                            <form method="post" action="<?php echo base_url('registrasi/index'); ?>" class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="nama" placeholder="Nama Lengkap">
                                    <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" placeholder="Masukkan Email">
                                    <?php echo form_error('email', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kelas :</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="kelas">
                                        <option>Kelas 10</option>
                                        <option>Kelas 11</option>
                                        <option>Kelas 12</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jenis Kelamin :</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="kelamin">
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password_1" placeholder="Password">
                                        <?php echo form_error('password_1', '<div class="text-danger small ml-2">', '</div>') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" name="password_2" placeholder="Ulangi password">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth/login'); ?>">sudah punya akun ? Silahkan Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>