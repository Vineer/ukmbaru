
    <div class="modal fade" id="modalprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url().'ukm/updateprofile_mhs' ?>" method="post" action="">
           <div class="form-group">
              <img class="img-responsive" src="<?php echo base_url()?>assets/images/avatar.jpg " alt=""><br>
              <label class="control-label">* Foto Yang Ingin Dirubah</label>
              <input type="file" class="form-control" name="name1" id="name1">
            </div>
           <div class="form-group">
              <label class="control-label" >* NAMA</label>
              <input type="text" class="form-control" value="<?= $mahasiswa['nama']?>" name="nama">
            </div>
            <div class="form-group">
              <label class="control-label" for="passwordlabel">* NIM</label>
              <input type="text" class="form-control" value="<?= $mahasiswa['nim']?>"" name="nim" id="name2">
            </div>
            <div class="form-group">
              <label class="control-label" for="passwordll">* FAKULTAS</label>
              <input type="text" class="form-control" value="<?= $mahasiswa['fakultas']?>" name="fakultas" id="name3">
            </div>
            <div class="form-group">
              <label class="control-label" for="passwordlabel">* JURUSAN</label>
              <input type="text" class="form-control" value="<?= $mahasiswa['jurusan']?>" name="jurusan" id="name3">
            </div>
            <div class="form-group">
              <label class="control-label" for="passwordlabel">* EMAIL</label>
              <input type="text" class="form-control" value="<?= $mahasiswa['email']?>" name="email" id="name3">
            </div>
            <div class="form-group">
              <label class="control-label" for="passwordlabel">* NO TELP</label>
              <input type="text" class="form-control" value="<?= $mahasiswa['no_telp']?>" name="no_telp" id="name3">
            </div>
            <div class="form-group">
              <button type="submit" class="btn-default btn">Ubah Profile</button>
            </div>
        </form> <!-- end Form -->
      </div>
    </div>
  </div>
</div>
<footer>

                 
        <!--top-->

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        Copyright 2017 © <span class="text-blue">InterUKM.</span> <a href="#" class="text-yellow"></a>
                    </div>
                    <!--left-->

                    
                </div>
            </div>
        </div> 
    </footer>