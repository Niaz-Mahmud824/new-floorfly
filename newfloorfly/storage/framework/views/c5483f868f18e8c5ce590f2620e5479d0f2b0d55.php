<?php if(isset($category_id)): ?>
   <?php $pcat=\App\ServiceCategory::find($category_id)->first()->name; ?>
   <?php $__env->startSection('head_title', $pcat .' | '.getcong('site_name') ); ?>
   <?php $__env->startSection('head_url', Request::url()); ?>

<?php elseif(isset($subcategory_id)): ?>
    <?php $scat=\App\ServiceSubcategory::where('id',$subcategory_id)->first()->name; ?>
    <?php $__env->startSection('head_title', $scat .' | '.getcong('site_name') ); ?>
    <?php $__env->startSection('head_url', Request::url()); ?>

<?php elseif(isset($subsubcategory_id)): ?>
    <?php $sscat=\App\ServiceChildcategory::where('id',$subsubcategory_id)->first()->name; ?>
    <?php $__env->startSection('head_title', $sscat .' | '.getcong('site_name') ); ?>
    <?php $__env->startSection('head_url', Request::url()); ?>
<?php else: ?>
    <?php $__env->startSection('head_title', trans('words.all_services').' | '.getcong('site_name') ); ?>
    <?php $__env->startSection('head_url', Request::url()); ?>
<?php endif; ?>

<?php $__env->startSection("content"); ?>

    <!--Breadcrumb Section-->
    <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
        <div class="inner-container container">
            
        </div>
    </section>
    <!--Breadcrumb Section-->

    <section class="main-container container">
        <div class="content-box col-sm-8">


          <!-- service -->
            <section class=" boxed-view clearfix" style="margin-top: 0px;padding: 0px;">
            <div class="inner-container clearfix">
                <?php if(count($service) >0 ): ?>
                <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="property-box">

                     <div class="inner-box services-box">
                            <div class="service-single">
                            <div class="service-image">
                                <img src="<?php echo e(url($row->service_image)); ?>" alt="<?php echo e($row->service_name); ?>" class="img-thumbnail">
                                <span class="tag-label phone-for-service"> <i class="fa fa-phone"> </i> +880 9612 232323</span>
                            </div>
                            <div class="service-text">
                                <h1 style="padding:5px 0px"><?php echo e($row->service_name); ?></h1>
                                <p><?php echo $row->service_description; ?></p>
                            </div> 
                        </div> 

                        
                     </div> <!--inner-box-->

                     <div class="inner-box services-box">
                            <!-- Contact for service -->
                        <div class="contact-form-container" id="agentscontact_sec">
                            <?php echo Form::open(array('url'=>'agentscontact','method'=>'POST', 'id'=>'agent_contact_form')); ?>


                            <input type="hidden" name="property_id" value="<?php echo e($row->id); ?>">
                            <input type="hidden" name="lead_name" value="<?php echo e($row->service_name); ?>">
                            <input type="hidden" name="agent_id" value="1">         
                            <input type="hidden" name="lead_type" value="service">

                            <div class="contact-form">
                                <h2>Appoint US Now || <i class="fa fa-phone"> </i> +880 9612 232323</h2>
                                <div class="field-box">
                                    <input type="text" placeholder="<?php echo e(trans('words.name')); ?> *" name="name">
                                    <?php if($errors->has('name')): ?>
                                    <span style="color:#fb0303">
                                        <?php echo e($errors->first('name')); ?>

                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="field-box">
                                    <input type="email" placeholder="<?php echo e(trans('words.email')); ?> *" name="email">
                                    <?php if($errors->has('email')): ?>
                                    <span style="color:#fb0303">
                                        <?php echo e($errors->first('email')); ?>

                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="field-box">
                                    <input type="text" placeholder="<?php echo e(trans('words.phone')); ?>" name="phone">
                                </div>
                                <textarea id="message" name="message" placeholder="<?php echo e(trans('words.message')); ?> *"></textarea>
                                <?php if($errors->has('message')): ?>
                                    <span style="color:#fb0303">
                                        <?php echo e($errors->first('message')); ?>

                                    </span>
                                    <br><br>
                                <?php endif; ?>
                                <button type="submit" class="btn btn-lg submit" name="submit"><?php echo e(trans('words.submit')); ?></button>
                            </div>
                            <?php echo Form::close(); ?>

                        </div><!-- Contact for service -->
                     </div> <!--inner-box-->
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php else: ?>
                <p>Page Not Found.</p>
                <?php endif; ?>


            </div>
            <!-- Pagination -->
           
            <!-- End of Pagination -->
            </section>
          <!-- End of Properties -->
            </div>
            <aside class="col-sm-4">
            <?php echo $__env->make("_particles.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
            </aside>
    </section>

 
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/pages/service-pages.blade.php ENDPATH**/ ?>