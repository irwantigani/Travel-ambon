@extends('frontend.layout')

@section('content')
<!-- slider_area_end -->

<!-- destination -->
<div class="popular_places_area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section_title text-center mb_70">
          <h3>Galery destination</h3>
        </div>
      </div>
    </div>
    <div class="row">
    @foreach($files as $file)
      <!-- Destination Item Start -->
      <div class="col-lg-4 col-md-6">
        <div class="single_place">
        <div class="thumb">
        <a href="{{ Storage::url($file->path) }}" target="_blank">
            <img src="{{ Storage::url($file->path) }}" alt="{{ $file->title }}" class="img-thumbnail">
        </a>
          </div>
          <div class="place_info">
          <h5 class="card-title">{{ $file->title }}</h5>
          <p class="card-title three-lines">{{ $file->deskripsi }}</p>

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
