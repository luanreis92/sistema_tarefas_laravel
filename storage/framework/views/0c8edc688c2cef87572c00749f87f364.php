
<?php $__env->startSection('titulo','Sobre'); ?>

<?php $__env->startSection('conteudo'); ?>

<?php if(session('msg')): ?>
<div class="alert alert-danger" role="alert">
    <?php echo e(session('msg')); ?>

</div>
<?php endif; ?>

<h1>Editar tarefa</h1>

<form method="POST" action="<?php echo e("route('editar.tarefa')"); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="mb-3">
        <label class="form-label">Nome da tarefa</label>
        <input type="text" name="tarefinha" class="form-control" value="<?php echo e($tarefa->nome); ?>">
    </div>
    <input type="hidden" name="id" value="<?php echo e($tarefa->id); ?>">
    <div class="mb-3">
        <label class="form-label">Descrição da tarefa</label>
        <input type="text" name="descricao" class="form-control" value="<?php echo e($tarefa->desctarefa); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projetos\Luan\04_Wanderson\meusite\resources\views/editar.blade.php ENDPATH**/ ?>