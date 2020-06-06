<?php

namespace Verdanatech\Model;

use \Verdanatech\DB\Sql;

class Clients {

    public static function listAll() {
        
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_clients");
    }

    public function save() {

        $id             = $_POST['id_clients'];
        $fantasy_name   = $_POST['fantasy_name'];
        $company_name   = $_POST['company_name'];
        $street         = $_POST['street'];
        $number         = $_POST['number'];
        $postal_code    = $_POST['postal_code'];
        $country        = $_POST['country'];
        $type           = $_POST['type'] = ( isset($_POST['bike']) ) ? true : null;
        $status         = $_POST['status'];
        $city           = $_POST['city'];
        $neighborhood   = $_POST['neighborhood'];
        $state          = $_POST['state'];

        $sql = new Sql();



        $sql->select("CALL sp_clients_save ('$id',
        '$fantasy_name',
        '$company_name',
        '$street',
        '$number',
        '$postal_code',
        '$country',
        $type,
        $status,
        '$city',
        '$neighborhood',
        '$state')");

    }
}

?>