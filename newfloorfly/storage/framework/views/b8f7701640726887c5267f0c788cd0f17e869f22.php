<?php $__env->startSection('content'); ?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        <h2 style="text-align: center;">Advisor Details</h2>
                        <a href="<?php echo e(url('admin/userpdf/'.Crypt::encryptString($user->id))); ?>"  class="btn" style="float:right;" >Export Pdf</a>

                        <?php if(isset($user->profile_image)): ?>
                            <img class="align-self-center mr-3" src="<?php echo e(URL::asset($user->profile_image)); ?>" width="100"
                                height="100" alt="person">
                        <?php endif; ?>

                    </th>



                </tr>
                <tr>

                    <th>
                        <h4> Personal Information </h4>
                    </th>
                </tr>


            </thead>
            <tbody>

                <tr>

                    <td>

                        <div class="col-sm-4">
                            <b>Name:</b> <?php echo e($user->name); ?><br>
                        </div>
                        <div class="col-sm-4">
                            <b>Father's Name:</b> <?php echo e($user->agent_father); ?><br>

                        </div>
                        <div class="col-sm-4">
                            <b>Mother's Name:</b> <?php echo e($user->agent_mother); ?><br>

                        </div>
                    </td>

                </tr>


                <tr>
                    <td>
                        <div class="col-sm-4">
                            <b>Email:</b> <?php echo e($user->email); ?><br>
                        </div>
                        <div class="col-sm-4">
                            <b>Phone:</b> <?php echo e($user->phone); ?><br>
                        </div>

                        <div class="col-sm-4">
                            <b>Date of birth:</b> <?php echo e($user->agent_dob); ?><br>
                        </div>



                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="col-sm-4">
                            <b> Present Address:</b> <?php echo e($user->agent_present_address); ?><br>
                        </div>
                        <div class="col-sm-4">
                            <b> Permanent Address:</b> <?php echo e($user->agent_permanent_address); ?><br>
                        </div>
                        <div class="col-sm-4">
                            <b>NID Number:</b> <?php echo e($user->agent_nid); ?>

                        </div>
                    </td>
                </tr>

            </tbody>
            <thead>

                <tr>

                    <th>
                        <h4>Education </h4>
                    </th>
                </tr>
            </thead>
            <thead>

                <tr>
                    <th>
                        <div class="col-sm-4" style="font-size: 16px;"><strong>Degree</strong></div>
                        <div class="col-sm-4" style="font-size: 16px;"><strong>Institute</strong></div>
                        <div class="col-sm-4" style="font-size: 16px;"><strong>Result</strong></div>
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php
                            $educations = App\Education::where('user_id', $user->id)->get();

                        ?>
                        <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php if(!empty($education->institue) && !empty($education->agent_result) && !empty($education->agent_degree)): ?>


                                <div class="col-sm-4">
                                    <?php echo e($education->agent_degree); ?>

                                </div>

                                <div class="col-sm-4">
                                    <?php echo e($education->institue); ?>

                                </div>

                                <div class="col-sm-4">

                                    <?php echo e($education->agent_result); ?>

                                </div>

                            <?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                </tr>
            </tbody>


            <thead>

                <tr>

                    <th>
                        <h4>Experiences </h4>
                    </th>
                </tr>
            </thead>

            <thead>

                <tr>
                    <th>
                        <div class="col-sm-4" style="font-size: 16px;"><strong>Comapny</strong></div>
                        <div class="col-sm-4" style="font-size: 16px;"><strong>Position</strong></div>
                        <div class="col-sm-4" style="font-size: 16px;"><strong>Department</strong></div>


                    </th>

                </tr>
            </thead>

            <tbody>
                <tr>

                    <td>

                        <?php
                            $companys = App\Company::where('user_id', $user->id)->get();

                        ?>
                        <?php $__currentLoopData = $companys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(!empty($company->company) && !empty($company->position) && !empty($company->department)): ?>
                                <div class="col-sm-4">
                                    <?php echo e($company->company); ?>

                                </div>

                                <div class="col-sm-4">
                                    <?php echo e($company->position); ?>

                                </div>

                                <div class="col-sm-4">

                                    <?php echo e($company->department); ?>

                                </div>



                            <?php endif; ?>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    </td>
                </tr>


            </tbody>
            <thead>
<tr>
    <th>
        Years Of Experience : <?php echo e($user->yrs_exp); ?>

    </th>
</tr>

            </thead>

        <?php if(isset($user->skill)): ?>
        <thead>
            <tr>
                <th>
                    <b>Skill:</b> <?php echo e($user->skill); ?><br>

                </th>
            </tr>


        </thead>
    <?php endif; ?>

        </table>
<p class="text-muted" style="text-align: center;">I have read and accepted all the tearms and conditions</p><br><br>
<p style="text-decoration: overline black;">Advisor/Seller Signature</p><br><br>

    </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newfloorfly\resources\views/admin/pages/usersdetails.blade.php ENDPATH**/ ?>