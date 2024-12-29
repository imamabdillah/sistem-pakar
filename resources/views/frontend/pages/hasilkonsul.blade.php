@extends('frontend.index')

@section('content')
    <section id="hero" class="hero section">
        <div class="container mt-4">
            <div class="card shadow-lg">
                <div class="card-header text-white text-center" style="background-color: #213555">
                </div>
                <div class="card-body">
                    @if (session()->has('success') && session()->has('message') && session()->has('kodepasien'))
                        <div class="alert alert-success alert-dismissible d-flex align-items-center fade show" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                                <use xlink:href="#check-circle-fill" />
                            </svg>
                            <div>
                                {{ session('success') . ' ' . session('message') . ' ' }}<b>{{ session('kodepasien') }}</b>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3 no-print">
                        <button class="btn btn-primary" type="button" onclick="printDiv('laporanprint');">
                            <i class="fas fa-print me-1"></i> Cetak Hasil
                        </button>
                    </div>

                    <div id="laporanprint">
                        <h3 class="text-center fw-bold mb-4">HASIL KONSULTASI</h3>

                        <div class="row mb-4">
                            <div class="col-md-4">
                                <label class="form-label fw-bold">Nama Pasien</label>
                                <input type="text" readonly class="form-control-plaintext" value="{{ $namaPasien }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-bold">Alamat Pasien</label>
                                <textarea readonly class="form-control-plaintext">{{ $alamatPasien }}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-bold">No. HP Pasien</label>
                                <input type="text" readonly class="form-control-plaintext" value="{{ $nohpPasien }}">
                            </div>
                        </div>

                        <div class="card mb-4 border-0 shadow-sm">
                            <div class="card-header text-white fw-bold" style="background-color: #3E5879">Gejala yang Dialami</div>
                            <div class="card-body p-0">
                                <table class="table table-bordered mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="text-center" style="width: 5%;">No</th>
                                            <th>Gejala</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach ($hasilGejala as $gejala)
                                            <tr>
                                                <td class="text-center">{{ $i }}</td>
                                                <td>{{ $gejala }}</td>
                                            </tr>
                                            @php $i++; @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card mb-4 border-0 shadow-sm">
                            <div class="card-header text-white fw-bold" style="background-color: #3E5879">Diagnosis Penyakit</div>
                            <div class="card-body">
                                <p class="fw-bold mb-0">{{ $namaPenyakit }}</p>
                                <p>{{ $persentasePenyakit }}% ({{ $probabilitas }})</p>
                            </div>
                        </div>

                        <div class="card mb-4 border-0 shadow-sm">
                            <div class="card-header text-white fw-bold" style="background-color: #3E5879">Detail Penyakit</div>
                            <div class="card-body">
                                <p>{{ $detailPenyakit }}</p>
                            </div>
                        </div>

                        <div class="card mb-4 border-0 shadow-sm">
                            <div class="card-header text-white fw-bold" style="background-color: #3E5879">Saran Pengobatan</div>
                            <div class="card-body">
                                <p>{{ $saranPenyakit }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        @media print {
            body {
                margin: 0;
                padding: 0;
                font-size: 12pt;
            }

            .no-print {
                display: none;
            }

            .card {
                border: none;
                box-shadow: none;
            }

            .table th,
            .table td {
                border: 1px solid #000 !important;
            }

            .card-header {
                background-color: #3E5879 !important;
                color: white !important;
            }
        }
    </style>

    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            window.location.reload(); // Reload to restore original state
        }
    </script>
@endsection
