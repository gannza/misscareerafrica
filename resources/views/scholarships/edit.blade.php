@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Scholarship
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($scholarship, ['route' => ['scholarships.update', $scholarship->id], 'method' => 'patch']) !!}

                        @include('scholarships.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection