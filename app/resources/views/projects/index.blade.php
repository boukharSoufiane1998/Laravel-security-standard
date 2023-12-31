@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Projects</h1>
            </div>
            @role('admin|user')
            <div class="col-sm-6">
                <a class="btn btn-primary float-right" href="{{ route('projects.create') }}">
                    Add New
                </a>
            </div>
            @endrole

        </div>
    </div>
</section>

<div class="content px-3">

    @include('flash::message')

    <div class="clearfix"></div>

    <div class="card">
        @include('projects.table')
    </div>
</div>

@endsection