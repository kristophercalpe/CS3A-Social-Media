<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   

</head>
<body class="bg-light">

<div class="container bg-dark text-light p-3 rounded my-4">
        <div class="d-flex align-items-center justify-content-between px-3">
        <h2>ADMIN PANEL</h2>
             <form class="form-inline">
                <button type="button" class="btn btn-success">
                <i class="bi bi-plus-lg"><a href="/adminpanel" class="text-light" style="text-decoration:none; property"></i> Admin List</a>
                </button>
                <button type="button" class="btn btn-success">
                <i class="bi bi-people"><a href="/profile" class="text-light" style="text-decoration:none; property"></i> User List </a>
                </button>
                <button type="button" class="btn btn-success">
                <i class="bi bi-box-arrow-in-right"><a href="/adminpanel" class="text-light" style="text-decoration:none; property"></i> Back</a>
                </button>
            </form>
        </div>
    </div>
    <div class="container mt-5 p-0">
        @if($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        @if(session('message'))
            <h5>{{session('message')}}</h5>
        @endif
    </div>
    <div style="width:1100px; margin:5px auto">
    <div class="card">
        <div class="card-header">
            <h3> Admin Profile</h3>
        </div>
        <div class="card-body">

        <form action="{{url('admin/'.$admin->admin_id)}}" method="POST">
        @csrf
            @method('PUT')
            <div class="form-group">
                <label for="fullname">Your Full Name</label>
                <input type="text" name="fullname" value="{{$admin->admin_fullname}}" class="form-control"><br>
                </div>
            <div class="form-group">
                <label for="name">Your Username</label>
                <input type="text" name="name" value="{{$admin->admin_username}}" class="form-control"><br>
            </div>
            
            <div class="form-group">
                <label for="password">Your Password</label>
                <input type="text" name="password" value="{{$admin->admin_password}}" class="form-control"><br>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Update</button>
              </div>
        </form>
         </div>
    </div>
</div>
</body>
</html>
