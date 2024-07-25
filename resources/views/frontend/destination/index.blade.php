

@extends('frontend.layout')

@section('content')

<body>
  <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Destinations</h3>
                        <p>keindahan destinasi wisata</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="popular_places_area">
        <div class="container">
            <div class="row">
                @foreach($kategoriWisata as $kategori)
                <div class="col-lg-4 col-md-4">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{ asset('storage/' . $kategori->gambar) }}" alt="Gambar Kategori" style="max-width: 100px;">
                        </div>
                        <h3><td>{{ $kategori->nama }}</td></h3>
                        <td>{{ $kategori->deskripsi }}</td>
                        <div class="place_info">
                            <a href="{{ route('frontend.destination.detail', ['id' => $kategori->id]) }}">baca selengkapnya
                                <h3>{{ $kategori->name }}</h3>
                            </a>
                            <p>{{ $kategori->description }}</p>
                            <div class="rating_days d-flex justify-content-between">
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">4N3D</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
