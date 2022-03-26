<?php

require_once (__DIR__.'/SwaggerClient-php/vendor/autoload.php') ;
require_once (__DIR__.'/router.php') ;

$ScientistxCLIInstance = new ScientistxCLI() ;
$ScientistxCLIInstance->main();

class ScientistxCLI {

    public function main() {
        try {
            ScientistxRouter::router() ;
            $this->runner() ;
        } catch (\Exception $e) {
            echo "Fatal Error: {$e->getMessage()} \n" ;
            $end_time = microtime(true) ;
            echo "Ending at: " . date('H:i:s d/m/Y', $end_time) . "\n" ;
//            $execution_time = $end_time - $start_time ;
//            echo "Executed for {$execution_time} seconds.\n" ;
            exit(1) ;
        }
    }

    public function runner() {
        if (PHP_SAPI !== 'cli') {
            echo "<html>\n" ;
            echo "  <head>\n" ;
            echo "    <title>CLI Web Runner</title>\n" ;
            echo "  </head>\n" ;
            echo "  <body>\n" ;
            echo "    <pre>\n" ;
        }

        $start_time = time() ;
        echo "Starting at: " . date('H:i:s d/m/Y', $start_time) . "\n" ;

        if (ScientistxRouter::$route === 'confirmgenecode') {
            require_once (__DIR__.'/custom_libs/confirm_gene.php') ;
            $confirm_gene = new ConfirmGene() ;
            $confirm_gene->main() ;
        }

        if (ScientistxRouter::$route === 'find_all_mutations_in_gene') {
            require_once (__DIR__.'/custom_libs/find_gene_mutations.php') ;
            $find_gene_mutations = new FindGeneMutations() ;
            $find_gene_mutations->main() ;
        }


        $end_time = microtime(true) ;
        echo "Ending at: " . date('H:i:s d/m/Y', $end_time) . "\n" ;
        $execution_time = $end_time - $start_time ;
        echo "Executed for {$execution_time} seconds.\n" ;

        if (PHP_SAPI !== 'cli') {
            echo "    </pre>\n" ;
            echo "  </body>\n" ;
            echo "</html>\n" ;
        }
    }

}

?>

