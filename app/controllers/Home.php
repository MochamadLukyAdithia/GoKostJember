<?php 

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['products'] = $this->model('Product_model')->getAllProduct();
        $this->view('home/index', $data);
    }
    public function detail($id)
    {
        $data['judul'] = 'Home';
        $data['products'] = $this->model('Product_model')->getProductById($id);
        $this->view('home/detail', $data);
    }
}