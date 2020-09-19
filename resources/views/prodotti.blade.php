@extends('layouts.main-layout')

@section('content')

  <div class="typology">
    <h2>LE LUNGHE</h2>
    <div class="cards">
      @foreach ($data as $pasta)

        @if ($pasta['tipo'] == 'lunga')

          <div class="card" data-name="{{$pasta['tipo']}}">
            <img src="{{ asset($pasta['src'])}}" alt="{{ asset($pasta['src'])}}">
          </div>

        @endif
      @endforeach

    </div>
  </div>

  <div class="typology">
    <h2>LE CORTE</h2>
    <div class="cards">
      @foreach ($data as $pasta)

        @if ($pasta['tipo'] == 'corta')

          <div class="card" data-name="{{$pasta['tipo']}}">
            <img src="{{ asset($pasta['src'])}}" alt="{{ asset($pasta['src'])}}">
          </div>

        @endif
      @endforeach

    </div>
  </div>

  <div class="typology">
    <h2>LE CORTISSIME</h2>
    <div class="cards">
      @foreach ($data as $pasta)

        @if ($pasta['tipo'] == 'cortissima')

          <div class="card" data-name="{{$pasta['tipo']}}">
            <img src="{{ asset($pasta['src'])}}" alt="{{ asset($pasta['src'])}}">
          </div>

        @endif
      @endforeach

    </div>
  </div>



@endsection
