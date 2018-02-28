@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cat Project
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'catProjects.store' ,'files' => true,'enctype' => 'multipart/form-data' ]) !!}

                        @include('cat_projects.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
