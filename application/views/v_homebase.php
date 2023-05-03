<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Data Otomotif - PT XYZ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url();?>assets1/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets1/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url();?>assets1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url();?>assets1/css/style.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
  
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->



    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Data otomotif</h6>
                <h1 class="mb-5">PT XYZ</h1>
            </div>
            <div class="row g-4">
            <table id="spTable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                        <td align="center"><strong>No</stong></td>
                        <td align="center"><strong>Merk Produk</stong></td>
                        <td align="center"><strong>Jenis Produk</stong></td>
                        <td align="center"><strong>Jumlah Stok</stong></td>
                        <td align="center"><strong>Harga</stong></td>
                        <td align="center"><strong>Keterangan</stong></td>
                        <td align="center"><strong><a href="<?php echo site_url('Main_user/tambahotomotif');?>" class="btn btn-success btn-sm" >Tambah Data</a></stong></td>
                        </tr>
                      </thead>


                      <tbody>
                      <?php 
                        $no=1;
                        foreach($mobil as $a){ 
                    
                            ?>
                                <tr>
                                    <td align="center"><?php echo $no++ ?></td>
                                    <td align="left"><?php echo $a['merk_produk']?></td>
                                    <td align="center"><?php echo $a['jenis_produk']?></td>
                                    <td align="center"><?php echo $a['jumlah_stok']?></td>
                                    <td align="right"><?php echo number_format($a['harga'], 2, '.', ',');?></td>
                                    <td align="left"><?php echo $a['keterangan']?></td>
                                    <td align="center"><a href="<?php echo site_url('Main_user/editotomotif/'.$a['id_produk']);?>" class="btn btn-warning btn-sm" >Edit</a>
                                    <a href="<?php echo site_url('Main_user/deleteotomotif/'.$a['id_produk']);?>" class="btn btn-danger btn-sm" >X</a></td>
                                </tr>
                               
                     <?php } ?>
                      </tbody>
                    </table>
            </div>
        </div>
    </div>
    <!-- Team End -->
        

 

     <!-- Footer Start -->
     <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
     
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="<?php echo site_url('Main_user/homebase');?>">PT XYZ</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://ub.ac.id/">PT XYZ</a>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets1/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url();?>assets1/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url();?>assets1/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets1/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url();?>assets1/js/main.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
    <script>
        $('#spTable').DataTable({
});
    </script>
</body>

</html>