<?php
class Affiliates extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Affiliate_model','affiliate');
    }

    public function index(){
        $data['affiliates'] = $this->affiliate->getAll();
        $this->load->view('admin/affiliate_list',$data);
    }

    public function add(){
        if($_POST){
            $this->affiliate->insert([
                'keyword' => $this->input->post('keyword'),
                'affiliate_url' => $this->input->post('affiliate_url'),
                'platform' => $this->input->post('platform')
            ]);
            redirect('admin/affiliates');
        }
        $this->load->view('admin/affiliate_form');
    }
}
