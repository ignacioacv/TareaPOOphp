<?php

class Libro{
    //asignacion de atributos
    public $title;
    public $edition;
    public $author;
    protected $page_number;
    public $description;
    public $category;
    public $editorial;
    //constructor para inicializar el objeto libro
    public function __construct($title, $edition, $author, $description, $category)
    {
        $this->title = $title;
        $this->edition = $edition;
        $this->author = $author;
        $this->description = $description;
        $this->category = $category;
    }
    //metodo para ingresar anuncios en base a la categoria
    public function verifyCategory(){
        switch($this->category){
            case "adventure" :
                echo "<div class='alert alert-primary' role='alert'>
                30% off in this category!
            </div>";
            break;
            case "horror" :
                echo "<div class='alert alert-secondary' role='alert'>
                Free costume for your buy!
            </div>";
            break;
            case "fiction" :
                echo "<div class='alert alert-warning' role='alert'>
                20% off in this category!
            </div>";
            break;
            case "programming" :
                echo "<div class='alert alert-success' role='alert'>
                you will be a good programmer!
            </div>";
            break;
            default:
            "type a valid category";
        }
    }

public function verifyAgeByCategory($age){
if($this->category == "horror"){
    if($age >= 18){
        echo "<div class='alert alert-primary' role='alert'>
                you can buy all the horror books that you want!
            </div>";
    }else{
        echo "<div class='alert alert-primary' role='alert'>
                sorry you don't have enough age:(
            </div>";
    }
}
}        

public function printInfo(){
    echo "<strong>Titulo: </strong> $this->title<br><strong>Edicion: </strong> $this->edition<br><strong>Descripcion: </strong> $this->description<br><strong>Autor: </strong> $this->author<br><strong>Categoria: </strong> $this->category<br>";
}

}




?>