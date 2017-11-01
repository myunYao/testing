<?php 
class Singer extends CI_Controller{
    
    function Singer(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('SingerModel');
    }

     function index(){
         //通过SingerModel调研getSinger返回了歌手的数据
         $data['singers'] = $this->SingerModel->getSinger();
         //2,把数据传到页面里面显示
         $this->load->view('singer',$data);

    }
}
?>