<?php 
    /* 
    Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:
    nom
    edat
    email
    menjar favorit

    */

    $empleat = array(
        "Nom"=> "Oscar",
        "Edat"=> "48",
        "Email"=> "elmio@elmio.com",
        "Menjar favorit"=> "Flan",
    );
    print_r($empleat);
    var_dump($empleat);
    echo"\n";
    /* 
    Crea un programa que contingui dos arrays de nombres enters/floats. 
    Un cop creats, mostra per pantalla el resultat de:

    La intersecció dels dos arrays (nombres en comú)
    La mescla dels dos arrays.
    */

    $array1 = array(2,4,6,8,5,9);
    $array2 = array(5,9,7,3,1,2);

    $comuns = array_intersect($array1, $array2);

    print_r($comuns);
    echo"\n";
    $mescla = array_merge($array1, $array2);

    print_r($mescla);

    /*
    /*
Donat un array d’enters, fes un programa que:

Retorni cada valor de l’array elevat al cub fent servir la funció array_map().
*/
    $enters = array(2,6,5,9,);

    function cub($num){
        return $num * $num *$num;

    }
    $cubs = array_map("cub", $enters);

    print_r ($cubs);

    /* 
    Donat un array d’strings, fes un programa que:

    Retorni un array on només estiguin els strings que tinguin un nom parell de 
    caràcters usant la funció array_filter().
    */

    $string = array("casa", "taula", "armari", "pijama");

    function parells($num){ 
        return strlen($num) % 2 == 0;
    }
    $parells = array_filter($string,"parells");

    print_r($parells);
?>