<?php

/**
 * Class View
 */
class View {

    /**
     * @var array tableau contenant le controller et l'action associée
     */
   protected $_route;

   /**
     * @var array tableau contenant les données passées à la vue
     */
   protected $data = array();

    /**
     * View constructor.
     * Instanciation de la vue avec le passage des paramètrés passés par le controller
     * @param $route array
     */
   public function __construct( $route ) {
       $this->_route = $route;
   }

    /**
     * Afficher la vue associer en allant dans le dossier /view/nomController/nomAction
     *
     */
   public function display() {
      $viewFile = ROOT . "/app/view/" . $this->_route["controller"] . "/" . $this->_route["action"] . ".php";
      if( file_exists( $viewFile ) ){
          include($viewFile);
      }
      else {
          throw new DomainException("Vue introuvable - " . $viewFile);
      }
   }

    /**
     * Setter pour affecter les données passé à la vue par le controller à la variable $data
     * @param $key mixed
     * @param $value mixed
     */
   public function __set($key, $value) {
      $this->data[$key] = $value;
   }

    /**
     * Getter pour récupérer les données passé du controller à la vue
     * @param $key mixed
     * @return mixed
     */
   public function __get($key) {
      return $this->data[$key];
   }
}

