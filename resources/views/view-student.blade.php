@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    @include('layouts.sections.student-form-id')
                </div>
                <div class="col-lg-6">
                    @include('layouts.sections.students-table')
                </div>
            </div>
        </div>
    </section>
@endsection