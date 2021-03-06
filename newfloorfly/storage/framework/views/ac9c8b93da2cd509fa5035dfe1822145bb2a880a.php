<?php $__env->startSection('head_title', getcong('contact_us_title').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>

<!--Breadcrumb Section-->
  <section class="breadcrumb-box"  data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?><?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
    <!-- <div id="contact-map"></div> -->
    <div class="inner-container container">
      <!-- <h1><?php echo e(getcong('contact_us_title')); ?></h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
          <li><?php echo e(getcong('contact_us_title')); ?></li>
        </ul>
      </div> -->
    </div>
  </section>
  <!--Breadcrumb Section-->
<!-- begin:content -->
    <section class="main-container container">
     <div class="descriptive-section">       
     </div>
    <div class="contact-info clearfix">
      <div class="contact-info-box col-md-6 col-lg-4">
        <div class="inner-container">
          <i class="fa fa-envelope-o"></i>
          <div class="value"><?php echo e(getcong('contact_us_email')); ?></div>
        </div>
      </div>
      <div class="contact-info-box col-md-6 col-lg-4">
        <div class="inner-container">
          <i class="fa fa-phone"></i>
          <div class="value"><?php echo e(getcong('contact_us_phone')); ?></div>
        </div>
      </div>
      <div class="contact-info-box col-md-push-2 col-md-6 col-lg-push-0 col-lg-4">
        <div class="inner-container">
          <i class="fa fa-map-marker"></i>
          <div class="value"><?php echo e(getcong('contact_us_address')); ?></div>
        </div>
      </div>

<div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
		<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
        var setting = {"height":586,"width":1117,"zoom":17,"queryString":"FloorFly, Road-13, Dhaka, Bangladesh","place_id":"ChIJYWbyYMrFVTcRwPv8Z8eMqRQ","satellite":false,"centerCoord":[23.866806807026165,90.39612235],"cid":"0x14a98cc767fcfbc0","lang":"en","cityUrl":"/bangladesh/dhaka-2125","cityAnchorText":"Map of Dhaka, Bangladesh","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"375674"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=375674';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
      })();</script><a href="https://1map.com/map-embed">Floorfly google map</a></div>



    </div>








    <?php if(Session::has('flash_message_contact')): ?>
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
 </button>
                <?php echo e(Session::get('flash_message_contact')); ?>

            </div>
        <?php endif; ?>
                       

    <?php echo Form::open(array('url' => 'contact-us','class'=>'','id'=>'contactform','role'=>'form')); ?>

    <div class="contact-form">
      <div class="row">
        <div class="col-sm-6 field-box">
          <input type="text" name="name" placeholder="<?php echo e(trans('words.name')); ?> *" value="<?php echo e(old('name')); ?>">
          <?php if($errors->has('name')): ?>
                    <span style="color:#fb0303">
                        <?php echo e($errors->first('name')); ?>

                    </span>
          <?php endif; ?>
        </div>
        <div class="col-sm-6 field-box">
          <input type="email" name="email" placeholder="<?php echo e(trans('words.email')); ?> *" value="<?php echo e(old('email')); ?>">
          <?php if($errors->has('email')): ?>
                    <span style="color:#fb0303">
                        <?php echo e($errors->first('email')); ?>

                    </span>
          <?php endif; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 field-box">
          <input type="text" name="phone" placeholder="<?php echo e(trans('words.phone')); ?>" value="<?php echo e(old('phone')); ?>">
        </div>
        <div class="col-sm-6 field-box">
          <input type="url" name="website" placeholder="<?php echo e(trans('words.website')); ?>" value="<?php echo e(old('website')); ?>">
        </div>
      </div>
      <div class="row message">
        <textarea id="message" name="your_message" placeholder="<?php echo e(trans('words.message')); ?> *"><?php echo e(old('your_message')); ?></textarea>
        <?php if($errors->has('your_message')): ?>
                    <span style="color:#fb0303">
                        <?php echo e($errors->first('your_message')); ?>

                    </span>
          <?php endif; ?>
      </div>
      <div class="row button-box">
        <button class="btn" type="Submit"><?php echo e(trans('words.submit')); ?></button>
      </div>
    </div>
    <?php echo Form::close(); ?>

  </section>
    <!-- end:content -->
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/pages/contact.blade.php ENDPATH**/ ?>