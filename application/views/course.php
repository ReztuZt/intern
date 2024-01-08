</div>
<div class="card-body">
    <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
              
                    <th>Mentor</th>
                    <th>Harga</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($course as $ssw) : ?>
                <tbody>
                <tr class="text-center highlight-row" data-href="<?= base_url('course/detail/' . $ssw->course_id) ?>">
                    <td><?= $no++ ?></td>
                    <td><?= $ssw->course_nama ?></td>
                    <td><?= $ssw->course_deskripsi ?></td>
                    <td><?= $ssw->course_tanggal ?></td>
                    <td><?= $ssw->course_jumlah ?></td>
               
                    <td><?= $ssw->course_mentor ?></td>
                    <td><?= $ssw->course_harga ?></td>
                    <td><?= $ssw->course_ket?></td>
                
                    <td>
                            <button data-toggle="modal" data-target="#edit<?= $ssw->course_id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('peserta/delete/' . $ssw->course_id) ?>" class="btn btn-warning btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini')"><i class="fas fa-trash"></i></a>

                        </td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
            </div>