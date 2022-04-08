<?php

class cadastroproduto {

    var $db;

    function __construct($bd){

        $this->bd = $bd;
    }

    function listar($id=null){

        $id = preg_replace( '/\D/', '', $id);

        $strSql = !empty($id) ? "WHERE id = $id " : '';

        $sql = 'SELECT id, titulo, categoria, preco, modelo, marca, descricao, imagem 
                FROM produto '.$strSql.' ORDER BY id';
        
        foreach ($this->bd->query($sql) as $registro) {

            $lista[$registro['id']] = $registro;  
            
        }
        if (isset($lista)){
        return $lista;
        }
    }

    function excluir($id){

        $id = preg_replace( '/\D/ ', '', $id );

       if($this->bd->query("DELETE FROM produto WHERE id = $id")){

             return true;

       }else{

        return false;

       }
    }

}
