@extends('layouts.master')

@section('title')
    Hello Title
@endsection

@section('content')
 {!!  '<h2> This is simple content test for Master Layouts </h2> ' !!}

 {{--@for($i=1; $i<=10; $i++)--}}
     {{--{{$email}}--}}
     {{--{!! '<br/>' !!}--}}
 {{--@endfor--}}

@endsection