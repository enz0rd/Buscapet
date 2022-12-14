<?php $__env->startSection('title', 'Buscapet - Empresas'); ?>

<?php $__env->startSection('content'); ?>

<?php if($busca != null): ?>
<p>Buscando por: <?php echo e($busca); ?></p>
<?php endif; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Programar\Projeto Laravel\arquivos\buscapet\resources\views/empresas.blade.php ENDPATH**/ ?>