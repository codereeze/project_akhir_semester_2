<?php

namespace App\Controllers;

use Libraries\Controller;

class CompanyController extends Controller
{
    public function terms_conditions()
    {
        return $this->render('company/terms_conditions', [
            'title' => 'Syarat dan Ketentuan Redybag'
        ]);
    }

    public function privacy_policy()
    {
        return $this->render('company/privacy_policy', [
            'title' => 'Kebijakan Privasi'
        ]);
    }

    public function contact()
    {
        return $this->render('company/contact', [
            'title' => 'Kontak Kami'
        ]);
    }

    public function about()
    {
        return $this->render('company/about', [
            'title' => 'Tentang Perusahaan Kami'
        ]);
    }

    public function news()
    {
        return $this->render('company/news', [
            'title' => 'Berita dan Artikel Kami'
        ]);
    }
}
