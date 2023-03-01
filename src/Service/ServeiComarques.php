<?php

namespace App\Service;

class ServeiComarques{

    private $ciutats=array(
        array(
            "nom"=>"Xàtiva",
            "poblacio"=>"29637",
            "codi_postal"=>"46800",
            "imatge"=>"xativa.png",
            "comarca"=>"La Costera",
            "dades"=>"El clima a Xàtiva és mediterrani, encara que per la seua situació relativament allunyada de la costa i entre valls, els estius són més calorosos que a la resta del País Valencià, i registra freqüentment les temperatures màximes de tot el país.",
        ),
        array(
            "nom"=>"Alzira",
            "poblacio"=>"45451",
            "codi_postal"=>"46600",
            "imatge"=>"alzira.png",
            "comarca"=>"La Ribera Alta",
            "dades"=>"El clima és de tipus mediterrani, amb una brusca transició de l'estiatge estival a les abundants pluges tardorenques, de tipus torrencial, que produïxen freqüents inundacions.",
        ),
        array(
            "nom"=>"Ontinyent",
            "poblacio"=>"35946",
            "codi_postal"=>"46870",
            "imatge"=>"ontinyent.png",
            "comarca"=>"La Vall d'Albaida",
            "dades"=>"La ciutat té un clima mediterrani típic. Els estius són calorosos i poden superar diverses vegades els 35 °C a causa de les onades de calor, mentre que els hiverns són temperats i poden rebre algunes gelades o nevades esporàdiques durant les onades de fred.",
        ),
        array(
            "nom"=>"Gandia",
            "poblacio"=>"75911",
            "codi_postal"=>"46730",
            "imatge"=>"gandia.png",
            "comarca"=>"La Safor",
            "dades"=>"El clima és mediterrani plujós, amb molta humitat tant en hivern com en estiu. Les pluges, encara que són prou abundants es concentren a la tardor i poden arribar a ser torrencials.",
        ),
        array(
            "nom"=>"Albaida",
            "poblacio"=>"5989",
            "codi_postal"=>"46860",
            "imatge"=>"albaida.png",
            "comarca"=>"La Vall d'Albaida",
            "dades"=>"Albaida és a la riba esquerra del riu Albaida entre el riu Clariano i la serra d'Agullent. El territori és ondulat, sense grans altures de mitjana, a excepció de la part sud on s'eleva la serra d'Agullent.",
        ),
    );

    private $comarques = array(
        array(
            "nom"=>"La Costera",
            "poblacio"=>"71522",
            "municipis"=>"19",
        ),
        array(
            "nom"=>"La Ribera Alta",
            "poblacio"=>"223467",
            "municipis"=>"35",
        ),
        array(
            "nom"=>"La Vall d'Albaida",
            "poblacio"=>"92106",
            "municipis"=>"34",
        ),
        array(
            "nom"=>"La Safor",
            "poblacio"=>"174127",
            "municipis"=>"31",
        ),
    );

    public function get(){
        return $this->ciutats;
    }

  
   

}


?>