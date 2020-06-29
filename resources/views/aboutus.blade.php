@extends('layout')
@section('title')
About Us
@endsection
@section('content')

<div class="content">
                <div class="title m-b-md">
                   About Us Page
                   <div> {{ $name }} offer code {{ $code }}</div>
                </div>
                VAT is {{ $tax }}
      
@endsection
