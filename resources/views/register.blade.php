<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}" />
        <title>Document</title>
    </head>
    <body>
        <div class="login-content d-flex justify-content-center align-items-center">
            <div class="content">
                <form action="/register" method="post" class="form_container">
                    @csrf
                    <div class="title_container">
                        <p class="title">Create your Account</p>
                        <span class="subtitle">
                            Get started with our web, just create an account and enjoy
                            the experience.
                        </span>
                    </div>
                    <div class="input_container">
                        <label class="input_label" for="user_field">Username</label>
                        @error('username')
                            <p class="m-0 p-0 invalid_feedback"><small>{{ $message }}</small></p>
                        @enderror
                        <i class="icon fa-solid fa-user" style="color: #000000;"></i>
                        <input
                            placeholder="Username"
                            name="username"
                            type="text"
                            class="input_field @error('username') is_invalid @enderror"
                            id="user_field"
                            value="{{ old('username') }}"
                        />
                    </div>
                    <div class="input_container">
                        <label class="input_label" for="password_field">Password</label>
                        @error('password')
                            <p class="m-0 p-0 invalid_feedback"><small>{{ $message }}</small></p>
                        @enderror
                        <i class="icon fa-solid fa-lock" style="color: #000000;"></i>
                        <input
                            placeholder="Password"
                            name="password"
                            type="password"
                            class="input_field @error('password') is_invalid @enderror"
                            id="password_field"
                        />
                    </div>
                    <div class="input_container">
                        <label class="input_label" for="address_field">Address</label>
                        @error('address')
                            <p class="m-0 p-0 invalid_feedback"><small>{{ $message }}</small></p>
                        @enderror
                        <i class="icon fa-solid fa-location-dot" style="color: #000000;"></i>
                        <input
                            placeholder="Address"
                            name="address"
                            type="text"
                            class="input_field @error('address') is_invalid @enderror"
                            id="address_field"
                            value="{{ old('address') }}"
                        />
                    </div>
                    <div class="input_container">
                        <label class="input_label" for="phone_field">Phone Number</label>
                        @error('phone_number')
                            <p class="m-0 p-0 invalid_feedback"><small>{{ $message }}</small></p>
                        @enderror
                        <i class="icon fa-solid fa-phone" style="color: #000000;"></i>
                        <input
                            placeholder="Phone Number"
                            name="phone_number"
                            type="text"
                            class="input_field @error('phone_number') is_invalid @enderror"
                            id="phone_field"
                            value="{{ old('phone_number') }}"
                        />
                    </div>
                    <button title="Sign In" type="submit" class="sign-in_btn">
                        <span>Register</span>
                    </button>
        
                    <p class="subtitle">already had an account? <a href="/login" class="note">login now</a></p>
                    <a href="/"><i class="fa-solid fa-angle-left fa-xl" style="color: #292929;"></i></a>
                </form>
            </div>
        </div>


        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
            integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
    </body>
</html>
