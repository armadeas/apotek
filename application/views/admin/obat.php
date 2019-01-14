
<div class="jumbotron text-center">
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <h1>
        <a href="<?= site_url('admin/obat/daftar');?>" style="color:white" data-toggle="tooltip" data-placement="bottom" title="Daftar Obat">
          <span class="glyphicon glyphicon-search"></span><br>
          Daftar Obat
        </a>
      </h1>
    </div>
    <div class="col-sm-12 col-md-6">
      <h1>
        <a href="<?= site_url('admin/obat/tambah');?>" style="color:white" data-toggle="tooltip" data-placement="bottom" title="Tambah Obat">
          <span class="glyphicon glyphicon-plus"></span><br>          
          Tambah Obat
        </a>
      </h1>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  })
</script>
