<?php 
 
  function loadFolderClass($className){
    $fileName = "class/{$className}_class.php";
    if(file_exists($fileName) == true ){
      require_once $fileName;
    } 
  }

  function loadFolderMyClass($className){
    $fileName = "myclass/{$className}_class.php";
    if(file_exists($fileName) == true ){
      require_once $fileName;
    } 
  }

  spl_autoload_register('loadFolderMyClass');
  spl_autoload_register('loadFolderClass');

  $animal = new Animal();
  $student = new Student();

?>