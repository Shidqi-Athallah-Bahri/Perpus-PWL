<?php
class Flasher{

    public static function setFlash($pesan, $aksi, $tipe){
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash(){
        if (isset($_SESSION['flash'])) {
         echo '
        <div class="flasher ' . $_SESSION['flash']['tipe'] . '">
        <span class="flasher-icon">⚡</span>
        <span class="flasher-message">' . $_SESSION['flash']['pesan'] . ' ' . $_SESSION['flash']['aksi'] . '</span>
        <span class="flasher-close" onclick="this.parentElement.style.display=\'none\'">&times;</span>
    </div>
    ';
    unset($_SESSION['flash']);
        }
    }
}