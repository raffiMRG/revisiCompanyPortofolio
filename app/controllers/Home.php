<?php 

class Home extends Controller{
    public function index(){
        // sisahkan css devault header, header-media, hero, footer, & jonchat karna semua css itu bersifat default untuk semua halaman
        // bikin function untuk memasukan css tambahan
        // masukan kedalam array data['css'] = {nama_css} agar dapat di foreach di dalam header
        // kirim kedalam parameter view
        $data['css'] = ["home-media.css",
                        "layanan.css",
                        "penggunaan.css",
                        "about.css",
                        "home-proyek.css",
                        "mitra.css",
                        "testimonial.css",
                        "staff.css",
                        "epilog.css"];
        $data['title'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}