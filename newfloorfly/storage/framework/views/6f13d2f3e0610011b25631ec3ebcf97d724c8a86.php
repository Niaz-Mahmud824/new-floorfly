
 <?php echo $__env->make("_particles.ads_widget", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
 <?php
         
 $homeads1=\App\FrontDesign::where('type','home-sidebar-ads1')->first();
$servicebanner=\App\FrontDesign::where('type','service')->first();
 $commercialproject=\App\FrontDesign::where('type','commercial projects')->first();

            ?>
<div class="sidebar-box">
  <h3><?php echo e(trans('words.property_type')); ?></h3>
  <div class="box-content">
    <ul>
      <?php $__currentLoopData = \App\Types::orderBy('types')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><a href="<?php echo e(URL::to('type/'.$type->slug.'')); ?>" style="color: #333333;"><?php echo e($type->types); ?></a>&nbsp;(<?php echo e(countPropertyType($type->id)); ?>)</li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
    </ul>
  </div>
</div>

               
                  
<div class="home-page-ads1 boxShadow" style="margin-top:19px;">

<a href="<?php echo e($homeads1->link); ?>"> <img src="<?php echo e(URL::asset($homeads1->image)); ?>"
        alter="<?php echo e($homeads1->name); ?>" /></a>

</div>
<div class="bottom-banner boxShadow" style="margin-top:19px;"> 
                    <a href="<?php echo e($servicebanner->link); ?>"> <img src="<?php echo e(URL::asset($servicebanner->image)); ?>" alter="<?php echo e($servicebanner->name); ?>"/></a>
                    </div>
 <div class="bottom-banner boxShadow" style="margin-top:19px;">
                                <a href="<?php echo e($commercialproject->link); ?>"> <img
                                        src="<?php echo e(URL::asset($commercialproject->image)); ?>"
                                        alter="<?php echo e($commercialproject->name); ?>" /></a>
                            </div>                 

<div class="sidebar-box" style="margin-top:19px; ">
  <h3><?php echo e(trans('words.featured_properties')); ?></h3>
  <div class="box-content">
    <div class="featured-properties">
      <div class="property-box">
        
        <?php $__currentLoopData = \App\Properties::where('featured_property',1)->orderBy('id','desc')->take(5)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="clearfix">
          <span class="img-container col-xs-4">
            <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt="Image of Property">
          </span>
          <span class="details col-xs-8">
            <span class="title"><?php echo e(Str::limit($property->property_name,35)); ?></span>
            <span class="location"><?php echo e(Str::limit($property->address,40)); ?></span>
            <span class="price"><?php echo e(getcong('currency_sign').' '.$property->price); ?></span>
          </span>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
      </div>
    </div>
  </div>
</div>

<!--End of Sidebar Box--><?php /**PATH C:\xampp\htdocs\newfloorfly\resources\views/_particles/sidebar.blade.php ENDPATH**/ ?>