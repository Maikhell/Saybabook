<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saybabook</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/editaccount.css')}}">
    <link rel="icon" type="image/x-icon" href="{{ asset('icons/Saybabook-ico.png') }}">
</head>

<body>
    @auth
        @include('layouts.navbar')
        <div class="container">
            <form action="/editaccount" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-3" id="outerProfile">
                        <div class="row" id="innerProfile">
                            <div class="col-sm-12">
                                <img src="{{ asset('icons/default_profile.png') }}" alt="" class="profileImage">
                            </div>
                            <div class="col-sm-12">
                                <button class="btn" id="changeProfilebtn">
                                    Change Profile Picture
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9" id="outer-form-container">
                        <div class="form-sub-heading">
                            <h3 class="form-heading">Account Details</h3>
                        </div>
                        <div class="inner-form-container">
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <label for="Email" class="form-label">Email address</label>
                                    <input name="email" type="email" class="form-control" id="InputEmail">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <label for="Username" class="form-label">Username</label>
                                    <input name="username" type="username" class="form-control" id="InputUsername">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <label for="InputPassword" class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control" id="Password">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <label for="InputNewPassword" class="form-label">New Password</label>
                                    <input name="Newpassword" type="password" class="form-control" id="NewPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <input type="hidden" name="image" value="{{ asset('icons/default_profile.png') }}">
                                <div class="mb-3" id="create-acc-container">
                                    <button type="submit" class="btn" id="create-acc-btn">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @else
    @endauth
    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/showtoast.js') }}"></script>
</body>

</html>