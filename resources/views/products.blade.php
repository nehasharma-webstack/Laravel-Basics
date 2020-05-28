@extends('layout')
@section('title')
Products
@endsection
@section('content')

<div class="content">
                <div class="title m-b-md">
                   All Products page
                </div>

   {{--
               <!--   htmlspecialchars &</> -->
              {{ $name }}  with brand {{$brand}}<br>
               Product price: {{ $price }}  <br>

            @if($price<25000)
            <p>Product is cheap</p>

            @elseif($price>25000 && $price<50000)
            <p>Product is normal</p>

            @else
            <p>Product is costly</p>
            @endif

            @unless($brand == 'Dell')
               <p>Product is of new brand collaborated with Dell</p>
            @endunless

            @for ($i=0;$i<5;$i++)

            <p>Thi is Product {{$i}}</p>
            @endfor

            
   @for($i=0; $i < count($products); $i++)
     {{ $products[$i]['name'] }} -- {{  $products[$i]['price'] }} <br>
   @endfor

   --}}

   @foreach($products as $p)
   {{ $p['name'] }}  -- {{ $p['brand'] }}  -- {{ $p['price'] }} <br>
   @endforeach


  </div>
            VAT is {{ $tax }}

@endsection