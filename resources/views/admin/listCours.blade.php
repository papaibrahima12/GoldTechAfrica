@extends('admin.dashboard_admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Les Cours</h1>
</div>

    <div class="row">
      @foreach ($cours as $coursItem)
        <div class="col-md-6">
           <div class="card flex-md-row mb-4 shadow-sm h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                 <strong class="d-inline-block mb-2 text-primary">{{ $coursItem['categorie'] }}</strong>
                 <h6 class="mb-0">
                    <a class="text-dark" href="#">{{ $coursItem['title'] }}</a>
                 </h6>
                 <div class="mb-1 text-muted small">{{ $coursItem['created_at'] }}</div>
                 <p class="card-text mb-auto">{{ $coursItem['description'] }}</p>
                 <a class="btn btn-outline-primary btn-sm" role="button" href="{{ $coursItem['lien_cours'] }}">Télecharger le cours</a>
              </div>
              <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="{{ $coursItem['lien_img'] }}" style="width: 200px; height: 250px;">
           </div>
        </div>
      @endforeach
     </div>
@endsection