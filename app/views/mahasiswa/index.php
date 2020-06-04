<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
           <?php Flasher::flash(); ?>
        </div>
      </div>

      <div class="row mb-3">
      <div class="col-lg-6">
          <button type="button" class="btn btn-primary tombol;TambahData" data-toggle="modal" data-target="#formModal">
           Tambah Data Mahasiswa 
            </button>
          </div>
       </div>

  <div class="row mb-3">
      <div class="col-lg-6">
         <form action="<? BASEURL; ?>/mahasiswa/cari" method="post">
             <div class="input-gruop ">
              <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplete="off"> 
            <div class="input-group-append">
             <button class="btn btn-primary" type="submit" id="tombolcari">Cari></Button>
            </div>
         </div> 
         </form>
          </div>
       </div>      

<div class="row">
 <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach( $data['mhs'] as $mhs ) : ?>
                    <li class="list-group-item">
                    <?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<? $mhs['id'] ?>">ubah</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right">detail</a>
                 </li>
                <?php endforeach; ?>
            </ul>
           
        </div>
    </div>
</div>

<!-- Modal --> 
<div class="modal fade" id="formModal" tabindex="-1" role="dialog"
aria-labelledby="judulModal" aria-hiddem="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-tittle" id="formModalLabel">Tambah Data Mahasiswa</h5>
         <button type="button" class="close" data-disniss="modal" 
        aria-label="close">
              <span aria-hidden="true">&times;</span>
           </button>
        </div>
        <div class="modal-body">
           
           <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
           <input type="hidden" name="id" id=id>
           <div class="form-group">
           <label for="nama">Nama</label>
           <input type="text" class="form-control" id="nama" name="nama">
           </div>

           <div class="form-group">
           <label for="nrp">NRP</label>
           <input type="number" class="form-control" id="nrp" name="nrp">
           </div>

           <div class="form-group">
           <label for="email">Email</label>
           <input type="email" class="form-control" id="email" name="email">
           </div>

        <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <select class="form-control" id="jurusan" name="jurusan">
        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
        <option value="Multimedia">Multimedia</option>
        <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
        </select>
        </div>

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
        data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
          </div>
        </div>
      </div>
   </div>