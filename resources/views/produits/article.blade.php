@extends('layouts.master')

@section('content')

 @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif
 @include('produits.tablearticle')
@endsection

