<?php

class SetupController extends Controller{
    public function index(){ 
        $setupModel = $this->model('setupModel');
        $setupModel->createTable();
        if (count($this->model('AnggotaModel')->getAllAnggota()) <= 0) {
            $setupModel->insertIntoAnggota();
        }
        if (count($this->model('BukuModel')->getAllBuku()) <= 0) {
            $setupModel->insertIntoBuku();
        }
        if (count($this->model('PeminjamanModel')->getJoinedPeminjaman()) <= 0) {
            $setupModel->insertIntoPeminjaman();
        }
        $data['judul'] = "Setup Database dan Table";
        $this->view('templates/header', $data);
        $this->view('setup/index');
        echo "Berhasil Create Database dan Table";
        $this->view('templates/footer');
    }
}