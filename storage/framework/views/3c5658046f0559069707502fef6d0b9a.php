<?php $__env->startSection('titulo','Home'); ?>

<?php $__env->startSection('conteudo'); ?>

<h1>Tarefas</h1>

<div class="row">
<?php $__currentLoopData = $tarefas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarefa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="card col-3 m-3">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <p><?php echo e($tarefa->nome); ?></p>
        <p><?php echo e($tarefa->desctarefa); ?></p>
        <!-- ESTE É UM COMENT -->
        
        <form action="/deletar/<?php echo e($tarefa->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <input class="btn btn-danger" type="submit" value="Excluir">
        </form>   

    </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetos\meusite\resources\views/welcome.blade.php ENDPATH**/ ?>