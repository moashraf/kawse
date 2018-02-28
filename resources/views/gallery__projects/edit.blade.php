@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Gallery  Project
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($galleryProject, ['route' => ['galleryProjects.update', $galleryProject->id], 'method' => 'patch']) !!}

                        @include('gallery__projects.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection