<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $data['judul']; ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="TemplatesJungle">
  <meta name="keywords" content="Online Store">
  <meta name="description" content="<?= $data['judul']; ?>">

  <link rel="stylesheet" href="<?= BASEURL; ?>/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,900;1,900&family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
    rel="stylesheet">
</head>

<body>


  <div class="container mt-5">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
      <div class="container"><img src="<?= $data['products']['gambar']; ?>"width="60%" height="60%" class="rounded mb-2 ml-10" alt=""></div>
        <h5 class="card-title"><?= $data['products']['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['products']['harga']; ?></h6>
        <p class="card-text"><?= $data['products']['deskripsi']; ?></p>
      
        <a href="<?= BASEURL; ?>/product" class="card-link btn btn-secondary rounded">Kembali</a>
      </div>
    </div>
  </div>

</body>