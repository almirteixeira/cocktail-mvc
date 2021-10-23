<?php

namespace app\core;

//Esta classe cria o método de renderização das views, que será utilizado nos controllers por herança e a página de erro
//This class creates the view rendering method, which will be used in controllers by inheritance and the error page.

class Controller
{

  // Este método chama uma view.
  //This method call the view
  
  public function view(string $view, $data = [])
  {
    if (!is_null($data)) {
      foreach ($data as $var => $value) {
          ${$var} = $value;
      }
  }
    require './app/views/' . $view . '.php';

  }

  //Este método exibe a pagina de erro.
  //This method display the error page.

  public function pageNotFound()
  {
    $this->view('erro404');
  }
}



?>