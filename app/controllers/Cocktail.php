<?php

use app\core\Controller;
use app\models\Cocktail as C;

class Cocktail extends Controller
{
    //Pagina inicial
    //Homepage
    public function index(){
        $this->view('cocktail/index');
    }

    //List cocktail by name
    //Listar cocktail pelo nome
    public function list($name = null){
        $name = $_POST["name"];
        $rdn = new C();
        $json = json_decode($rdn->findByName($name));
        $drink = $json->drinks;
        $this->view('cocktail/list', ['drink' => $drink]);
    }

    //List some cocktail by name
    //Listar alguns cocktails pelo nome
    public function seemore($name = null){
        $rdn = new C();
        $json = json_decode($rdn->findByIngredients($name));
        $drink = $json->drinks;
        $this->view('cocktail/list', ['drink' => $drink]);
    }

    //Display a cocktail por id
    //Exibir um cocktail by id 
    public function details($id = null){
        $rdn = new C();
        $json = json_decode($rdn->findById($id));
        $drink = $json->drinks;
        $this->view('cocktail/details', ['drink' => $drink]);
    }

    //Display a random cocktail
    //Exibir um cocktail aleatório 
    public function random(){
        $rdn = new C();
        $json = json_decode($rdn->findRandom());
        $drink = $json->drinks;
        $this->view('cocktail/details', ['drink' => $drink]);
    }
    
    //List cocktail by ingredients
    //Listar cocktail pelos ingredientes
    public function listIn($in = null){
        $in = $_POST["in"];
        $rdn = new C();
        $json = json_decode($rdn->findByIngredients($in));
        $drink = $json->drinks;
        $this->view('cocktail/list', ['drink' => $drink]);
    }
}

?>
