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
        <h3>Create Employee</h3>
        <form action="<?php echo e(url('store-employee')); ?>" enctype="multipart/form-data" method="post">
            <?php echo csrf_field(); ?> 
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Birth Date</label>
                <input type="date" name="birth_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Salary</label>
                <input type="number" class="form-control" name="salary">
            </div>
            <div class="form-group">
                <label for="">Department</label>
                <select name="department" class="form-control">
                    <option value="">Select Department</option>
                    <option value="Accounting">Accounting</option>
                    <option value="HRM">Human Resource Management</option>
                    <option value="Management">Management</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Gender</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" value="Male">Male
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" value="Female">Female
                    </label>
                </div>
                <div class="form-check ">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" value="Other" >Other
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <textarea name="address" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="status" value="1">Status
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Upload Image</label>
                <input type="file" class="form-control" name="profile_pic">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
</body>
</html><?php /**PATH F:\xampp\htdocs\b2_fall2022\resources\views/employee/create.blade.php ENDPATH**/ ?>