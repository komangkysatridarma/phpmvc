<div class="container mt-5">

<div class="d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
        <!-- <img src="<?= BASEURL ?>/img/<?= $data['gambar'] ?>" class="card-img-top" alt="..."> -->
        <div class="card-body">
            <h5 class="card-title">Profil</h5>
            <p class="card-text">
                Nama: <?= $data['siswa']['nama'] ?>
                <br>
                Nis: <?= $data['siswa']['nis'] ?>
                <br>
                Email: <?= $data['siswa']['email'] ?>
                <br>
                Jurusan: <?= $data['siswa']['jurusan'] ?>
                </p>
            <a href="<?= BASEURL ?>/siswa" class="btn btn-primary">Kembali</a>
        </div>
        </div>
        </div> 

</div>