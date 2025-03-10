@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panel użytkownika') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Jesteś zalogowany!') }}
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">{{ __('Podsumowanie zamówień') }}</div>

                <div class="card-body">
                    @if(count($orders) > 0)
                        @foreach($orders as $order)
                            <div class="order">
                                <h2>Zamówienie #{{ $order->id }}</h2>
                                <p>Numer telefonu: {{ $order->phone_number }}</p>
                                <p>Data odbioru: {{ $order->delivery_date }}</p>
                                <p>Cena zamówienia: {{ number_format($order->order_price, 2) }} zł</p>

                                <h3>Rekordy zamówienia</h3>
                                @if(count($order->orderRecords) > 0)
                                    <ul>
                                        @foreach($order->orderRecords as $orderRecord)
                                            <li>
                                                Produkt: {{ $orderRecord->product->product_name }},
                                                Ilość: {{ $orderRecord->product_count }},
                                                Cena jednostkowa: {{ number_format($orderRecord->order_record_price, 2) }} zł
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>Brak rekordów zamówienia.</p>
                                @endif
                            </div>
                            <hr>
                        @endforeach
                    @else
                        <p>Brak zamówień.</p>
                    @endif
                    <br>
                    <a href="{{ route('orders') }}" class="btn btn-primary">
                        {{ __('Przejdź do edycji zamówień ->') }}
                    </a>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection
