<?php 

class Product extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Product';
        $data['products'] = $this->model('Product_model')->getAllProduct();
        $this->view('product/index', $data);
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Produk';
        $data['products'] = $this->model('Product_model')->getProductById($id);
        $this->view('product/detail', $data);
    }

    public function tambah()
    {
        if( $this->model('Product_model')->tambahDataProduct($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/product');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Product');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Product_model')->hapusDataProduct($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/product');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/product');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Product_model')->getProductById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Product_model')->ubahDataProduct($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/product');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/product');
            exit;
        } 
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Product';
        $data['products'] = $this->model('Product_model')->cariDataProduct();
        $this->view('product/index', $data);
    }

}