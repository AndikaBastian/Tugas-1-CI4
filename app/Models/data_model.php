<?php

class data_model{
    
    public function get_data(){
        return array(
            array('id' => 1, 'nama' => 'R5 5900hx', 'harga' => '2.800.000'),
            array('id' => 2, 'nama' => 'RTX3060', 'harga' => '3.800.000'),
            array('id' => 3, 'nama' => 'acer nitro V', 'harga' => '10.800.000'),
        );
    }

    public function get_data_by_id($id){
        $data = $this->get_data();
        foreach($data as $data){
            if($data['id'] == $id){
                return $data;
            }
        }
        return false;
    }
}