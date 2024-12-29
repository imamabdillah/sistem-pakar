@extends('frontend.index')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center align-items-center">
            <!-- Hero Image -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="hero-image text-center" data-aos="zoom-out" data-aos-delay="300">
                    <img src="landingpage/img/anak2.png" alt="Hero Image" class="img-fluid rounded">
                </div>
            </div>

            <!-- Login Form -->
            <div class="col-lg-6">
                <div class="card shadow-sm p-4" style="border-radius: 10px;" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-3">Login ke Akun Anda</h3>
                        <p class="card-text text-center mb-4">Masukkan kredensial Anda untuk memulai sesi.</p>

                        <!-- Tampilkan Pesan Error Jika Ada -->
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            <!-- Username Field -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" id="username" name="username"
                                       class="form-control @error('username') is-invalid @enderror"
                                       placeholder="Masukkan Username" value="{{ old('username') }}" required>
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Password Field -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       placeholder="Masukkan Password" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Remember Me Checkbox -->
                            <div class="form-check mb-3">
                                <input type="checkbox" id="remember" name="remember" class="form-check-input">
                                <label for="remember" class="form-check-label">
                                    Ingat Saya
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
            <!-- /Login Form -->
        </div>
    </div>
</section>
<!-- /Hero Section -->
@endsection
