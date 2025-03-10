@extends('layouts.app')

@section('headAssets')
<style>
    #przyciskUsun {
        display: inline-block;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edycja zamówień') }}</div>

                <div class="card-body">
                    @if(count($orders) > 0)
                        @foreach($orders as $order)
                            <div class="order">
                                <h2>Zamówienie #{{ $order->id }}</h2>
                                <p>Numer telefonu: {{ $order->phone_number }}</p>
                                <p>Specjalne opakowanie: {{ $order->special_box ? "Tak" : "Nie" }}</p>
                                <p>Dłuższa gwarancja: {{ $order->longer_guarantee ? "Tak" : "Nie" }}</p>
                                <p>Data odbioru: {{ $order->delivery_date }}</p>
                                <p>Dodatkowe informacje: {{ $order->additional_information }}</p>
                                <p>Cena zamówienia: {{ number_format($order->order_price, 2) }} zł</p>
                                <p>Złożono zamówienie: {{ $order->created_at }}</p>
                                <p>Ostatnia aktualizacja: {{ $order->updated_at }}</p>

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
                            <!-- Przycisk edycji zamówienia -->
                            <a class="btn btn-primary" href="{{ route('orders.edit', ['id' => $order->id]) }}">Edytuj</a>
                            <!-- Przycisk usuwania zamówienia -->
                            <form action="{{ route('orders.destroy', ['id' => $order->id]) }}" method="POST" id="przyciskUsun">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć to zamówienie?')">Usuń</button>
                            </form>
                            <hr>
                        @endforeach
                    @else
                        <p>Brak zamówień.</p>
                    @endif
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection
