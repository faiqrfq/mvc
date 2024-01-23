<?php

class Siswa extends Controller{
    

    public function index(){

        $data['nama'] = 'Fadli';

        $this->view("siswa/index", $data);

    }

    public function biodata(){
        echo "ini adalah siswa biodata";
    }
}