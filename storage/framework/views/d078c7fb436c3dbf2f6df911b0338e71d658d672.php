<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <title>Produto</title>
    	</head>
       		<h1>View de produto via controle</h1>
       		<p>Produto : <?php echo e($produto["nome"] . " - titulo: ". $produto["titulo"]); ?></p>
    	<body>
    </body>
</html>