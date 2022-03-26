<?php

class ScientistxRouter {

    public static $route ;
    private static $allowed_routes ;

    private static function setup() {
        self::$allowed_routes = [
            'confirmgenecode',
            'gene_otherdiseases',
            'gene_existing_therapies',
            'genes_in_associated_pathways',
            'genes_in_associated_pathways_existing_therapies',
            'find_all_mutations_in_gene',
            'it is expressed in lung, brain, skin',
            'it is expressed most highly in',
        ] ;
    }

    public static function router() {
        self::setup() ;
        if (PHP_SAPI === 'cli') {
            global $argv ;
            if (isset($argv[1])) {
                if (in_array($argv[1], self::$allowed_routes)) {
                    self::$route = $argv[1] ;
                } else {
                    throw new Exception("Route not allowed") ;
                }
            } else {
                throw new Exception("Route not given") ;
            }
        } else {
            self::$route = $_REQUEST['action'] ;
        }
    }

}

?>

