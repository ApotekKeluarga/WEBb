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

    <?php $this->load->view('Search'); ?>
      <!-- Panel Table Add Row -->
      <div class="panel">
        <header class="panel-heading">
          <h3 class="panel-title">Detail Pesan</h3>
        </header>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-15">
              </div>
            </div>
          
		    <table class="table table-bordered" width="100%" cellspacing="0">
		      <thead class="bg-light">
            <h3 class="panel-body"> PEMESAN </h3>
            
           <tr>
            <td>Nama </td>
            <td>:</td>
          </tr>
          <?php
              foreach($detail as $d){
            ?>
          <tr>
            <td><?php echo $d -> No_telp ?></td>
          </tr>
          <?php } ?>
		    </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Table Add Row -->   

    </div>
  </div>
  <!-- End Page -->

<?php $this->load->view('Home/Footer'); ?>