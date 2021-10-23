<?php
namespace app\core;
//Esta classe processa a url de controller
//This class processes the controller url 
class App
{
  //initial page 
  //pagina inicial
  protected $controller = 'Cocktail';
  protected $method = 'index';
  
  protected $page404 = false;
  protected $params = [];

  // Método construtor
  // Construct method
  
  public function __construct()
  {
    $URL_ARRAY = $this->parseUrl();
    $this->getControllerFromUrl($URL_ARRAY);
    $this->getMethodFromUrl($URL_ARRAY);
    $this->getParamsFromUrl($URL_ARRAY);
    // Chama o método de uma classe passando os parâmetros
    // Call the method of a class passing the parameters
    call_user_func_array([$this->controller, $this->method], $this->params);
  }
 

  //Capture the parameters of the url
  //Captura os parâmetros da url
  private function parseUrl()
  {
    $REQUEST_URI = explode('/', substr(filter_input(INPUT_SERVER, 'REQUEST_URI'), 1));
    return $REQUEST_URI;
  }
  

  //Direciona o parametro para o controller definido
  //Directs the parameter to the defined controller 

  private function getControllerFromUrl($url)
  {
    if ( !empty($url[0]) && isset($url[0]) ) {
      if ( file_exists('./app/controllers/' . ucfirst($url[0])  . '.php') ) {
        $this->controller = ucfirst($url[0]);
      } else {
        $this->page404 = true;
      }
    }
    require './app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller();
  }
  
  //Atribui o método do controlador em relação a url
  //Assign controller method against url 


  private function getMethodFromUrl($url)
  {
    if ( !empty($url[1]) && isset($url[1]) ) {
      if ( method_exists($this->controller, $url[1]) && !$this->page404) {
        $this->method = $url[1];
      } else {
         $this->method = 'pageNotFound';
      }
    }
  }
  //Verifica se o array url possui a quantidade de elementos maior que 2,sendo o primeiro o controller, o segundo o método e o terceiro params
  //Checks if the url array has the number of elements greater than 2, the first being the controller, the second the method and the third params 

  private function getParamsFromUrl($url)
  {
    if (count($url) > 2) {
      $this->params = array_slice($url, 2);
    }
  }
}

?>
