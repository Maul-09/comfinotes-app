<x-auth-layout>
<div class="vh-100 bg-light">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form-login">
									<div class="text-center mb-3">
										<a href="index.html"><img src="{{ asset('image/logo-jurnal.png') }}" width="60" height="60" alt=""></a>
									</div>
                                    <h3 class="fw-bold text-center my-1">Sign In</h3>
                                    <p class="text-center my-3">Sign in into your account to start using wantrich</a></p>
                                    <form action="{{ route('login.submit') }}" method="POST">
                                        @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul class="text-sm-center">
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            @if(session('logout'))
                                                <div class="alert alert-success text-sm-center">
                                                    {{ session('logout') }}
                                                </div>
                                            @endif
                                        @csrf
                                        <div class="my-3">
                                            <label for="credit" class="text-muted"><p class="fs-6 mb-0">Group Code/username</p></label>
                                            <input type="text" name="identifikasi" class="form-control" id="identifikasi" placeholder="masukan group_code/username" required>
                                            {{-- @if(session('logout'))
                                                <div class="alert alert-success text-sm-center">
                                                    {{ session('logout') }}
                                                </div>
                                            @endif --}}
                                        </div>
                                        <div class="my-3">
                                            <label for="password" class="text-muted"><p class="fs-6 mb-0">Password</p></label>
                                            <input type="password" name="password" class="form-control" placeholder="Masukan Password" required>
                                            {{-- @if(session('logout'))
                                                <div class="alert alert-success text-sm-center">
                                                    {{ session('logout') }}
                                                </div>
                                            @endif --}}
                                        </div>

                                        <div class="my-4">
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" name="remember" class="form-check-input" id="basic_checkbox_1">
                                                <label class="form-check-label" for="basic_checkbox_1">Remember Me</label>
                                                <a href="#" class="form-check-label float-end">Forgot Password?</a>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info btn-block">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-auth-layout>
</body>
