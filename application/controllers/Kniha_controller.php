<?php defined('BASEPATH') or exit('No direct script access allowed');
class Kniha_controller extends CI_Controller
{
function  __construct()
    {
 parent:: __construct();
         $this->load->model('kniha_model');
    }
    public function menu()
    {
                  $data['polozky'] = $this->kniha_model->get_menu_kategorie();
                $config['base_url'] = 'http://localhost/maturitaknihy/kniha_controller/menu';
             $this->load->view('layout/hlavicka', $data);
              $this->load->view('layout/paticka');
    }
    public function obal($id) 
    {
        $data['knihy'] = $this->kniha_model->get_obal($id);
            $data['polozky'] = $this->kniha_model->get_menu_kategorie();
          $this->load->view('layout/hlavicka', $data);
          $this->load->view('content/obal');
          $this->load->view('layout/paticka');
    }
    public function rozdeleni($id) 
    {
            $data['knihy'] = $this->kniha_model->get_page($id);
            $data['polozky'] = $this->kniha_model->get_menu_kategorie();
             $this->load->view('layout/hlavicka', $data);
              $this->load->view('content/page');
               $this->load->view('layout/paticka');
    }

}
