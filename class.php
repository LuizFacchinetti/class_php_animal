<!-- Raças -->

<?php

class Animal
{
    //privados
    private $raca;
    private $idade;
    private $cor_pele;
    //publicos
    public $name;
    public $comestivel;


    function __construct($praca = '', $pidade = 0, $pcor_pele = '',$pname ='', $pcomestivel = '')
    {
        $this->raca = $praca;
        $this->idade = $pidade;
        $this->cor_pele = $pcor_pele;
        $this->name = $pname;
        $this->comestivel = $pcomestivel;
    }


    function get_raca()
    {
        return $this->raca;
    }

    function get_idade()
    {
        return $this->idade;
    }
    function get_CorPele() {
        return $this ->cor_pele;
    }
}
