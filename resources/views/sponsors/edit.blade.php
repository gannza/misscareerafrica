@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sponsor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sponsor, ['route' => ['sponsors.update', $sponsor->id], 'method' => 'patch']) !!}

                        @include('sponsors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection