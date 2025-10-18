<?php

class Anggota extends Controller{

    public function index(){
         $data['judul'] = "Daftar Anggota";
        $data['anggota'] = $this->model('AnggotaModel')->getAllAnggota();
        $this->view('templates/header', $data);
        $this->view('anggota/index', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        $data['judul'] = "Tambah Data Anggota";
        $this->view('templates/header', $data);
        $this->view('anggota/tambah', $data);
        $this->view('templates/footer');
    }

    public function tambahDataAnggota(){
        if($this->model('AnggotaModel')->addAnggota($_POST) > 0 ) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/anggota');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'error');
            header('Location: ' . BASEURL . '/anggota');
            exit;
        }
    }

    public function ubah($id_anggota){
        $data['judul'] = "Ubah Data Anggota";
        $data['anggota'] = $this->model('AnggotaModel')->getAnggotaById($id_anggota);
        $this->view('templates/header', $data);
        $this->view('anggota/ubah', $data);
        $this->view('templates/footer');
    }

    public function ubahAnggota(){
        if($this->model('AnggotaModel')->updateAnggota($_POST) > 0 ) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/anggota');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diubah', 'error');
            header('Location: ' . BASEURL . '/anggota');
            exit;
        }
    }

    public function hapus($id_anggota){
        if( $this->model('AnggotaModel')->deleteAnggota($id_anggota) > 0 ) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/anggota');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/anggota');
            exit;
        }
    }
}