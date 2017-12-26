@extends('layout.main')

@section('content')


    <div class="row">
      <h3>Cart Items</h3>
      <table class="table table-hover">
        <thead>
            <tr>
              <th>Name</th>
              <th>Price</th>
              <th>Jumlah</th>
              <th>Ukuran</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($cartItems as $cartItem)
            <tr>
              <td>{{$cartItem->name}}</td>
              <td>{{$cartItem->price}}</td>
              <td width="7%">
                {!! Form::open(['route' => ['cart.update', $cartItem->rowId], 'method' => 'PUT']) !!}
                    <input name="qty" type="text" value="{{$cartItem->qty}}">

              </td>
              <td>
                  <div>
                    {!! Form::select('size', [ 'small' => 'Small', 'medium' => 'Medium','large'=>'Large'], $cartItem->options->has('size')?$cartItem->options->size:'') !!}
                  </div>
                </td>

              <td>

                <input style="float: left" type="submit" class="button small success" value="ok">
                {!! Form::close() !!}
                <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                           {{csrf_field()}}
                           {{method_field('DELETE')}}
                           <input class="button small alert" type="submit" value="Delete">
                         </form>
                </form>
              </td>
            </tr>
            @endforeach
            <tr>
                <td></td>
                <td>
                  Harga: Rp.{{Cart::subtotal()}}<br>
                  Tax: Rp.{{Cart::tax()}} <br>
                  Total Harga: Rp.{{Cart::total()}}</td>
                <td>Items: {{Cart::count()}}</td>
                <td></td>
            </tr>
          </tbody>
        </table>

        <a href="{{url('/checkout')}}" class="button">Checkout</a>
    </div>



@endsection
