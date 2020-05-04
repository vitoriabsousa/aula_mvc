<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Vitória Sousa">
    <meta name="description" content="<?php echo $this->getDescription(); ?>">
    <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
    <title><?php echo $this->getTitle(); ?></title>
    <link rel="stylesheet" href="<?php echo DIRCSS. 'Style.css' ?>"> 
    <?php echo $this->addHead(); ?>
</head>
<body>
    
    <div class="Nav">
        <a href= "<?php echo DIRPAGE; ?>"> Home </a>
        <a href= "<?php echo DIRPAGE. 'contato' ?>"> Contato </a>
    </div>

    <div class="Header"> 
        <img scr="<?php echo DIRIMG. 'mesa-cinza.jpg'; ?>" alt="mesa"> <br>
        <?php
        $BreadCrumb = new src\classes\ClassBreadcrumb();
        $BreadCrumb->addBreadcrumb();
        ?>
        <br><br>
        TELEFONE: (85) 3384-2587 <br>
        <?php echo $this->addHeader(); ?>
    </div>


    <div class="Main"> 
        <?php echo $this->addMain(); ?>
    </div>


    <div class="Footer">
        2020 - TODOS OS DIREITOS RESERVADOS A VITÓRIA SOUSA <br>
        <?php echo $this->addFooter(); ?>
    </div>

</body>
</html>