@extends('layout.main')
@section('content')
<h3>Add Product</h3>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    {!! Form::open(['route' => 'checkout.store', 'method' => 'POST', 'files' => true]) !!}

    <div class ="form-group">
      {{ Form::label('id_invoice', 'Nomor Invoice') }}
      {{ Form::text('id_invoice',null,array('class' => 'form-control'))}}
    </div>

      <div class ="form-group">
        {{ Form::label('nama', 'Nama') }}
        {{ Form::text('nama',null,array('class' => 'form-control'))}}
      </div>

      <div class ="form-group">
        {{ Form::label('nama_bank', 'Nama Bank') }}
        {{ Form::text('nama_bank',null,array('class' => 'form-control'))}}
      </div>

      <div class="form-group">
             {{ Form::label('no_bank', 'No Rekening') }}
             {{ Form::text('no_bank', null, array('class' => 'form-control')) }}
         </div>

      <div class="form-group">
             {{ Form::label('Jumlah_Transfer', 'Jumlah Transfer') }}
                {{ Form::text('Jumlah_Transfer', null, array('class' => 'form-control')) }}
         </div>
      <div class ="form-group">
        {{ Form::label('image', 'Bukti Transfer') }}
        {{ Form::file('image',array('class' => 'form-control'))}}
      </div>

      <div class="form-group">
             {{ Form::label('bayar', 'Konfirmasi?') }}
              {{ Form::text('bayar', null, array('class' => 'form-control')) }}
         </div>
     {{ Form::submit('Create', array('class' => 'btn btn->default')) }}
    {!! Form::close() !!}
  </div>
</div>
@endsection
