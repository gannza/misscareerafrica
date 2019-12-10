@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Candiate Voter
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($candiateVoter, ['route' => ['candiateVoters.update', $candiateVoter->id], 'method' => 'patch']) !!}

                        @include('candiate_voters.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection