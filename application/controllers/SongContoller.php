<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SongContoller extends CI_Controller {

    function SongContoller(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('SongModel');
    }

    public function index()
    {

        //1, 从数据库里面取得数据
         $data['songs']=  $this->SongModel->getSong();
        //2,把数据给视图显示出来
       $this->load->view('song',$data);
    }
}
