<?php

?>


<html>
    <head>
        <title>Scientist X</title>
    </head>
    <body>
        <h1>Scientist X</h1>
        <p>
            Potential oncogenes to choose from: <br>
            ROS1<br>
            SH2<br>
            RET fusions<br>
            PIK3CA<br>
            PTEN<br>
            RB1<br>
            Or any other oncogene that interests you.
            We will go through TCGA on the 15th Jan Synchronous lecture - Please view the recording for more guidance
            Also cBioportal have great Tutorials and webinars -<br>https://www.cbioportal.org/tutorials
            The word limit is 1500-2000 words and you must reference your essay properly.<br>
        </p>
        <p>
            1. Scientist X has come across a new gene in his lab. He wants to use the TCGA
            (https://www.cbioportal.org/) to understand any expression patterns or mutations in
            multiple tumours and then focus on the tumour type with the highest level of expression.
            The three graphs that I would like to see at a minimum is - OncoPrint, mRNA vs CNA plot and
            the Survival curve graphs.<br>
            The more you can uncover about this new gene on the cBioPortal and describe it, the better.
            Use pubmed to find more about this gene in the particular cancer type. Does it play a role
            in other diseases? Are there therapies against it?
        </p>
        <p>
            <?php
            $gene_options = [
                'ROS1',
                'SH2',
                'RET',
                'PIK3CA',
                'PTEN',
                'RB1',
            ] ;
            ?>

            <?php
            foreach ($gene_options as $gene_option) {
                ?>
                <a target="_blank"
                   href="cli.php?action=confirmgenecode&requested_genes=<?php echo $gene_option ; ?>">
                    One Gene: <?php echo $gene_option ; ?>
                </a>
                <br>
                <?php
            }
            ?>

            <?php
                $all_gene_options_string = implode(",", $gene_options) ;
                ?>
                <a target="_blank"
                   href="cli.php?action=confirmgenecode&requested_genes=<?php echo $all_gene_options_string ; ?>">
                    All Genes: <?php echo $all_gene_options_string ; ?>
                </a>
                <br>
                <?php

            ?>
        </p>
        <p>
            2. Based on research papers, can you come up with an experimental plan to understand more about this gene.
            <br>
            <?php
//            $all_gene_options_string = implode(",", $gene_options) ;
            $all_gene_options_string = 'ROS1' ;
            ?>
            <a target="_blank"
               href="cli.php?action=genereport&requested_genes=<?php echo $all_gene_options_string ; ?>">
                Experimental Gene Report: <?php echo $all_gene_options_string ; ?>
            </a>
            <br>
            <br>
            <br>
            <br>
            <?php

            ?>
        </p>
    </body>
</html>
