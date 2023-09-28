<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/css1/style.css') }}">
    <title>Login</title>
</head>

<body>
    <div class="container my-5 pb-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-dark border-0 mb-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <h1><span class="text-primary">Log</span>in</h1>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                        </div>
                        <form role="form">
                            @if(count($errors) > 0)
                            @foreach( $errors->all() as $message )
                            <div class="alert alert-danger display-hide" >
                                <span>{{ $message }}</span>
                            </div>
                            @endforeach     
                            @endif
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <div class="input-group input-group-merge input-group-alternative">
                                    <input name="email" class="form-control" placeholder="Email" type="email" required>
                                </div>

                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <div class="input-group input-group-merge input-group-alternative">
                                    <input name="password" class="form-control" placeholder="Password" type="password" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4" style="width: 100%;">Login</button>
                                <small class="text-white">TidakPunyaAkun?<a href="/register">BuatAkun</a></small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
