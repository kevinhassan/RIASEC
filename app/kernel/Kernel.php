<?php

/**
 * Class Kernel
 * Type abstrait permettant de faire l'instanciation des controllers et actions
 */
class Kernel {
    /**
     * Importation des controllers associés
     * @param $class
     */
   public static function autoload($class) {
      if(file_exists(ROOT."/app/kernel/$class.php"))
         require_once(ROOT."/app/kernel/$class.php");
      else if(file_exists(ROOT."/app/controller/$class.php"))
         require_once(ROOT."/app/controller/$class.php");
   }

    /**
     * Fonction pour instancier le controller et exécution de l'action à suivre
     */
   public static function run() {
      // Autoload
      spl_autoload_register(array("Kernel", "autoload"));

      // Analyser la requete
      $query = isset($_GET["query"]) ? $_GET["query"] : "";
      $route = Router::analyze( $query );

      // Instancier le controleur et executer l'action
      $class = $route["controller"]."Controller";
      if(class_exists($class)) {
         $controller = new $class ($route);
         $method = array($controller, $route["action"]);
         if( is_callable( $method ))
            call_user_func($method);
      }
   }
}
