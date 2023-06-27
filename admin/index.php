<?php include 'header.php'; ?>

<?php 
// koneksi database
include '../koneksi.php';
?>

<div class="container">
    <div class="alert alert-info text-center">
        <h4 style="margin-bottom: 0px"><b>Selamat datang!</b> di sistem informasi pendataan masyarakat tidak mampu Kelurahan Binanga  .</h4>
    </div>

  <!--   <div class="panel">
        <div class="panel-heading">
            <h4>Dashboard</h4>
        </div>
        <div class="panel-body">

            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-user"></i>
                                <span class="pull-right">

                                    <?php 
									$pelanggan = mysqli_query($koneksi, "select * from pelanggan");
									echo mysqli_num_rows($pelanggan);
									?>
                                </span>
                            </h1>
                            Jumlah Pelanggan
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-retweet"></i>
                                <span class="pull-right">

                                    <?php 
									$proses = mysqli_query($koneksi, "select * from transaksi where transaksi_status='0'");
									echo mysqli_num_rows($proses);
									?>
                                </span>
                            </h1>
                            Jumlah Cucian Di Proses
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-info-sign"></i>
                                <span class="pull-right">

                                    <?php 
									$proses = mysqli_query($koneksi, "select * from transaksi where transaksi_status='1'");
									echo mysqli_num_rows($proses);
									?>
                                </span>
                            </h1>
                            Jumlah Cucian Siap Ambil
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-ok-circle"></i>
                                <span class="pull-right">

                                    <?php 
									$proses = mysqli_query($koneksi, "select * from transaksi where transaksi_status='2'");
									echo mysqli_num_rows($proses);
									?>
                                </span>
                            </h1>
                            Jumlah Cucian Selesai
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> -->

    <div class="panel">
        <div class="panel-heading text-center">
            <h4>Grafik Masyrakat Tidak Mampu</h4>
        </div>
        <div class="panel-body">
         <div>
        <canvas id="myChart"></canvas>
    </div>
        </div>
    </div>


</div>

</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["KAYU LANGKA", "KASIWA INDUK", "KASIWA TENGAH", "KASIWA TIMUR","PUNCAK SELATAN", "PUNCAK UTARA", "DANGA","PARUNG-PARUNG","SO’DO","BINANGA","GALUNG"],
            datasets: [{
                label: '# Jumlah Warga',
                data: [
                <?php 
                    $jumlah_2 = mysqli_query($koneksi,"select * from penduduk where penduduk_lingkungan='2'");
                    echo mysqli_num_rows($jumlah_2);
                    ?>,
                      <?php 
                    $jumlah_3 = mysqli_query($koneksi,"select * from penduduk where penduduk_lingkungan='3'");
                    echo mysqli_num_rows($jumlah_3);
                    ?>,  
                      <?php 
                    $jumlah_4 = mysqli_query($koneksi,"select * from penduduk where penduduk_lingkungan='4'");
                    echo mysqli_num_rows($jumlah_4);
                    ?>, 
                       <?php 
                    $jumlah_5 = mysqli_query($koneksi,"select * from penduduk where penduduk_lingkungan='5'");
                    echo mysqli_num_rows($jumlah_5);
                    ?>,   
                     <?php 
                    $jumlah_6 = mysqli_query($koneksi,"select * from penduduk where penduduk_lingkungan='6'");
                    echo mysqli_num_rows($jumlah_6);
                    ?>,   
                     <?php 
                    $jumlah_7 = mysqli_query($koneksi,"select * from penduduk where penduduk_lingkungan='7'");
                    echo mysqli_num_rows($jumlah_7);
                    ?>,   
                     <?php 
                    $jumlah_8 = mysqli_query($koneksi,"select * from penduduk where penduduk_lingkungan='8'");
                    echo mysqli_num_rows($jumlah_8);
                    ?>,   
                     <?php 
                    $jumlah_9 = mysqli_query($koneksi,"select * from penduduk where penduduk_lingkungan='9'");
                    echo mysqli_num_rows($jumlah_9);
                    ?>,   
                     <?php 
                    $jumlah_10 = mysqli_query($koneksi,"select * from penduduk where penduduk_lingkungan='10'");
                    echo mysqli_num_rows($jumlah_10);
                    ?>,   
                     <?php 
                    $jumlah_11 = mysqli_query($koneksi,"select * from penduduk where penduduk_lingkungan='11'");
                    echo mysqli_num_rows($jumlah_11);
                    ?>,
                      <?php 
                    $jumlah_12 = mysqli_query($koneksi,"select * from penduduk where penduduk_lingkungan='12'");
                    echo mysqli_num_rows($jumlah_11);
                    ?>,   
                    ],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
</html>
<?php include 'footer.php'; ?> 