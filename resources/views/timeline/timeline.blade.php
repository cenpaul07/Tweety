@extends('layouts.layout')

@section('main-section')

    <div class="col-lg-7 offset-lg-3">
        <div class="row">
            <div class="col-lg-8">

                @include('timeline._create_post_form')

                @include('timeline._view_posts')

            </div>

            @include('timeline._friends')

        </div>
    </div>



{{--    @include('timeline._chat')--}}

@endsection

