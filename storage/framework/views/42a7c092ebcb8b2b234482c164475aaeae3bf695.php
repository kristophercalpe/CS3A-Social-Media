<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body class="bg-light">

    <div class="container bg-dark text-light p-3 rounded my-4">     
        <div class="d-flex align-items-center justify-content-between px-3">
        <h2>USER LIST</h2>
        <form class="form-inline">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addnewuser">
        <i class="bi bi-plus-lg"></i> Create New User
        </button>
        <button type="button" class="btn btn-success">
                <i class="bi bi-box-arrow-in-right"><a href="/adminpanel" class="text-light" style="text-decoration:none; property"></i> Back</a>
                </button>
            </form>
            </div>
    </div>
    <div class="container mt-5 p-0">
         <?php if($errors->any()): ?>
             <ul class="alert alert-warning">
                 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <li><?php echo e($error); ?></li>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </ul>
        <?php endif; ?>

        <?php if(session('message')): ?>
            <h5><?php echo e(session('message')); ?></h5>
       <?php endif; ?>
     </div>
        
    <div class="container mt-5 p-0">
        <table class="table table-hover text-center">
            <thead class="bg-dark text-light">
                <tr>
                <th width="10%" scope="col" class="rounded-start">No.</th>
                <th width="15%" scope="col">Full Name</th>
                <th width="15%" scope="col">Username</th>
                <th width="15%" scope="col">Email Address</th>
                <th width="20%" scope="col" class="rounded-end">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                 <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <th scope="row"><?php echo e($loop->index+1); ?></th>
                 <td><?php echo e($user->user_fullname); ?></td>
                 <td><?php echo e($user->user_username); ?></td>
                 <td><?php echo e($user->user_email); ?></td>
                 <td><a href="<?php echo e(url('user/'.$user->user_id.'/edit')); ?>" class="btn btn-warning me-2"> Edit</i></a>
                 <a href="/user-delete/<?php echo e($user->user_id); ?>" class="btn btn-danger">Remove</i></a>
                 </td>
                 </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            </tbody>
        </table>
    </div>         
    <div class="modal fade" id="addnewuser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <form action="<?php echo e(url('user')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New User</h5>
            </div>
            <div class="modal-body">
            <div class="input-group mb-3">
                    <span class="input-group-text">Full Name</span>
                    <input type="text" class="form-control" name="fullname">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Username</span>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Email Address</span>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Password</span>
                    <input type="text" class="form-control" name="password">
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            </div>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Kristopher\AppData\Local\GitHubDesktop\app-2.9.11\CS3A-Social-Media\resources\views/profile.blade.php ENDPATH**/ ?>