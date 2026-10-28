@extends('layouts.master')

@section('title')
    show
@endsection
        
  @section('contenu')

      <h1>Details du produit</h1>
      <hr>
      <h1>{{$produit->product_name}}</h1>
      <p>{{$produit->product_description}}</p>
      <p>{{$produit->product_price}}</p>
      <hr>
      <h5>{{$produit->created_at}}</h5>
      <hr>
      <a href="{{ url('editproduct', $produit->id) }}" class="btn btn-primary">Modifier</a>
      <form action="{{ url('deleteproduct', $produit->id) }}" method="POST" class="pull-right">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Supprimer</button>
      <hr>

@endsection
   