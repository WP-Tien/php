<?php 

  /**
   * Decorator 
   * Decorator thuộc nhóm Structural pattern
   * Decorator pattern cho phép thêm method hoặc property của 1 đối tượng trong lúc chương trình thực thi.
   */

  // Developer thông báo lỗi Web, Email, File.
  // Publish lỗi ghi vào file.
  
interface Logger {
  public function log($msg);
}

abstract class LoggerDecorator implements Logger {
  protected $logger;
    
  public function __construct(Logger $logger){
    $this->logger = $logger;
  }

  abstract public function log($msg);  
}

// File logger
class FileLogger implements Logger {
  public function log($msg){
    echo "<h3>Error on FILE: {$msg}</h3>";
  }
}

class EmailLogger extends LoggerDecorator {
  public function log($msg){
    $this->logger->log($msg);
    echo "<h3>Error on EMAIL: {$msg}</h3>";
  }
}

class DatabaseLogger extends LoggerDecorator {
  public function log($msg){
    $this->logger->log($msg);
    echo "<h3>Error on DATABASE: {$msg}</h3>";
  }
}

$log = new FileLogger(); // $log = FileLogger
// EmailLogger extends LoggerDecorator mà LoggerDecorator có 1 construct 
$log = new EmailLogger($log); // $log = EmailLogger | $this->logger = FileLogger | 
$log = new DatabaseLogger($log);

$log->log('saving');


?>