<div class="container-fluid">
  <div class="card" style="width: 18rem;">
    <img src="<?php echo base_url('assets/img/admin1.jpg') ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">ADMIN</h5>
      <p class="card-text">Seseorang untuk mengubah data di GsProMobile</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Username : admin</li>
      <li class="list-group-item">Password : 123</li>
    </ul>
    <div class="card-body">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Ganti
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" enctype="multipart/form-data">

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control">
                </div>

                <div class="form-group">
                  <label>Ganti Deskripsi</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>

                <div class="form-group">
                  <label>Foto Profile</label>
                  <input type="file" class="form-control">
                </div>


                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  <button type="button" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>