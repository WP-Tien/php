<?php 

defined('PAGE_URI') ? null : define('PAGE_URI', $_SERVER
['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
defined('PAGE_PATH') ? null : define('PAGE_PATH', $_SERVER['REQUEST_URI']);

$arr = explode('/', PAGE_PATH);

class Route {
    private $super_page = array();
    private $current_page = array();

    public function set_super_page($page){
        $this->super_page[] = $page;
    }

    public function set_current_page($page){
        $this->current_page[] = $page;
    }
}

// $route = new Route();
// $route->set_super_page('user');
// $route->set_super_page('users');
// print_r($route->super_page);

print_r($_GET);
echo "<pre style='color: red;'>", print_r ($arr) ,"</pre>";

?>

<h1>
    <?php echo 'index page'; ?>

    <?php include_once('views/home.php'); ?>
</h1>