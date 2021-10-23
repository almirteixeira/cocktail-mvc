<?php

namespace app\models;

class Cocktail{
    private $name;
    private $ingredients;
    private $id;


//Cria a conexão com a API
//Create connection with the API

private function API($url){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "" . $url . "",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        //  CURLOPT_HTTPHEADER => [
        // "x-rapidapi-host: the-cocktail-db.p.rapidapi.com",
        // "x-rapidapi-key: 09d8e86b69msh367d3917d7092d8p152d35jsnbed02402c430"],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    } else {
        return $response;
    }
        
    }

//Search by name
//Busca pelo nome
public function findByName($name){
    $this->name = $name;
    $url = "https://www.thecocktaildb.com/api/json/v1/1/search.php?s=". $this->name . "";
    //$url = "https://the-cocktail-db.p.rapidapi.com/search.php?s=". $this->name . "";
    $response = $this->API($url);
    return $response;
}


//Search by ingredients
//Busca pelos ingredientes
public function findByIngredients($ingredients){
    $this->ingredients = $ingredients;
    
    $url = "https://www.thecocktaildb.com/api/json/v1/1/filter.php?i=". $this->ingredients . "";
    //$url = "https://the-cocktail-db.p.rapidapi.com/filter.php?i=". $this->ingredients . "";
    $response = $this->API($url);
    return $response;
}

//Search by popular cocktails
//Busca pelos coqueteis populares
public function findAll(){
    $url = "https://the-cocktail-db.p.rapidapi.com/popular.php";
    $response = $this->API($url);
    return $response;
}

//Search by id
//Busca pelo id
public function findById($id){
    $this->id = $id;
    $url = "https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=". $this->id . "";
    //$url = "https://the-cocktail-db.p.rapidapi.com/lookup.php?i=". $this->id . "";
    $response = $this->API($url);
    return $response;
}

//Random search
//Busca randomica
public function findRandom(){
    //$url = "https://the-cocktail-db.p.rapidapi.com/random.php";
    $url = "https://www.thecocktaildb.com/api/json/v1/1/random.php";
    $response = $this->API($url);
    return $response;
    

}

}


?>
