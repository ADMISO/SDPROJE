<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
        <h3>All Employees</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Birth Date</th>
                    <th>Salary</th>
                    <th>Department</th>
                    <th>Gender</th>
                    <th>Status</th>
                    <th>Profile Pic</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($e->name); ?></td>
                    <td><?php echo e($e->email); ?></td>
                    <td><?php echo e($e->birth_date); ?></td>
                    <td><?php echo e($e->salary); ?></td>
                    <td><?php echo e($e->department); ?></td>
                    <td><?php echo e($e->gender); ?></td>
                    <td>
                        <?php if($e->status==1): ?>
                        <span class="badge badge-success">Active</span>
                        <?php else: ?> 
                        <span class="badge badge-danger">Inactive</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <img src="<?php echo e(asset('thumbnail/'.$e->profile_pic)); ?>" alt="">
                    </td>
                    <td><?php echo e($e->address); ?></td>
                    <td>
                        <a href="<?php echo e(url('/edit-employee/'.$e->id)); ?>" class="btn btn-secondary">Edit</a>
                        <a data-toggle="modal" data-target="#myModal<?php echo e($e->id); ?>" class="btn btn-danger">Delete</a>
                        <div class="modal" id="myModal<?php echo e($e->id); ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Confirmation</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    Are you sure you want to delete <?php echo e($e->name); ?>?
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <a href="<?php echo e(url('/delete-employee/'.$e->id)); ?>" class="btn btn-success">Yes</a>
                                </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>
    </div>
</body>
</html><?php /**PATH F:\xampp\htdocs\b2_fall2022\resources\views/employee/employees.blade.php ENDPATH**/ ?>