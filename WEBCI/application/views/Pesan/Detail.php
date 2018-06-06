<?php $this->load->view('Home/js'); ?>
<?php $this->load->view('Home/Navbar'); ?>
<?php $this->load->view('Home/Sidebar'); ?>
</div>
 <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">DataTables</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
        <li class="breadcrumb-item active">DataTables</li>
      </ol>
    </div>
    
    <!-- awal page content -->
  <div class="panel">
        <header class="panel-heading">
          <h3 class="panel-title">Pesan</h3>
        </header>
        <div class="panel-body">
        <table class="table table-bordered" width="33%" cellspacing="0">
          <thead >
            <tr>
              <td width="28%">Nama User</td>
              <td width="3%"> : </td>
              <td width="69%"><?php echo $kd_user; ?></td>
            </tr>
            <tr>
              <td width="28%">No telp</td>
              <td width="3%"> : </td>
              <td width="69%"><?php echo $No_telp; ?></td>
            </tr>
            <tr>
              <td width="28%">Tanggal Order</td>
              <td width="3%"> : </td>
              <td width="69%"><?php echo $Tgl_order; ?></td>
            </tr>
            <tr>
              <td width="28%">Detail Alamat</td>
              <td width="3%"> : </td>
              <td width="69%"><?php echo $Detail_alamat; ?></td>
            </tr>
            <tr>
              <td width="28%">Proses Pengiriman</td>
              <td width="3%"> : </td>
              <td width="69%"><?php echo $mtd_pengirman; ?></td>
            </tr>
            <tr>
              <td width="28%">Proses Pembayaran</td>
              <td width="3%"> : </td>
              <td width="69%"><?php echo $mtd_pembayaran; ?></td>
            </tr>
        </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
    <!-- akhir page content -->
  </div>
  <!-- End Page -->

<?php $this->load->view('Home/Footer'); ?>