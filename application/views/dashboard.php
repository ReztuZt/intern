<?php
$servername = "localhost";
$username = "root"; // Default username untuk XAMPP
$password = ""; // Kosongkan password karena umumnya default tidak memiliki password
$dbname = "internship";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel tb_course
$sql = "SELECT course_nama, course_tanggal, course_jumlah FROM tb_course";
$result = $conn->query($sql);

?>

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <div class="section-header">
              <h1>MITrack Analytics Dashboard</h1>
              <p>Monitoring Internship Progress and Key Metrics</p>
          </div>
          <!-- Small boxes (Stat box) -->
          <div class="row">
              <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                      <div class="inner">
                          <h3>150</h3>

                          <p>New Orders</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-bag"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                      <div class="inner">
                          <h3>53<sup style="font-size: 20px">%</sup></h3>

                          <p>Bounce Rate</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-stats-bars"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                      <div class="inner">
                          <h3>44</h3>

                          <p>User Registrations</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-person-add"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                      <div class="inner">
                          <h3>65</h3>

                          <p>Unique Visitors</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-pie-graph"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <!-- ./col -->
              <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Course</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                 
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
            <thead>
                <tr>
                    <th>Nama Course</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>More</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Iterasi hasil query dan tampilkan data ke dalam tabel
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['course_nama']}</td>
                                <td>{$row['course_tanggal']}</td>
                                <td>{$row['course_jumlah']}</td>
                                <td>
                                    <a href='#' class='text-muted'>
                                        <i class='fas fa-search'></i>
                                    </a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No courses found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
          <!-- /.card -->
          <!-- /.row -->
          <!-- Main row -->

          <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->