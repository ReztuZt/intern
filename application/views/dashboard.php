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
            <div class="col-lg-4 col-6 ">
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
            <div class="col-lg-4 col-6">
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
            <div class="col-lg-4 col-6">
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
            <!-- DONUT CHART -->
            <div class="col-lg-4 col-6">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Presentasi Peserta Berdasarkan Gender</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
            <script>
                // Ambil data peserta dari PHP dan ubah menjadi JavaScript menggunakan JSON
                var dataPeserta = <?php echo json_encode($dataPeserta); ?>;

                // Hitung jumlah peserta per gender
                var jumlahPria = dataPeserta.filter(peserta => peserta.magang_gender === 'Pria').length;
                var jumlahPerempuan = dataPeserta.filter(peserta => peserta.magang_gender === 'Perempuan').length;

                // Inisialisasi chart
                var ctx = document.getElementById('donutChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Pria', 'Perempuan'],
                        datasets: [{
                            label: 'Jumlah Peserta',
                            data: [jumlahPria, jumlahPerempuan],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.5)', // Merah untuk pria
                                'rgba(54, 162, 235, 0.5)' // Biru untuk perempuan
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        plugins: {
                            legend: {
                                display: true,
                                position: 'bottom'
                            },
                            title: {
                                display: true,
                                text: 'Presentasi Peserta Berdasarkan Gender'
                            }
                        }
                    }
                });
            </script>


        </div>
    </div>
    <!-- /.container-fluid -->


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->