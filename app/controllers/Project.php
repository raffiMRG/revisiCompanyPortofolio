<?php 

class Project extends Controller{
    public function index(){
        $data['css'] = ["project-media.css",
                        "project-proyect.css",
                        "penggunaan.css",
                        "penggunaan.css",
                        "project-testimonial.css",
                        "mitra.css"];
        $data['title'] = 'Project';
        $data['waveColor'] = "#fff";
        $this->view('templates/header', $data);
        $this->view('project/index', $data);
        $this->view('templates/footer');
    }
}