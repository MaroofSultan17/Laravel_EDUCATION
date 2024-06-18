<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register | EDUCATION</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ url('backend/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/vendors/iconfonts/ionicons/dist/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ url('backend/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ url('backend/vendors/css/vendor.bundle.addons.css') }}">
    <link rel="stylesheet" href="{{ url('backend/css/shared/style.css') }}">
    <link rel="stylesheet" href="{{ url('backend/css/demo_1/style.css') }}">
    <link rel="shortcut icon" href="{{ url('backend/images/favicon.ico') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <h2 class="text-center mb-4">Register</h2>
                        <div class="auto-form-wrapper">
                            <form action="{{ route('register.submit') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Username"name="name"
                                            value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">
                                                {{ $errors->first('name') }}
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
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email"
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
                                    <div class="input-group">
                                        <input type="password" class="form-control" placeholder="Password"
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
                                <div class="form-group d-flex justify-content-center">
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" checked> I agree to the
                                            terms </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn btn-block">Register</button>
                                </div>
                                <div class="text-block text-center my-3">
                                    <span class="text-small font-weight-semibold">Already have and account ?</span>
                                    <a href="{{ route('login.auth') }}" class="text-black text-small">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('backend/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ url('backend/vendors/js/vendor.bundle.addons.js') }}"></script>
    <script src="{{ url('backend/js/shared/off-canvas.js') }}"></script>
    <script src="{{ url('backend/js/shared/misc.js') }}"></script>
</body>

</html>
