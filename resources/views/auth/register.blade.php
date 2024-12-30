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
                                        <a href="index.html"><img src="{{ asset('image/logo-jurnal.png') }}" width="60" height="60" alt=""></a>
                                        </div>
                                        <h3 class="fw-bold text-center mb-1">Sign Up</h3>
                                        <p class="text-center mb-4">Sign up into your account to start using wantrich</a></p>
                                        <form action="{{ route('register') }}" method="POST">
                                            <!-- Tambahkan token CSRF untuk keamanan -->
                                            @csrf

                                            <!-- Input Username -->
                                            <div class="my-1">
                                                <label for="username" class="text-muted mb-0">
                                                    <p class="fs-6">Username</p>
                                                </label>
                                                <input type="text" id="username" name="username" class="form-control" placeholder="Example : Wantrich" required>
                                            </div>

                                            <!-- Input Email -->
                                            <div class="my-1">
                                                <label for="email" class="text-muted mb-0">
                                                    <p class="fs-6">Email</p>
                                                </label>
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Example@gmail.com" required>
                                            </div>

                                            <!-- Input Password -->
                                            <div class="my-2">
                                                <label for="password" class="text-muted mb-0">
                                                    <p class="fs-6">Password</p>
                                                </label>
                                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" minlength="8" required>
                                            </div>

                                            <!-- Submit Button -->
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
