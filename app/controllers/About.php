<?php 

class About extends Controller{
    public function index(){
        $data['css'] = ["about-media.css",
                        "about.css",
                        "layanan.css"];
        $data['title'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}