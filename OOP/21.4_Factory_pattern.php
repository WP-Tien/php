<?php 
/**
 * - Tạo ra đối tượng mà không cần thiết chỉ ra một cách chính xác lớp nào sẽ được sử dụng để tạo ra đối tượng đó.
 * - Giảm bớt sự phụ thuộc của việc tạo đối tượng với logic của ứng dụng.
 * - Tăng tính dễ đọc và bảo trì của ứng dụng.
 */

 //22.0_Factory_pattern.php?type=programming&id=2&name=abc

abstract class Book {
  private $id;
  private $name;
  protected $type = 'null';

  public function __construct($id, $name){
    $this->id = $id;
  }  

  public function getId(){
    return $this->id;
  }

  public function getName(){
    return $this->name;
  }

  public function getType(){
    return $this->type;
  }
}

class BookProgramming extends Book {
  protected $type = 'programming';
}

class BookDesign extends Book {
  protected $type = 'design';
}

class BookEnglish extends Book {
  protected $type = 'english';
}

class BookFactory {
  public static function build($bookType, $idBook, $nameBook) {
    $className = "Book". ucwords($bookType);
    if( class_exists($className)) {
      $obj = new $className($idBook, $nameBook);
    }
    return $obj;
  }
}

class BookController {
  public function createBook($infoBook){
    // switch($infoBook['type']) {
    //   case 'programming':
    //     $book = new BookProgramming( $infoBook['id'], $infoBook['name'] );
    //     break;
    //   case 'design':
    //     $book = new BookDesign( $infoBook['id'], $infoBook['name'] );
    //     break;
    //   case 'english':
    //     $book = new BookEnglish( $infoBook['id'], $infoBook['name'] );
    //     break;
    //   default:
    //     $book = new BookProgramming( $infoBook['id'], $infoBook['name'] );
    //     break;
    // }
    $book = BookFactory::build($infoBook['type'], $infoBook['id'], $infoBook['name']); 
    return $book;
  }
}

$bookController = new BookController();

$infoBook = $_GET;

// echo '<pre style="color:red; font-weight: bold">';
// var_dump ($infoBook);
// echo '</pre>';

$book = $bookController->createBook($_GET);

echo '<pre style="color:red; font-weight: bold">';
var_dump ($book);
echo '</pre>';

?>