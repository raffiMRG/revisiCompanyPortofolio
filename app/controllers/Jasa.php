<?php 
class Jasa extends Controller{
    public function index(){
        $data['css'] = ["jasa-media.css",
                        "layanan.css",
                        "pengalaman.css",
                        "testimonial.css"];
        $data['title'] = 'Jasa';
        $data['waveColor'] = "#fff";
        $this->view('templates/header', $data);
        $this->view('jasa/index', $data);
        $this->view('templates/footer');
    }
}