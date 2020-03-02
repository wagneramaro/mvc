<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura MVC</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
   
</head>
<body>

<div style="width:auto; background:black; hegth:40px; line-height:40px; color:#fff; padding:4px 15px;">
Estrutura MVC

    <div style="float:right;">
        <a href="<?php echo BASE_URL ?>">Home</a>
        <a href="<?php echo BASE_URL ?>galeria">Galeria</a>
    </div>

</div>


    
<?php $this->loadViewInTemplate($viewName, $viewData); ?>


<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>