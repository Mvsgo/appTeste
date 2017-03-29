<?php $__env->startSection('titulo','Usuario'); ?>
<?php $__env->startSection('conteudo'); ?>
	<p>Aqui e o conteudo da usuario</p>

	Usuario: <?php echo e($user); ?><br>
	Lista: <?php echo e($lista); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>