<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura MVC</title>
    <style>
        body{
            margin:0;
            padding:0;
        }
        a {
            color:#fff;
            text-decoration:nome;
            padding:8px;
        }

        section{
            padding:30px;
        }
    </style>
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

</body>
</html>