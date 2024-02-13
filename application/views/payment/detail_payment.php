<!-- templates/header.php -->

<!-- Your header content goes here -->

<body class="hold-transition sidebar-mini layout-fixed">

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Sidebar -->
        <!-- Your sidebar content goes here -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <!-- Your content header goes here -->
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <!-- Your main content goes here -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Detail Pembayaran</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <!-- Display payment details -->
                                    <p><strong>NIP:</strong> <?= $payment_detail->magang_nip ?></p>
                                    <p><strong>Status Pembayaran:</strong> <?= $payment_detail->payment_status ?></p>

                                    <?php if ($payment_detail->file_payment) : ?>
                                        <img src="<?= base_url('../uploads/' . $payment_detail->file_payment) ?>" alt="Payment File" style="max-width: 200px; max-height: 200px;">
                                    <?php endif; ?>

                                    <!-- Add more details as needed -->

                                    <!-- Upload new image form -->
                                    <form action="<?= base_url('payment/upload_image/' . $payment_detail->payment_id) ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image_upload">Unggah Gambar Baru</label>
                                            <input type="file" name="image_upload" class="form-control">
                                            <button type="submit" class="btn btn-primary mt-2">Unggah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <!-- Your footer content goes here -->

    </div>
    <!-- ./wrapper -->

    <!-- scripts, styles, and other includes go here -->

    </body>
    </html>
