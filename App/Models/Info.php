<?php
    namespace App\Models;

    use MF\Model\Model;

    class Info extends Model{
        public function getInfo(){
            //return $produtos;
            $query = "select id, titulo, descricao from tb_info";
            return $this->db->query($query)->fetchAll(\PDO::FETCH_ASSOC);
        }
    }

?>