@extends('layout.main')

@section('content')
<section class="hero text-center">
       <br/>
       <br/>
       <br/>
       <br/>
       <h2>
           <strong>
               Selamat Datang di Gorengan Online
           </strong>
       </h2>
       <br>
       <a href="{{url('/shirts')}}">
           <button class="button large">Cari Gorengan?</button>
       </a>
   </section>
   <br/>
   <div class="subheader text-center">
       <h2>
           Gorengan Terpopuler
       </h2>
   </div>

<!-- Latest SHirts -->
<div class="row">
  @forelse($shirts->chunk(4) as $chunk)
    @foreach($chunk as $shirt)
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a href="{{route('cart.addItem', $shirt->id)}}"class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="{{url('images',$shirt->image)}}"/>
                </a>
            </div>
            <a href="{{route('detail')}}">
                <h3>
                    {{$shirt->name}}
                </h3>
            </a>
            <h5>
              ${{$shirt->price}}

            </h5>
            <p>
                {{$shirt->description}}
            </p>
        </div>
    </div>
    @endforeach
  @empty
    <h3>no shirt</h3>
  @endforelse
</div>
<!-- Footer -->
<br>

  @endsection
