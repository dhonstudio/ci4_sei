<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Home extends BaseController
{
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }

    public function index()
    {
        $this->data['testimonials'] = $this->dhonrequest->get('testimonial/getall')['data'];

        return view('home', $this->data);
    }

    public function course_reguler()
    {
        return view('course/reguler', $this->data);
    }

    public function course_inhouse()
    {
        return view('course/inhouse', $this->data);
    }
}
