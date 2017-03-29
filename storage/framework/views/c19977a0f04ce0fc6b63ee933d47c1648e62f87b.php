<html>
<head>
    <title>appTeste <?php echo $__env->yieldContent('titulo'); ?></title>
</head>
<body>
<header>
	<?php $__env->startSection('navbar'); ?>
	<?php echo $__env->make('layout._includes._navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<p>Aqui vamos ter o navbar</p>
	<?php echo $__env->yieldSection(); ?>
	<hr>
</header>
<main>
	<div>
		<?php echo $__env->yieldContent('conteudo'); ?>
	</div>
</main>
<footer>
	<hr>
	<?php $__env->startSection('footer'); ?>
		<?php echo $__env->make('layout._includes._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->yieldSection(); ?>
</footer>
</body>
</html>