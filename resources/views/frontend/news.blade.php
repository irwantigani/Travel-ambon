@extends('frontend.layout')

@section('content')
<!-- slider_area_end -->

<!-- destination -->
<div class="popular_places_area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section_title text-center mb_70">
          <h3>berita</h3>
        </div>
      </div>
    </div>
    <div class="row">
    @foreach($beritas as $berita)
      <!-- Destination Item Start -->
      <div class="col-lg-4 col-md-6">
        <div class="single_place">
        <div class="thumb">
        <img src="{{ asset('storage/' . $berita->gambar) }}" class="card-img-top" alt="{{ $berita->judul }}">
          </div>
          <div class="place_info">
          <h2><a href="">{{ $berita->judul }}</h2></a>
          <p class="card-text">{{ Str::limit($berita->konten, 150) }}</p>
          <div class="rating_days d-flex justify-content-between">
              <div class="days">
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <!-- Destination Item End -->
      <!-- Repeat the above block for other destinations as needed -->
    </div>
  </div>
</div>


@endsection
