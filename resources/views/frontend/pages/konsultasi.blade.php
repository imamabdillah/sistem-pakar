@extends('frontend.index')

@section('content')
<!-- Konsultasi Section -->
<section id="hero" class="hero section " >
    <div class="container mt-4">
        <div class="row justify-content-center">
            <!-- Formulir Konsultasi -->
            <div class="col-lg-10">
                <div class="card shadow-sm p-4 rounded" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-3">Layanan Konsultasi</h3>
                        <p class="card-text text-center mb-4">Silakan isi data berikut untuk memulai sesi konsultasi Anda.</p>

                        <!-- Pencarian Data Pasien -->
                        <form action="{{ URL::to('/konsultasi/pencarian') }}" method="POST" class="php-email-form mb-4">
                            @csrf
                            <div class="row align-items-center">
                                <div class="col-md-3 text-md-end">
                                    <label for="kode_pasien" class="form-label fw-bold">Kode Pasien</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="kode_pasien" name="kode_pasien"
                                           placeholder="Masukkan Kode Pasien...">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary w-100">Cari</button>
                                </div>
                            </div>
                        </form>

                        <hr class="mb-4">

                        <!-- Formulir Detail Konsultasi -->
                        <form action="{{ URL::to('/konsultasi') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (session()->has('error'))
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                    <div>{{ session('error') }}</div>
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="namapasien" class="form-label fw-bold">Nama Pasien</label>
                                <input type="text" class="form-control @error('namapasien') is-invalid @enderror"
                                       id="namapasien" name="namapasien" value="{{ old('namapasien') }}" autofocus>
                                @error('namapasien')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="alamatpasien" class="form-label fw-bold">Alamat Pasien</label>
                                <textarea class="form-control @error('alamatpasien') is-invalid @enderror"
                                          id="alamatpasien" name="alamatpasien" rows="3">{{ old('alamatpasien') }}</textarea>
                                @error('alamatpasien')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nohppasien" class="form-label fw-bold">No. HP Pasien</label>
                                <input type="number" class="form-control @error('nohppasien') is-invalid @enderror"
                                       id="nohppasien" name="nohppasien" value="{{ old('nohppasien') }}">
                                @error('nohppasien')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Daftar Gejala -->
                            <div class="mb-4">
                                <h6 class="fw-bold">Daftar Gejala</h6>
                                <table class="table table-bordered">
                                    <thead class="bg-primary text-white text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Gejala</th>
                                            <th>Pilih</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach ($daftarGejala as $gejala)
                                            <tr>
                                                <td class="text-center">{{ $i }}</td>
                                                <td class="text-center">{{ 'G' . $i }}</td>
                                                <td>{{ $gejala->nama_gejala }}</td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="checkbox" name="choiceRadio[]"
                                                           value="{{ $gejala->nama_gejala }}">
                                                </td>
                                            </tr>
                                            @php $i++; @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Tombol Aksi -->
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="reset" class="btn btn-secondary" style="rounded: 10px">
                                    <i class="bi bi-arrow-clockwise"></i> Reset
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save"></i> Simpan Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Formulir Konsultasi -->
        </div>
    </div>
</section>
@endsection
