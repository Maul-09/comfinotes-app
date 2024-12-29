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
                                        <div class="text-center mb-2">
                                        <a href="index.html"><img src="template/image/logo-jurnal.png" width="60" height="60" alt=""></a>
                                        </div>
                                        <h3 class="fw-bold text-center mb-1">Sign Up</h3>
                                        <p class="text-center mb-4">Sign up into your account to start using wantrich</a></p>
                                        <form action="index.html">
                                            <div class="mb-1">
                                                <label class="text-muted mb-0"><p class="fs-6">Username</p></label>
                                                <input type="text" class="form-control" placeholder="Example : Wantrich">
                                            </div>
                                            <div class="mb-1">
                                                <label class="text-muted mb-0"><p class="fs-6">Email</p></label>
                                                <input type="email" class="form-control" placeholder="Example@gmail">
                                            </div>
                                            <div class="mb-5">
                                                <label class="text-muted mb-0"><p class="fs-6">Password</p></label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-info btn-block">Sign Up</button>
                                            </div>
                                        </form>
                                        <div class="text-center new-account mt-3">
                                            <p>Already account? <a class="text-info" href="{{ route('login') }}">Sign In</a></p>
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
