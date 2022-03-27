# Scientist X

## Using the cBioPortal API

### About
This is a project to implement the Scientist X question in an automated manner.

### Installation
If you just want to use the CLI, just install PHP. If you're on a Mac, it's already there.

### Usage

```
# Just confirm your gene code from the hugo symbol
php cli.php confirmgenecode ROS1
php cli.php confirmgenecode BRCA1

```

```
# Find mutations in a gene
php cli.php find_all_mutations_in_gene ROS1
```

### Example Output

```
$ php cli.php confirmgenecode ROS1

Starting at: 20:27:35 26/03/2022

ROS1, protein-coding, 6098

All Requested Genes found
Ending at: 20:27:37 26/03/2022
Executed for 2.746514081955 seconds.
```

```
$ php cli.php confirmgenecode BRCA1

Starting at: 20:28:44 26/03/2022

BRCA1, protein-coding, 672

All Requested Genes found
Ending at: 20:28:46 26/03/2022
Executed for 2.5137279033661 seconds.
```

```
$ php cli.php confirmgenecode EGFR

Starting at: 20:29:38 26/03/2022

EGFR, protein-coding, 1956

All Requested Genes found
Ending at: 20:29:40 26/03/2022
Executed for 2.4964780807495 seconds.
```

```
# Find mutations in a gene
php cli.php find_all_mutations_in_gene ROS1
```
[Find Mutations Output](example_outputs/find_mutations.txt).