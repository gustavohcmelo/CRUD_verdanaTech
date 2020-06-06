<?php

namespace Verdanatech\Model;

use \Verdanatech\DB\Sql;

class Products {

    public static function listAll() {
        
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_produtos a INNER JOIN tb_type_product b USING(idtype) INNER JOIN tb_clients c USING(id_clients);");
    }
}

?>