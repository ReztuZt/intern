   <form class="needs-validation" action="<?= base_url('peserta/tambah_aksi') ?>" method="POST">
       <div class="form-row">
           <div class="col-md-6 mb-3">
               <label for="validationTooltip14">NIP</label>
               <input type="text" class="form-control" id="validationTooltip14" name="magang_nip" required>
               <?= form_error('magang_nip', '<div class="invalid-tooltip">', '</div>'); ?>
           </div>
           <div class="col-md-6 mb-3">
               <label for="validationTooltip01">Nama</label>
               <input type="text" class="form-control" id="validationTooltip01" name="magang_nama" required>
               <?= form_error('magang_nama', '<div class="invalid-tooltip">', '</div>'); ?>
           </div>
       </div>
       <div class="form-row">
           <div class="col-md-6 mb-3">
               <label for="validationTooltip02">Email</label>
               <input type="text" class="form-control" id="validationTooltip02" name="magang_email" required>
               <?= form_error('magang_email', '<div class="invalid-tooltip">', '</div>'); ?>
           </div>
           <div class="col-md-6 mb-3">
               <label for="validationTooltip03">No Telepon</label>
               <input type="text" class="form-control" id="validationTooltip03" name="magang_telp" required>
               <?= form_error('magang_telp', '<div class="invalid-tooltip">', '</div>'); ?>
           </div>
       </div>
       <div class="form-row">
           <div class="col-md-6 mb-3">
               <label for="validationTooltip04">Alamat</label>
               <input type="text" class="form-control" id="validationTooltip04" name="magang_alamat" required>
               <?= form_error('magang_alamat', '<div class="invalid-tooltip">', '</div>'); ?>
           </div>
           <div class="col-md-6 mb-3">
               <label for="validationTooltip05">TTL</label>
               <input type="text" class="form-control" id="validationTooltip05" name="magang_ttl" required>
               <?= form_error('magang_ttl', '<div class="invalid-tooltip">', '</div>'); ?>
           </div>
       </div>
       <div class="form-row">
           <div class="col-md-6 mb-3">
               <label for="validationTooltip06">Agama</label>
               <input type="text" class="form-control" id="validationTooltip06" name="magang_agama" required>
               <?= form_error('magang_agama', '<div class="invalid-tooltip">', '</div>'); ?>
           </div>
           <div class="col-md-6 mb-3">
               <label for="validationTooltip07">Gender</label>
               <input type="text" class="form-control" id="validationTooltip07" name="magang_gender" required>
               <?= form_error('magang_gender', '<div class="invalid-tooltip">', '</div>'); ?>
           </div>
       </div>
       <div class="form-row">
           <div class="col-md-6 mb-3">
               <label for="validationTooltip08">Kota</label>
               <input type="text" class="form-control" id="validationTooltip08" name="magang_kota" required>
               <?= form_error('magang_kota', '<div class="invalid-tooltip">', '</div>'); ?>
           </div>
           <div class="col-md-6 mb-3">
               <label for="validationTooltip09">Kode Pos</label>
               <input type="text" class="form-control" id="validationTooltip09" name="magang_kodepos" required>
               <?= form_error('magang_kodepos', '<div class="invalid-tooltip">', '</div>'); ?>
           </div>
       </div>
       <div class="form-row">
           <div class="col-md-6 mb-3">
               <label for="validationTooltip10">KTP</label>
               <input type="text" class="form-control" id="validationTooltip10" name="magang_ktp" required>
               <?= form_error('magang_ktp', '<div class="invalid-tooltip">', '</div>'); ?>
           </div>
           <div class="col-md-6 mb-3">
               <label for="validationTooltip11">Portofolio</label>
               <input type="text" class="form-control" id="validationTooltip11" name="magang_portofolio" required>
               <?= form_error('magang_portofolio', '<div class="invalid-tooltip">', '</div>'); ?>
           </div>
       </div>
       <div class="form-row">
           <div class="col-md-6 mb-3">
               <label for="validationTooltip12">Pembayaran</label>
               <input type="text" class="form-control" id="validationTooltip12" name="magang_payment" required>
               <?= form_error('magang_payment', '<div class="invalid-tooltip">', '</div>'); ?>
           </div>
           <div class="col-md-6 mb-3">
               <label for="validationTooltip13">Status</label>
               <input type="text" class="form-control" id="validationTooltip13" name="status_nama" required>
               <?= form_error('status_nama', '<div class="invalid-tooltip">', '</div>'); ?>
           </div>
       </div>
       <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i>Submit form</button>
   </form>


   </div>