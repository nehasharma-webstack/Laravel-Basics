@extends('layout')
@section('title')
Products
@endsection
@section('content')

<div class="content">
                <div class="title m-b-md">
                   All Products page
                </div>

               <!--   htmlspecialchars &</> -->
               {{ $name }}  with brand {{$brand}}<br>
               Product price: {{ $price }}
            </div>
           
            VAT is {{ $tax }}
@endsection