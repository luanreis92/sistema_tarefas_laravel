
<?php $__env->startSection('titulo','Sobre'); ?>

<?php $__env->startSection('conteudo'); ?>

<?php if(session('msg')): ?>
<div class="alert alert-danger" role="alert">
    <?php echo e(session('msg')); ?>

</div>
<?php endif; ?>

<h1>Cadastrar tarefa</h1>

<form method="POST" action="/cadtarefa">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label class="form-label">Nome da tarefa</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Descrição da tarefa</label>
        <input type="text" name="desctarefa" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetos\meusite\resources\views/cadastrar.blade.php ENDPATH**/ ?>