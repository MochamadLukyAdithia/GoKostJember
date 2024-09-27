<!DOCTYPE html>
<html lang="en">

<head>
  <title>Halaman <?= $data['judul'] ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASEURL ?>/css/bootstrap.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,900;1,900&family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
    rel="stylesheet">
</head>

<body>

  <div class="container mt-3">
    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
          Tambah Data product
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/product/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari product.." name="keyword" id="keyword" autocomplete="off" required>
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <h3>Daftar product</h3>
        <ul class="list-group">
          <?php foreach ($data['products'] as $products) : ?>
            <li class="list-group-item">
              <?= $products['nama']; ?>
              <a href="<?= BASEURL; ?>/product/hapus/<?= $products['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
              <a href="<?= BASEURL; ?>/product/ubah/<?= $products['id']; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $products['id']; ?>">ubah</a>
              <a href="<?= BASEURL; ?>/product/detail/<?= $products['id']; ?>" class="badge badge-primary float-right">detail</a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="judulModal">Tambah Produk</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="<?= BASEURL ?>/product/tambah" method="post">
              <div class="mb-3">
                <label for="inputNama" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="inputNama" name="nama">
              </div>
              <div class="mb-3">
                <label for="inputHarga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="inputHarga" name="harga">
              </div>
              <div class="mb-3">
                <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="inputDeskripsi" name="deskripsi">
              </div>
              <div class="input-group mb-3">
                <label class="input-group-text" for="inputFile">Upload Gambar Produk</label>
                <input type="file" class="form-control" id="inputFile" name="gambar">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="<?= BASEURL ?>/js/bootstrap.js"></script>


</body>

</html>