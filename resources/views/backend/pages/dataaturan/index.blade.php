@extends('backend.index')
@section('content-wrapper')
    <div class="row">
        <div class="col-xl col-lg">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary">
                    <h6 class="m-0 font-weight-bold text-white">Kelola {{ $titlePage }}</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    @if (session()->has('success'))
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </symbol>
                            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                            </symbol>
                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </symbol>
                        </svg>
                        <div class="alert alert-success alert-dismissible d-flex align-items-center fade show" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                                <use xlink:href="#check-circle-fill" />
                            </svg>
                            <div>
                                {{ session('success') }}
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <a href="{{ URL::to('/data-aturan/create') }}" class="btn btn-primary mb-3"><i
                            class="fas fa-plus mr-1"></i> Tambah {{ $titlePage }}</a>
                    <table class="table table-bordered" style="width: 100%; border-bottom: 0;">
                        <thead class="bg-primary">
                            <tr>
                                <th class="text-white text-center">No.</th>
                                <th class="text-white text-center">Nama Penyakit</th>
                                <th class="text-white text-center">Nama Gejala</th>
                                <th class="text-white text-center">MB</th>
                                <th class="text-white text-center">MD</th>
                                <th class="text-white text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($dataAturan as $aturan)
                                <tr>
                                    <td class="text-center">{{ $i }}</td>
                                    <td class="text-center">{{ $aturan->nama_penyakit }}</td>
                                    <td class="text-center">{{ $aturan->nama_gejala }}</td>
                                    <td class="text-center">{{ $aturan->nilai_MB }}</td>
                                    <td class="text-center">{{ $aturan->nilai_MD }}</td>
                                    <td class="text-center">
                                        <a href="{{ URL::to('/data-aturan' . '/' . $aturan->id_aturan . '/edit') }}"
                                            class="btn btn-warning"><i class="fas fa-edit mr-1"></i> </a>
                                        <form action="{{ URL::to('/data-aturan') . '/' . $aturan->id_aturan }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit"><i
                                                    class="fas fa-trash-alt mr-1"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
