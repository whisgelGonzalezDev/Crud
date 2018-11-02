<?php $__env->startSection('content'); ?>

    <h1 class="text-center texts">Club aeronautica</h1>
    <hr>
<?php if(Session::has('message')): ?>
  <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?> 



<?php if(isset($errores)): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errores->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    <div class="container">
          
        <a href="<?php echo e(route('index.index')); ?>" class="btn btn-info mb-3">Ver registros</a>

        <form action="<?php echo e(route('index.update', $index->id)); ?>" method="POST">
             <?php echo e(csrf_field()); ?>

             <?php echo e(method_field('PUT')); ?>


            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputAmarre">Amarre:</label>
                <input value="<?php echo e($index->Amarre); ?>"  type="number" class="form-control" id="inputAmarre" name='inputAmarre' placeholder="Amarre">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmbarcacion">Embarcacion:</label>
                <input   value="<?php echo e(trim($index->Embarcacion)); ?>" type="text" class="form-control" id="inputEmbarcacion" name='inputEmbarcacion' placeholder="Embarcacion">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmpleados">Empleados:</label>
              <input value="<?php echo e(trim($index->Empleados)); ?>" type="text" class="form-control" id="inputEmpleados"  name ='inputEmpleados' placeholder="Empleados">
            </div>
            <div class="form-group">
              <label for="inputPertenece">Pertenece:</label>
              <input value="<?php echo e(trim($index->Pertenece)); ?>" type="text" class="form-control" id="inputPertenece" name ='inputPertenece' placeholder="Pertenece">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputPropietario">Propietario:</label>
                <input value="<?php echo e(trim($index->Propietario)); ?>" type="text" class="form-control" id="inputPropietario" name ='inputPropietario' placeholder="Propietario">
              </div>
              <div class="form-group col-md-4">
                <label for="inputSocio">Socio:</label>
                <input value="<?php echo e(trim($index->Socio)); ?>" type="text" class="form-control" id="inputSocio" name ='inputSocio' placeholder="Socio">
                <label for="inputZona">Zona</label>
                <select id="inputZona" name ='inputZona' class="form-control">
                  <option selected><?php echo e(trim($index->Zonas)); ?></option>
                  <option>bahia de cata</option>
                  <option>Marico El Que lo lea</option>
                  <option>JUJU maricon</option>
                  <option>Ya basta</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Actualizar</button>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>