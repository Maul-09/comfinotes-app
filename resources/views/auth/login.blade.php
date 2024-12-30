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
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="my-3">
                                            <label class="text-muted"><p class="fs-6 mb-0">Username/No grup</p></label>
                                            <input type="text" name="username" class="form-control" placeholder="Example: Wantrich" value="{{ old('username') }}" required autofocus>
                                            @error('username')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="my-3">
                                            <label class="text-muted"><p class="fs-6 mb-0">Password</p></label>
                                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                                            @error('password') <!-- Menampilkan pesan error jika ada -->
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
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
