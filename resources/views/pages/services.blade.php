@extends('layouts.master')

@section('title')
    Services
@endsection
        
  @section('contenu')

      <h1>Bienvenue sur la page des services</h1>
      @if (Session::has('statuts'))
          <div class="alert alert-success">
              {{session('statuts')}}
          </div>
          
      @endif
         @foreach($produits as $produit)
         <div class="well">
            <h3><a href="{{ route('pages.show', $produit->id) }}">{{$produit->product_name}}</a></h3>
            {{-- <p>{{$produit->product_description}}</p>
            <p>{{$produit->product_price}}</p> --}}
            </div>
         @endforeach
        {{$produits->links()}}
@endsection
   