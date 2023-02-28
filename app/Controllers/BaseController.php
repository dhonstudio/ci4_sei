<?php

namespace App\Controllers;

use Assets\Ci4_libraries\DhonHit;
use Assets\Ci4_libraries\DhonRequest;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Assets path.
     *
     * @var string
     */
    protected $assets = 'http://localhost/assets/';

    /**
     * Git assets path.
     *
     * @var string
     */
    protected $git_assets = '/../../../assets/';

    /**
     * API URL.
     *
     * @var string
     */
    protected $api_url = 'http://localhost/ci4_sei_api/';

    /**
     * API auth if use basic auth.
     *
     * @var string[]
     */
    protected $api_auth = ['admin', 'admin'];

    /**
     * Enabler page hit traffic.
     *
     * @var boolean
     */
    protected $hit_traffic = true;

    /**
     * Dhon Studio library for connect API.
     * Run `git clone https://github.com/dhonstudio/ci4_libraries.git` in your git assets path.
     *
     * @var DhonRequest
     */
    protected $dhonrequest;

    /**
     * Dhon Studio library for create page hit traffic.
     * Run `git clone https://github.com/dhonstudio/ci4_libraries.git` in your git assets path.
     *
     * @var DhonHit
     */
    protected $dhonhit;

    /**
     * Default data for Views.
     *
     * @var mixed
     */
    protected $data;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();

        $this->_initLibraries([
            'dhonrequest_version'   => "1.0.0",
            'dhonhit_version'       => "1.0.0",
        ]);

        $this->data = [
            'lang'      => 'id', // default is `en`
            'meta'      => [
                'keywords'      => 'sekolah ekspor impor, sei, dhon studio, dhonstudio, dhonstudio.com',
                'author'        => 'TemplateMo',
                'generator'     => null,
                'ogimage'       => $this->assets . 'sei/img/LOGO SEKOLAH EKSPOR IMPOR biru tua.jpg',
                'description'   => 'Sekolah Ekspor Impor adalah Platform Pendidikan dan Pelatihan peraturan dan prosedur Impor, Ekspor, Logistik, dan Kepabeanan di Indonesia. Menyelenggarakan Training Persiapan Ujian Negara Ahli Kepabeanan dan Webinar. Sejak tahun 2021 senantiasa memberikan yang terbaik dengan mengedepankan kualitas layanan dan kepuasan para peserta dan pengguna layanan.',
            ],
            'favicon'   => $this->assets . "sei/img/Icon2.png",
            'title'     => 'Sekolah Ekspor Impor', // default is `Home`

            'email'         => 'admin@sekolaheksporimpor.id',
            'whatsapp'      => '6282147674761',
            'whatsapp_'     => '62821-476-74-761',
            'whatsapp_link' => 'https://wa.me/6282147674761',
            'github'        => 'https://github.com/dhonstudio',
            'instagram'     => 'https://instagram.com/sekolaheksporimpor.id',
            'address'       => 'Jakarta Timur, Indonesia',
            'telegramgroup' => 'https://t.me/sekolaheksporimp',
            'telegram'      => 'https://t.me/channelSEI',

            'reguler_course_fee'            => 'IDR 7.000 K',
            'reguler_course_fee_promo'      => 'IDR 1.750 K',
            'online_course_fee_promo'       => 'IDR 3.000 K',
            'offline_course_fee_promo'      => 'IDR 6.800 K',
            'expert_course_fee_promo'       => 'IDR 3.000 K',
            'reguler_course_fee_rp'         => 'Rp 7.000.000,-',
            'reguler_course_fee_promo_rp'   => 'Rp 1.750.000,-',
            'online_course_fee_promo_rp'    => 'Rp 3.000.000,-',
            'offline_course_fee_promo_rp'   => 'Rp 6.800.000,-',
            'batch'         => '18 MARET - 10 JUNI 2023',
            'batch_open'    => '28 Februari 2023',
            'batch_close'   => '17 Maret 2023',
            'batch_start'   => ['Maret', '18'],

            'css'   => '
                <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                <link href="' . $this->assets . 'vendor/templatemo_edu_meeting/' . 'vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_edu_meeting/' . 'assets/css/templatemo-edu-meeting.css">
                <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_edu_meeting/' . 'assets/css/owl.css">
                <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_edu_meeting/' . 'assets/css/lightbox.css">
            ',
        ];

        $this->_initData();
    }

    /**
     * Initialize additional libraries.
     */
    private function _initLibraries($params)
    {
        require __DIR__ . $this->git_assets . 'ci4_libraries/DhonRequest-' . $params['dhonrequest_version'] . '.php';
        $this->dhonrequest = new DhonRequest([
            'api_url'   => $this->api_url,
            'api_auth'  => $this->api_auth,
        ]);

        if ($this->hit_traffic) {
            require __DIR__ . $this->git_assets . 'ci4_libraries/DhonHit-' . $params['dhonhit_version'] . '.php';
            $this->dhonhit = new DhonHit();

            $this->dhonhit->dhonrequest = $this->dhonrequest;
            // $this->dhonhit->collect();
        }
    }

    /**
     * Initialize additional data.
     */
    private function _initData()
    {
        $this->data['assets']       = $this->assets;
        $this->data['git_assets']   = $this->git_assets;
    }
}
