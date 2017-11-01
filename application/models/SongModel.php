<?php

class SongModel extends CI_Model
{

    function SongModel()
    {
        $this->load->database();
    }

    function getSong(){
        //1，编写sql语句
        $sql = "select * from song";
       //2,进行查询
       $data= $this->db->query($sql);

        return $data->result_array();
    }


}
?>