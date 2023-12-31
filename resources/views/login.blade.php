<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    {{-- bootstrap css--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- login css --}}
    <link rel="stylesheet" href="/css/login.css">
    {{-- font awesome library --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('loginError')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-block container-fluid" style="height:100vh; padding: 150px 0">
        <div class="row justify-content-center content-box" style="height: 350px;">
            <div class="col-md-2 p-3 d-flex align-items-center left-box"  style="background-color: #FF7A00; border-radius: 35px 0 0 25px">
                <div class="py-5">
                    <h2 class="fw-semibold" style="color: #ffffff">Hello!</h2>
                    <p style="color: #ffffff">Enter your personal details and start your journey with us.</p>
                    <a class="btn btn-light fw-semibold" href="/register">Register Now!</a>
                </div>
            </div>
            <div class="col-md-4 p-3 px-5 d-flex align-items-center rightbox" style="background-color: #f9f9f9; border-style: solid; border-color: #FF7A00; border-radius: 0 25px 25px 0">
                <div class="w-100">
                    <h2 class="mb-4 fw-semibold text-center">Login</h2>
                    <div class="form-login">
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" autofocus required value="{{old('email')}}">
                                <label for="email">Email address</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>
                            
                            <div class="d-flex justify-content-center mt-4">
                                <button class="btn btn-primary fw-semibold" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>