<?php


class GeneOncoprint {

    protected $requested_gene ;
    protected $relevant_genes ;

    public function main() {
        try {
            $this->questions();
            $this->geneGetOncoprint();
        } catch (Exception $e) {
            echo $e->getMessage()."\n";
            throw new \Exception($e->getMessage()) ;
        }
    }

    public function questions() {
        try {
            global $argv ;
            if (isset($argv[2])) {
                $this->requested_gene = $argv[2] ;
            } else {
                $msg = "No Gene Code Provided as parameter" ;
                throw new \Exception($msg) ;
            }
        } catch (Exception $e) {
            echo $e->getMessage()."\n";
            throw new \Exception($e->getMessage()) ;
        }
    }

    public function geneGetOncoprint() {
        try {
            $GenesApiInstance = new Swagger\Client\Api\GenesApi() ;
            $gen_object = $GenesApiInstance->getGeneUsingGET($this->requested_gene) ;
            $relevant_genes = [] ;
            $requested_gene_array = explode(',', $this->requested_gene) ;
            foreach ($requested_gene_array as $target_gene) {
                foreach ($result as $gene) {
                    if ($gene['hugo_gene_symbol'] === $target_gene) {
                        echo "{$gene->getHugoGeneSymbol()}, {$gene->getType()}\n" ;
                        $relevant_genes[] = $gene ;
                    }
                }
            }
            $this->relevant_genes = $relevant_genes ;
        } catch (Exception $e) {
            echo $e->getMessage()."\n";
            throw new \Exception($e->getMessage()) ;
        }
    }

}


?>

