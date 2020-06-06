<?php

namespace Verdanatech;

use Rain\Tpl;

class Page {

    private $tpl;
    private $options = [];
    private $defaults = [
        "data"=>[]
    ];

    public function __construct($opcoes = array()) {
        
        $this->options = array_merge($this->defaults, $opcoes);

        $config = array(
            "tpl_dir"       => $_SERVER["DOCUMENT_ROOT"] . "/viewes/",
            "cache_dir"     => $_SERVER["DOCUMENT_ROOT"] . "/viewes-cache/",
            "debug"         => false // set to false to improve the speed
        );

        Tpl::configure( $config );

        $this->tpl = new Tpl;

        foreach($this->options["data"] as $key => $values) {
            $this->tpl->assign($key, $value);
        }

        $this->tpl->draw("header");
    }

    public function setTpl($name, $data = array(), $returnHTML = false) {

        foreach($data as $key => $value) {
            $this->tpl->assign($key, $value);
        }

        return $this->tpl->draw($name, $returnHTML);

    }

    public function __destruct() {

        $this->tpl->draw("footer");
    }
}
?>