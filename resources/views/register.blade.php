<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    {{-- bootstrap css--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- login css --}}
    <link rel="stylesheet" href="/css/login.css">
    {{-- font awesome library --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="d-block container-fluid" style="height:100vh; padding: 150px 0">
        <div class="row justify-content-center content-box" style="height: 350px;">
            <div class="col-md-2 p-3 d-flex align-items-center left-box"  style="background-color: #FF7A00; border-radius: 35px 0 0 25px">
                <div class="py-5">
                    <h2 class="fw-semibold" style="color: #ffffff">Welcome Back!</h2>
                    <p style="color: #ffffff">Log in to your account if have registered.</p>
                    <a class="btn btn-light fw-semibold" href="/login">Login</a>
                </div>
            </div>
            <div class="col-md-4 p-3 px-5 d-flex align-items-center rightbox" style="background-color: #f9f9f9; border-style: solid; border-color: #FF7A00; border-radius: 0 25px 25px 0">
                <div class="w-100">
                    <h2 class="mb-4 fw-semibold text-center">Register</h2>
                    <div class="form-register">
                        <form action="/register" method="post">
                            @csrf
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{old('name')}}">
                                <label for="name">Name</label>
                                @error('name')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email@example.com" required value="{{old('email')}}">
                                <label for="email">Email address</label>
                                @error('email')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                                <label for="password">Password</label>
                                @error('password')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password_confirmation" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password_confirmation" placeholder="Password Confirmation" required>
                                <label for="password_confirmation">Confirm Password</label>
                                @error('password_confirmation')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            
                            <div class="d-flex justify-content-center mt-4">
                                <button class="btn btn-primary fw-semibold" type="submit">Submit</button>
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