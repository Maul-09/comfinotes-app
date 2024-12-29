<x-auth-layout>
<div class="vh-100 bg-light">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="template/image/logo-jurnal.png" width="60" height="60" alt=""></a>
									</div>
                                    <h3 class="fw-bold text-center mb-1">Sign In</h3>
                                    <p class="text-center mb-4">Sign in into your account to start using wantrich</a></p>
                                    <form action="index.html">
                                        <div class="mb-2">
                                            <label class="text-muted"><p class="fs-6 mb-0">Username/ No grup</p></label>
                                            <input type="text" class="form-control" placeholder="Example : Wantrich">
                                        </div>
                                        <div class="mb-5">
                                            <label class="text-muted"><p class="fs-6 mb-0">Password</p></label>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                            <div class="mb-5">
                                               <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
													<label class="form-check-label" for="basic_checkbox_1">Remember Me</label>
                                                    <a href="{{ url('/forget') }}" class="ps-6">Forgot Password?</a>
												</div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info btn-block">Sign In</button>
                                        </div>
                                    </form>
                                    <div class="text-center new-account mt-3">
                                        <p>Don't have an account? <a class="text-info" href="{{ route('register') }}">Sign up</a></p>
                                    </div>
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
