<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash()?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari" autocomplete="off">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
    
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                    <?php foreach( $data['mhs'] as $mhs) : ?>
                        <li class="list-group-item">
                            <?= $mhs['nama']; ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs ['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ingin menghapus data');">Hapus</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs ['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs ['id']; ?>" class="badge badge-primary float-right ml-1">Detail</a>            
                        </li>
                <?php endforeach; ?>
            </ul> 
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>

                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="number" class="form-control" id="npm" name="npm">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" name="jurusan" id="jurusan">
                    <option value ="Teknik Informatika">Teknik Informatika</option>
                    <option value ="Teknik Arsitektur">Teknik Arsitektur</option>
                    <option value ="Teknik Matematika dan IPA">Teknik Matematika dan IPA</option>
                    <option value ="Pendidikan Bahasa Indonesia">Pendidikan Bahasa Indonesia</option>
                    </select>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
              </form>
            </div>
        </div>
  </div>
</div>