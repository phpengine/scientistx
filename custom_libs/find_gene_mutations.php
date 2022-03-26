<?php


class FindGeneMutations {

    protected $requested_gene ;
    protected $relevant_genes ;

    public function main() {
        try {
            $this->questions();
            $this->findMutations();
        } catch (Exception $e) {
            echo $e->getMessage()."\n";
            throw new \Exception($e->getMessage()) ;
        }
    }

    public function questions() {
        try {
            $this->requested_gene = $this->getVar('requested_gene') ;
        } catch (Exception $e) {
            echo $e->getMessage()."\n";
            throw new \Exception($e->getMessage()) ;
        }
    }

    public function getVar($var_name) {
        try {
            if (PHP_SAPI === 'cli') {
                if ($var_name === 'requested_gene') {
                    global $argv ;
                    if (isset($argv[2])) {
                        return $argv[2] ;
                    } else {
                        $msg = "No Gene Code Provided as parameter" ;
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

    public function findMutations() {
        try {
            $MolecularProfilesApiInstance = new Swagger\Client\Api\MolecularProfilesApi();
            $MutationsApiInstance = new Swagger\Client\Api\MutationsApi();
            $GenesApiInstance = new Swagger\Client\Api\GenesApi();
            $SamplesApiInstance = new Swagger\Client\Api\SamplesApi();
            $StudiesApiInstance = new Swagger\Client\Api\StudiesApi();
            $relevant_genes = [] ;
            $found_gene_symbols = [] ;

            echo "Getting All Molecular Profiles\n" ;
            $all_molecular_profiles = $MolecularProfilesApiInstance->getAllMolecularProfilesUsingGET() ;
            echo "Found All Molecular Profiles\n\n" ;

            echo "Getting All Study IDs\n" ;
            $all_studies = $StudiesApiInstance->getAllStudiesUsingGET() ;
            echo "Found All Molecular Profiles\n\n" ;

            echo "Getting All Sample IDs\n" ;

            foreach ($all_studies as $study) {
//                var_dump($study);
                $all_samples_for_study[$study['study_id']] = $SamplesApiInstance->getAllSamplesInStudyUsingGET($study['study_id']) ;
                echo "Found for Study {$study['study_id']}\n" ;
//                break ;
            }
            echo "Found All Sample IDs\n\n" ;
//            var_dump($all_samples_for_study);


            foreach ($all_samples_for_study as $sample_group) {
                foreach ($sample_group as $sample) {
//                    var_dump($sample);
//                    die() ;
                    $all_sample_ids[] = $sample['sample_id'] ;
                }
            }

            echo "Getting All Mutations for Molecular Profiles\n" ;
            $filter = ['entrezGeneIds' => 'ROS1'] ;
            $filter_json = json_encode($filter) ;
            $filter_json = '{"entrezGeneIds": ['.$this->requested_gene.']}' ;
            $filter_json = '{
  "entrezGeneIds": [ 637 ],
  "sampleIds": [
    "string"
  ],
  "sampleListId": "string"
}' ;
//            var_dump($filter_json);

            foreach ($all_molecular_profiles as $molecular_profile) {
                $found_mutations[] = $MutationsApiInstance->fetchMutationsInMolecularProfileUsingPOST($molecular_profile['molecular_profile_id'], $filter_json) ;
                echo "Found for Molecular Profiles {$molecular_profile['molecular_profile_id']}\n" ;
            }
            echo "Found All Mutations for Molecular Profiles\n\n" ;


        } catch (Exception $e) {
            echo $e->getMessage()."\n";
            throw new \Exception($e->getMessage()) ;
        }
    }

}


?>

