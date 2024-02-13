<!-- Main content -->
<div>
<div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img src="<?= base_url('assets/template/') ?>dist/img/user_unknow.png" class="img-circle elevation-2" alt="User Image">
              </div>

              <h3 class="profile-username text-center"><?= $admin['nama_admin']; ?></h3>

              <p class="text-muted text-center">Admin</p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>ID Admin</b> <a class="float-right"><?= $admin['id_admin']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Username</b> <a class="float-right"><?= $admin['username']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Nama Admin</b> <a class="float-right"><?= $admin['nama_admin']; ?></a>
                </li>
              </ul>

              <!-- <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#updateImageModal">
                <b>Update Image</b>
              </button> -->
            </div>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- Modal for Image Update -->
          <div class="modal fade" id="updateImageModal" tabindex="-1" role="dialog" aria-labelledby="updateImageModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="updateImageModalLabel">Update Image</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- Add your image update form here -->
                  <form action="<?= base_url('user/update_image') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="image_admin">Choose Image:</label>
                      <input type="file" class="form-control-file" id="image_admin" name="image_admin" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Image</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About The Company</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-building mr-1"></i> Company</strong>
              <p class="text-muted">
                Manimonki Studio
              </p>

              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

              <p class="text-muted">Jl. Satrio Wibowo Sel. No.39A, Purwosari, Kec. Laweyan Kota Surakarta Jawa Tengah</p>

              <hr>

              <strong><i class="fas fa-envelope mr-1"></i> Contact</strong>
              <p class="text-muted">
                <span class="tag tag-danger">manimonki.solo@gmail.com</span>
              </p>


              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

              <p class="text-muted">Manimonki Studio adalah studio animasi pemenang penghargaan yang berlokasi di Indonesia.</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <!-- Tambahkan kelas "active" pada li pertama -->
                <li class="nav-item active">
                  <a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                </li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">


                <div class="tab-pane active" id="settings">
                  <?= validation_errors() ?>
                  <?= $this->session->flashdata('message'); ?>
                  <form action="<?= base_url('user/update_profile') ?>" method="POST" class="form-horizontal">
                    <div class="form-group row">
                      <label for="id_admin" class="col-sm-2 col-form-label">ID Admin</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="id_admin" name="id_admin" value="<?= $admin['id_admin']; ?>">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="namaadmin" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="namaadmin" value="<?= $admin['nama_admin']; ?>">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="username" class="col-sm-2 col-form-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="username" value="<?= $admin['username']; ?>">
                      </div>
                    </div>

                    <!-- <div class="form-group row">
                      <label for="image_admin" class="col-sm-2 col-form-label">Profile Image</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control-file" name="image_admin" name="image_admin">
                      </div>
                    </div> -->

                    <div class="form-group row">
                      <label for="new_password" class="col-sm-2 col-form-label">New Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="new_password">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="confirm_password" class="col-sm-2 col-form-label">Confirm Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="confirm_password">
                      </div>
                    </div>

                    <!-- <div class="form-group row">
                      <label for="inputRoles" class="col-sm-2 col-form-label">Roles</label>
                      <div class="col-sm-10">
                        <select class="form-control" id="inputRoles" name="roles">
                          <option value="admin" <?= ($admin['roles'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
                          <option value="pembimbing" <?= ($admin['roles'] == 'pembimbing') ? 'selected' : ''; ?>>Pembimbing</option>
                        </select>
                      </div> -->
                </div>

                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">Update</button>
                  </div>
                </div>
                </form>


              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
</div>
</div>
<!-- /.content -->