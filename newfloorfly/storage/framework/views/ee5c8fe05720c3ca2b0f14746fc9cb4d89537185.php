<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>

<body>
    <div class="comtainer">
        <h2 style="text-align:center;">Advisor Details</h2>
        <table class="table">
            <thead>

                <tr>
                    <th>


                        <?php if(isset($user->profile_image)): ?>


                            <img class="rounded-circle" src="<?php echo e(URL::asset($user->profile_image)); ?>" width="100"
                                height="100" alt="person" style=" border-radius: 50%;">
                        <?php endif; ?>

                    </th>



                </tr>
            </thead>
                        <tbody>


                            <tr>

                                <th>
                                    <h4 style="color:red;"> Personal Information </h4>
                                </th>
                            </tr>

                            <tr>
                                <th>Name</th>
                                <th>Father's Name</th>
                                <th>Mother's Name</th>
                            </tr>



                            <tr>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->agent_father); ?></td>
                                <td><?php echo e($user->agent_mother); ?></td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date of Birth</th>
                            </tr>

                            <tr>


                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->phone); ?></td>
                                <td><?php echo e($user->agent_dob); ?></td>


                            </tr>

                            <tr>

                                <th>Present Address</th>
                                <th>Permanent Address</th>
                                <th> NID Number</th>
                                <th></th>
                            </tr>

                            <tr>
                                <td><?php echo e($user->agent_present_address); ?></td>
                                <td> <?php echo e($user->agent_permanent_address); ?></td>
                                <td><?php echo e($user->agent_nid); ?></td>
                                <td></td>
                            </tr>

                            <tr>

                                <th>
                                    <h4 style="color:red;">Education </h4>
                                </th>
                            </tr>
                            <tr>

                                <th>Degree</th>
                                <th>Institute</th>
                                <th>Result</th>


                            </tr>



                            <?php
                                $educations = App\Education::where('user_id', $user->id)->get();

                            ?>

                            <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                                <?php if(!empty($education->institue) && !empty($education->agent_result) && !empty($education->agent_degree)): ?>
                                    <tr>
                                        <td> <?php echo e($education->agent_degree); ?></td>

                                        <td><?php echo e($education->institue); ?></td>

                                        <td><?php echo e($education->agent_result); ?></td>

                                    </tr>
                                <?php endif; ?>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





                            <tr>

                                <th>
                                    <h4 style="color:red;">Work Experiences </h4>
                                </th>
                            </tr>




                            <tr>
                         <th>Comapny</th>
                          <th> Position</th>
                         <th> Department</th>

                            </tr>

                                    <?php
                                        $companys = App\Company::where('user_id', $user->id)->get();

                                    ?>
                                    <?php $__currentLoopData = $companys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(!empty($company->company) && !empty($company->position) && !empty($company->department)): ?>
                                           <tr>
                                           <td><?php echo e($company->company); ?>

                                        </td>


                                          <td><?php echo e($company->position); ?></td>




                                          <td><?php echo e($company->department); ?></td>
                                           </tr>





                                        <?php endif; ?>


                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>









                            <tr>
                                <th>
                                    Years Of Experience : <?php echo e($user->yrs_exp); ?>

                                </th>
                            </tr>



                            <?php if(isset($user->skill)): ?>

                                <tr>
                                    <th>
                                        <b>Skill:</b> <?php echo e($user->skill); ?><br>

                                    </th>
                                </tr>



                            <?php endif; ?>
                        </tbody>
                    </table>

        <p class="text-muted" style="text-align: center;">I have read and accepted all the tearms and conditions</p>
        <br><br>
        <p style="text-decoration: overline black;">Advisor/Seller Signature</p><br>

    </div>






</body>

</html>
<?php /**PATH C:\xampp\htdocs\newfloorfly\resources\views/admin/pages/userspdf.blade.php ENDPATH**/ ?>