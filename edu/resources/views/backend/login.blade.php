<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | EDUCATION</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ url('backend/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/vendors/iconfonts/ionicons/dist/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ url('backend/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ url('backend/vendors/css/vendor.bundle.addons.css') }}">
    <link rel="stylesheet" href="{{ url('backend/css/shared/style.css') }}">
    <link rel="shortcut icon" href="{{ url('backend/images/favicon.ico') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auto-form-wrapper">
                            @if (session()->has('success') || session()->has('error'))
                                @if (session()->has('success'))
                                    <div class="alert alert-block p-4 border-left-warning text-center"
                                        style="background-color:#2196f3; opacity:1">
                                        <strong>
                                            <h5 style="color: #ffffff">{{ session('success') }}</h5>
                                        </strong>
                                    </div>
                                @elseif (session()->has('error'))
                                    <div class="alert alert-block p-4 border-left-warning text-center"
                                        style="background-color:red; opacity:1">
                                        <strong>
                                            <h5 style="color: #ffffff">{{ session('error') }}</h5>
                                        </strong>
                                    </div>
                                @endif
                            @endif
                            <form action="{{ route('login.auth') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="label">Username</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Email" name="email"
                                            value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" placeholder="*********"
                                            name="password" value="{{ old('password') }}">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">
                                                {{ $errors->first('password') }}
                                            </span>
                                        @endif
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                                </div>
                                <div class="form-group d-flex justify-content-between">
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" checked> Keep me signed in
                                        </label>
                                    </div>
                                    <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-block g-login">
                                        <img class="mr-3"
                                            src="https://demo.bootstrapdash.com/star-admin-free/jquery/assets/images/file-icons/icon-google.svg"
                                            alt="">Log in with Google</button>
                                </div>
                                <div class="text-block text-center my-3">
                                    <span class="text-small font-weight-semibold">Not a member ?</span>
                                    <a href="{{ route('register.show') }}" class="text-black text-small">Create new
                                        account</a>
                                </div>
                            </form>
                        </div>
                        <ul class="auth-footer">
                            <li style="color: black">
                                <a href="#" style="color: black">Conditions</a>
                            </li>
                            <li>
                                <a href="#" style="color: black">Help</a>
                            </li>
                            <li>
                                <a href="#" style="color: black">Terms</a>
                            </li>
                        </ul>
                        <p class="footer-text text-center" style="color: black">copyright © 2020 Bootstrapdash. All
                            rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('backend/vendors/js/vendor.bundle.base.j') }}s"></script>
    <script src="{{ url('backend/vendors/js/vendor.bundle.addons.js') }}"></script>
    <script src="{{ url('backend/js/shared/off-canvas.js') }}"></script>
    <script src="{{ url('backend/js/shared/misc.js') }}"></script>
</body>

</html>
