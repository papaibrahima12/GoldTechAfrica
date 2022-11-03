@extends('mydashboard')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Categories de Cours</h1>
  <form id="logout-form" action="{{ route('logout') }}" method="POST">
     @csrf
     <input class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" type="submit" value="Deconnexion"/>
  </form>
</div>
  
     <div class="row">
      @foreach($categories as $category)
      <div class="col-md-4 py-3">
         <div class="card" style="width: 18rem;">
        <img src="{{ $category['lien_img'] }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $category['titre'] }}</h5>
          {{-- <p class="card-text">{{ $category['description'] }}</p> --}}
          <a href="#" class="btn btn-primary">En savoir plus</a>
        </div>
      </div>
     </div>
     @endforeach
    </div>

@endsection