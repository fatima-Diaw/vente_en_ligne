@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Vente
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($vente, ['route' => ['ventes.update', $vente->id], 'method' => 'patch']) !!}

                        @include('ventes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection