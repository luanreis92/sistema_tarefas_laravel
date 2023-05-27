
<?php $__env->startSection('titulo','Sobre'); ?>

<?php $__env->startSection('conteudo'); ?>

<h1>Sobre</h1>
<h2>Nome: <?php echo e($nome); ?> </h2>
<h2>Idade: <?php echo e($idade); ?> </h2>
<p>Nome = <?php echo e($nome); ?> e idade = <?php echo e($idade); ?></p>

<?php for($i = 0; $i < count($numeros) ; $i++): ?>
<p><?php echo e($i); ?> - <?php echo e($numeros[$i]); ?></p>
<?php endfor; ?>

<?php $__currentLoopData = $numeros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p><?php echo e($x); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php
    echo "teste";
?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projetos\Luan\04_Wanderson\meusite\resources\views/sobre.blade.php ENDPATH**/ ?>