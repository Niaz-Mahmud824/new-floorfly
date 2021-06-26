<header id="main-header">
    <div id="header-top">

        <div class="header-top-content container">
            <!-- Language Switcher -->
            <ul id="language-switcher" class="list-inline" style="border-right: 0px;">
               <li style="border:none;"><a href="tel:<?php echo e(getcong('contact_us_phone')); ?>"><i class="fa fa-phone"></i>&nbsp; <?php echo e(getcong('contact_us_phone')); ?></a></li>
              <li style="border:none;"><a href="mailto:<?php echo e(getcong('contact_us_email')); ?>"><i class="fa fa-envelope-o"></i>&nbsp; <?php echo e(getcong('contact_us_email')); ?></a></li>
            </ul>
            <!-- End of Language Switcher -->
            <!-- Login Links -->
            <ul id="login-boxes" class="list-inline">
             <?php if(Auth::check()): ?>
             <li><a href="<?php echo e(URL::to('dashboard')); ?>"><?php echo e(trans('words.dashboard_text')); ?></a></li>
              <li><a href="<?php echo e(URL::to('logout')); ?>"><?php echo e(trans('words.logout')); ?></a></li>
             <?php else: ?>
             <li><a href="<?php echo e(URL::to('login')); ?>"><?php echo e(trans('words.login_text')); ?></a></li>
             <li><a href="<?php echo e(URL::to('register')); ?>"><?php echo e(trans('words.sign_up')); ?></a></li>
             <li><a href="<?php echo e(URL::to('register/agent')); ?>" class="btn-success btn-agentRg"><?php echo e('Advisor Registration'); ?></a></li>
             <?php endif; ?>

            </ul>
            <!-- End of Login Links -->
        </div>
        <img src="<?php echo e(URL::asset('site_assets/img/mujib.png')); ?>" class="rounded-circle" alt="author image" style=" height: 120px; float:right; margin-right:10px; ">
    </div>

    <div class="main-header-cont">
        <div class="container">
            <div class="menu-bg ">
                <div class="row">
                    <!-- Top Logo -->
                    <div class="logo-main-box col-xs-6 col-sm-4 col-md-2">
                        <a href="<?php echo e(URL::to('/')); ?>"><?php if(getcong('site_logo')): ?>
                        <img src="<?php echo e(URL::asset('upload/'.getcong('site_logo'))); ?>" alt="<?php echo e(getcong('site_name')); ?>" width="175"> <?php else: ?> <span><?php echo e(getcong('site_name')); ?></span> <?php endif; ?>

                        </a>
                    </div>
                    <!-- End of Top Logo -->

                    <!-- Main Menu -->
                    <div class="top-menu-container col-xs-6 col-sm-8 col-md-10">
                        <nav class="main-menu-area">
                            <?php
                            $serviceCategory = CategoryControl();
                            ?>
                            <ul class="menu menu-hide">
                            <li class="active"><a href="<?php echo e(URL::to('/')); ?>" class="<?php echo e(classActivePathPublic('')); ?>"><?php echo e(trans('words.home')); ?></a>
                            <li><a href="<?php echo e(URL::to('properties/')); ?>" class="<?php echo e(classActivePathPublic('properties')); ?>"><?php echo e(trans('words.all_properties')); ?></a></li>
                                <?php $__currentLoopData = $serviceCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serviceCategorydata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $serviceSubcategory = App\ServiceSubcategory::where('service_category_id', $serviceCategorydata->id)->get();
                                ?>
                                <li class="parent">
                                    <a  href="<?php echo e(route('category.details', [$serviceCategorydata->slug, $serviceCategorydata->id])); ?>"><?php echo e($serviceCategorydata->name); ?></a>
                                    <span class="fa fa-angle-down"></span>
                                    <ul class="sub-menu">
                                        <?php $__currentLoopData = $serviceSubcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serviceSubcategorydata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="parent">
                                            <a href="<?php echo e(route('category.details', [$serviceSubcategorydata->slug, $serviceSubcategorydata->id])); ?>"><?php echo e($serviceSubcategorydata->name); ?>


                                            <?php
                                            $serviceChildcategory = App\ServiceChildcategory::where('service_subcategory_id', $serviceSubcategorydata->id)->get();
                                            $val = count($serviceChildcategory);
                                            ?>
                                            </a>
                                            <?php if($val > 0): ?>
                                            <span class="fa fa-angle-down"></span>
                                            <?php endif; ?>
                                            <ul class="sub-menu">
                                            <?php $__currentLoopData = $serviceChildcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serviceChildcategorydata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e(route('category.details', [$serviceChildcategorydata->slug, $serviceChildcategorydata->id])); ?>"><?php echo e($serviceChildcategorydata->name); ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <li><a href="<?php echo e(route('blog')); ?>" class="<?php echo e(classActivePathPublic('blog')); ?>"><?php echo e('Blog'); ?></a></li>

                                <li class="parent">
                                <a href="#" class="<?php echo e(classActivePathPublic('agents')); ?>"><?php echo e('Seller'); ?></a>
                                <span class="fa fa-angle-down"></span>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo e(URL::to('register')); ?>"><?php echo e('Seller Registration'); ?> </a></li>
                                    <li><a href="<?php echo e(URL::to('profile')); ?>"><?php echo e('My Profile'); ?> </a></li>
                                    <li><a href="<?php echo e(URL::to('my_properties')); ?>"><?php echo e('My Properties'); ?> </a></li>
                                </ul>
                                </li>

                                <li class="parent">
                                <a href="javascript:void(0)}" class="<?php echo e(classActivePathPublic('agents')); ?>"><?php echo e(trans('words.agents')); ?></a>
                                <span class="fa fa-angle-down"></span>
                                <ul class="sub-menu">
<li><a href="<?php echo e(URL::to('agents/')); ?>"><?php echo e('Our Advisor'); ?></a></li>
                                    <li><a href="<?php echo e(URL::to('register/agent')); ?>"><?php echo e('Advisor Registration'); ?></a></li>

                                    <li><a href="<?php echo e(URL::to('profile')); ?>"><?php echo e('My Profile'); ?> </a></li>
                                    <li><a href="<?php echo e(URL::to('my_properties')); ?>"><?php echo e('My CRM'); ?> </a></li>
                                </ul>
                                </li>

                                
                            </ul>
                            

                            <div class="mobile-view-menu">
                                <div id="main-menu-handle" class="responsive-menu menu-tab">
                                    <div id="one"></div>
                                    <div id="two"></div>
                                    <div id="three"></div>
                                </div>
                                <!-- Mobile Menu handle -->

                                 <?php if(Auth::check()): ?>
                                <?php if(Auth::user()->usertype =='Agents'): ?>
                                    <a id="submit-property-link" class="btn" href=""><span><?php echo e('Property List'); ?></span></a>
                                <?php else: ?>
                                <a id="submit-property-link" class="btn" href="<?php echo e(URL::to('submit-property')); ?>"><span><?php echo e(trans('words.submit_property')); ?></span></a>
                                <?php endif; ?>

                                 <?php else: ?>
                                <a id="submit-property-link" class="btn" href="<?php echo e(URL::to('submit-property')); ?>"><span><?php echo e(trans('words.submit_property')); ?></span></a>
                                <?php endif; ?>

                            </div>
                        </nav><!-- END of Main Menu -->
                    </div><!-- Main Menu -->

                </div> <!-- menu-bg -->

            </div> <!-- row -->

        </div> <!-- container -->

    </div><!--main-header-cont-->


  </header>

<?php /**PATH C:\xampp\htdocs\newfloorfly\resources\views/_particles/header.blade.php ENDPATH**/ ?>