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
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-gradient-primary">
                    <div class="card-body text-white">
                        <h2 class="text-center mb-4">MITrack Analytics Dashboard</h2>
                        <p class="text-center lead">Manimonki Intern Tracking</p>
                        <!-- <div class="text-center">
                        <img src="https://example.com/path/to/your/image.jpg" alt="Manimonki Logo" class="img-fluid mt-4" style="max-width: 200px;">
                    </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Row for Total Interns -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- Total Interns Box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <?php echo "<h3>$totalIntern</h3>"; ?>
                        <p>Total Peserta</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>

                </div>
            </div>

            <!-- Active Interns Box -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= $active_magang_count ?></h3>
                        <p>Peserta Aktif</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>

                </div>
            </div>

            <!-- Bounce Rate Box -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px background:transparent">%</sup></h3>
                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>

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