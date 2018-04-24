<?php

namespace App\Controllers;

class PagesController
{
    /**
     * Show the home page.
     */
    public function home()
    {
        return view('index');
    }

    public function makePdf()
    {
        $semnatura = $_POST['semnatura'];

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Hello world!</h1><br><br><img src="'.$semnatura.'">');
        $mpdf->Output('filename.pdf','D');
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        $company = 'Laracasts';
        return view('about', ['company' => $company]);
    }

    /**
     * Show the contact page.
     */
    public function contact()
    {
        return view('contact');
    }
}
