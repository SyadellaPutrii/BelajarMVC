<?php

class About {
    public function index() {
        echo"Nama Saya Syadella, Pekerjaan Saya Programmer";
    }

    public function page($name ='Syadella', $pekerjaan = 'programmer') {
        echo "Halo, nama saya $name, pekerjaan saya $pekerjaan";
    }
}