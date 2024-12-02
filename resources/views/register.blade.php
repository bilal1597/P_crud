<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container" >
        <div class="card card-header" >
            <br>
            <h1> Register Page</h1>
            <br>
            <div class="card-body">
                <form class="row g-3" action="{{route('post.register')}}" method="POST" >
                    @csrf

                    <div class="col-md-10 ">
                        <label for="exampleInputEmail1" class="form-label">Name </label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" placeholder="Enter Your Name">
                    @error('name')
                    <span class="text-danger">{{$message}} </span>
                    @enderror
                    </div>

                      <div class="col-md-10 ">
                        <label for="exampleInputEmail1" class="form-label">Mobile No. </label>
                        <input type="number" name="number" value="{{old('number')}}" class="form-control" id="number" placeholder="Enter Mobile No.">
                        @error('number')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="col-md-10 ">
                        <label for="exampleInputEmail1" class="form-label">Email </label>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email">
                        @error('email')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>
                    <div class="col-md-10">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">
                        @error('password')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="col-md-10">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Retype Your Password">
                        @error('confirm_password')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>

                    <div>
                        <a href="{{route('login')}}" class="btn btn-success float-end">Login</a>
                    </div>
                    <div class="col-12">
                        <a href="/forgot" class="btn btn-primary float-end">Forgot Your Password</a>
                      </div>

                </form>
                    </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
