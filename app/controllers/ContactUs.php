<?php 

class ContactUs extends Controller{
    public function index(){
        $data['css'] = ["contact-us-media.css",
                        "contact.css",
                        "alamat.css"];
        $data['title'] = 'HUBUNGI KAMI';
        $data['waveColor'] = "#fff";
        $this->view('templates/header', $data);
        $this->view('contactUs/index', $data);
        $this->view('templates/footer');
    }
}