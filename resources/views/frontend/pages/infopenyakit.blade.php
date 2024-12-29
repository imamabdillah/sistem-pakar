@extends('frontend.index')

@section('content')
    <section id="hero" class="hero section">
        <div class="container">
            <div class="card shadow-lg">
                <div class="card-header text-white text-center" style="background-color: #213555;">
                    <h4 class="text-white fw-bold m-0">Informasi Penyakit</h4>
                </div>
                <div class="card-body">
                    <div class="container-fluid row">
                        <div class="col-sm-6 mb-3">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="landingpage/img/abses2.jpeg"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold" style="color: #000;">Abses Periapikal</h5>
                                            <p class="card-text text-justify" style="color: #000;">
                                                Abses periapikal merupakan suatu infeksi tulang aveloar kronis peradikular yang
                                                berjalan lama dan bertingkat rendah, dan sumber infeksi terdapat pada saluran
                                                akar.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="landingpage/img/abses.jpeg"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold" style="color: #000;">Abses Gingiva</h5>
                                            <p class="card-text text-justify" style="color: #000;">
                                                Abses gingiva adalah keadaan inflamasi akut, terlokalisir yang dapat berasal
                                                dari berbagai sumber, diantaranya infeksi bakteri plak, trauma, dan infeksi benda
                                                asin.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    .hero {
        padding: 50px 0;
    }

    .card {
        border: none;
    }

    .card-header {
        background-color: #3E5879;
        color: white;
    }

    .card-body {
        background-color: #fff;
        padding: 20px;
    }

    .card-title {
        color: #000;
    }

    .card-text {
        color: #000;
    }

    .card img {
        border-radius: 10px;
    }

    .container-fluid.row {
        margin-top: 20px;
    }

    .col-sm-6 {
        padding: 10px;
    }
</style>
