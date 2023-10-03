<div class="container mt-3">

<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal" style="margin-bottom:1.2rem;">
        Tambah Data Siswa
    </button>

        <h3>Daftar Siswa</h3>
        <ul class="list-group">
            <?php foreach($data['siswa'] as $siswa ) : ?>
            <li class="list-group-item"><?= $siswa['nama'] ?> 
                <a href="<?= BASEURL ?>/siswa/detail/<?= $siswa['id'] ?>" class="badge text-bg-info">Detail</a>
                <a href="<?= BASEURL ?>/siswa/hapus/<?= $siswa['id'] ?>" class="badge text-bg-info" onclick="return confirm('yakin?');">Hapus</a>
            </li>
               
            <?php endforeach; ?>
        </ul>

        <!-- <?php foreach($data['siswa'] as $siswa ) : ?>

            <ul>
                <li><?= $siswa['nama'] ?></li>
                <li><?= $siswa['nis'] ?></li>
                <li><?= $siswa['email'] ?></li>
                <li><?= $siswa['jurusan'] ?></li>
            </ul>

            <?php endforeach; ?> -->
    </div>
</div>

</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ?>/siswa/tambah" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama">
            </div>
        <div class="mb-3">
            <label for="nis" class="form-label">Nis</label>
            <input type="number" name="nis" class="form-control" id="nis" aria-describedby="emailHelp" placeholder="Masukkan Nis">
            </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan Email">
            </div>
            <label for="jurusan"></label>
            <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                <option selected>Jurusan</option>
                <option value="PPLG">PPLG</option>
                <option value="TJKT">TJKT</option>
                <option value="DKV">DKV</option>
                <option value="MPLB">MPLB</option>
                <option value="PMN">PMN</option>
                <option value="KLN">KLN</option>
            </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
        </form>
    </div>
  </div>
</div>