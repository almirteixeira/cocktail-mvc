# Cocktail MVC

Use of Cocktail API in an MVC made in PHP language without using frameworks (in the backend and frontend). 

Utilização da API Cocktail em um MVC feito em linguagem PHP sem uso de frameworks ( no backend e frontend).


## About


With this application it is possible to search for cocktails by name or ingredient. Also by clicking on "Prepare the cocktail" the drink is chosen so
random.
On the home page under "See more..." lists some drinks without the need for research. 

Com essa aplicação é possivel buscar coqueteis pelo nome ou pelo ingrediente. Também ao clicar em "Prepare a cocktail" é escolhido a bebida de forma
randomica.
Na pagina inicial em "See more..." lista algumas das bebidas selecionadas 


## Installation

The repository must be placed in the hosting root folder.

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

![alt text](1.png)
![alt text](2.png)
![alt text](3.png)
![alt text](4.png)


## License
[MIT](https://choosealicense.com/licenses/mit/)
