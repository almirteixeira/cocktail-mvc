# Cocktail MVC

Utilização da API Cocktail em um MVC feito em linguagem PHP sem uso de frameworks ( no backend e frontend).

## Installation

O repositório deve ser colocado na pasta raiz da hospedagem.


## Folder Tree:
```
cocktail-mvc
├── app/
│   ├── controllers/
│   │   └── Cocktail.php
│   │   
│   ├── core/
│   │   ├── App.php
│   │   └── Controller.php
│   │   
│   ├── models/
│   │   └── Cocktail.php
│   │ 
│   ├── views/
│   │   └── cocktail/
│   │      ├── index.php
│   │      ├── list.php
│   │      └── details.php
│   │      
│   ├── .htaccess
│   └── autoload.php
│
├── assets/
│    ├── css/
│    │   └── main.css
│    └── img/
│        └── cocktail.png
│    
│        
├── .htaccess
└── index.php
```

## Requirements for index.php

```php
<?php
      require 'app/autoload.php';

      use app\core\App;
      use app\core\Controller;

      $app = new App();

?>
```
## Screenshot



## License
[MIT](https://choosealicense.com/licenses/mit/)
