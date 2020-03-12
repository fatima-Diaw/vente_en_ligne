@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Produits</h1>
        <div class="pull-right">
                <h1 >
                    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('produits.create') }}">Add New</a>
                </h1>   
        </div>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('produits.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

