<?php $__env->startSection("content"); ?>
<div id="main">
	<div class="page-header">
		
		<div class="pull-right">
			<a href="<?php echo e(URL::to('admin/partners/addpartners')); ?>" class="btn btn-primary"><?php echo e(trans('words.add').' '.trans('words.partner')); ?> <i class="fa fa-plus"></i></a>
		</div>
		<h2>Partners</h2>
	</div>
	<?php if(Session::has('flash_message')): ?>
				    <div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
				        <?php echo e(Session::get('flash_message')); ?>

				    </div>
	<?php endif; ?>
     
<div class="panel panel-default panel-shadow">
    <div class="panel-body">
         
        <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
	            <tr>
			
	                <th><?php echo e(trans('words.image')); ?></th>
	                <th><?php echo e(trans('words.name')); ?></th>
	                <th><?php echo e(trans('words.url')); ?></th> 
	                <th class="text-center width-100"><?php echo e(trans('words.action')); ?></th>
	            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $partnerslist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $partners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         	   <tr>
            	<td> <?php if($partners->partner_image): ?>
                                 
									<img src="<?php echo e(URL::asset('upload/partners/'.$partners->partner_image.'.jpg')); ?>" width="100" alt="">
					<?php endif; ?></td>
                <td><?php echo e($partners->name); ?></td>
                <td><?php echo e($partners->url); ?></td>
                <td class="text-center">

                	<a href="<?php echo e(url('admin/partners/addpartners/'.Crypt::encryptString($partners->id))); ?>" class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5" data-toggle="tooltip" title="<?php echo e(trans('words.edit')); ?>"> <i class="fa fa-edit"></i> </a>
                 <a href="<?php echo e(url('admin/partners/delete/'.Crypt::encryptString($partners->id))); ?>" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')" data-toggle="tooltip" title="<?php echo e(trans('words.remove')); ?>"> <i class="fa fa-remove"></i> </a>
 
            </td>
                
            </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
            </tbody>
        </table>
    </div>
    <div class="clearfix"></div>
</div>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newfloorfly\resources\views/admin/pages/partnerslist.blade.php ENDPATH**/ ?>