<?php


class ConfirmGene {

    protected $requested_genes ;
    protected $relevant_genes ;

    public function main() {
        try {
            $this->questions();
            $this->geneCheck();
        } catch (Exception $e) {
            echo $e->getMessage()."\n";
            throw new \Exception($e->getMessage()) ;
        }
    }

    public function questions() {
        try {
            $this->requested_genes = $this->getVar('requested_genes') ;
        } catch (Exception $e) {
            echo $e->getMessage()."\n";
            throw new \Exception($e->getMessage()) ;
        }
    }

    public function getVar($var_name) {
        try {
            if (PHP_SAPI === 'cli') {
                if ($var_name === 'requested_genes') {
                    global $argv ;
                    if (isset($argv[2])) {
                        return $argv[2] ;
                    } else {
                        $msg = "No Gene Codes Provided as parameter" ;
                        throw new \Exception($msg) ;
                    }
                }
            } else {
                return $_REQUEST[$var_name] ;
            }
        } catch (Exception $e) {
            echo $e->getMessage()."\n";
            throw new \Exception($e->getMessage()) ;
        }
    }

    public function geneCheck() {
        $GenesApiInstance = new Swagger\Client\Api\GenesApi();
        try {
            $relevant_genes = [] ;
            $found_gene_symbols = [] ;
            $requested_gene_array = explode(',', $this->requested_genes) ;
            foreach ($requested_gene_array as $target_gene) {
                $result = $GenesApiInstance->getAllGenesUsingGET();
                foreach ($result as $gene) {
                    if ($gene->getHugoGeneSymbol() === $target_gene) {
                        echo "{$gene->getHugoGeneSymbol()}, {$gene->getType()}, {$gene->getEntrezGeneId()}\n" ;
                        $relevant_genes[] = $gene ;
                        $found_gene_symbols[] = $gene->getHugoGeneSymbol() ;
                    }
                }
            }
            $genes_not_found = array_diff($requested_gene_array, $found_gene_symbols) ;
            if ( count($found_gene_symbols) < count($requested_gene_array) ) {
                echo "\nGenes not found ". implode(", ", $genes_not_found) . "\n" ;
            } else {
                echo "\nAll Requested Genes found\n" ;
            }
            $this->relevant_genes = $relevant_genes ;
        } catch (Exception $e) {
            echo $e->getMessage()."\n";
            throw new \Exception($e->getMessage()) ;
        }
    }

}


?>

