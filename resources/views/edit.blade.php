@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edycja zamówienia') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('orders.update', ['id' => $order->id]) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="phone_number">Numer telefonu:</label>
                                <input type="text" name="phone_number" id="phone_number" required value="{{ old('phone_number', $order->phone_number) }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="special_box">Specjalne opakowanie:</label>
                                <input type="checkbox" name="special_box" id="special_box" {{ $order->special_box ? 'checked' : '' }} class="form-check-input">
                            </div>

                            <div class="form-group">
                                <label for="longer_guarantee">Dłuższa gwarancja:</label>
                                <input type="checkbox" name="longer_guarantee" id="longer_guarantee" {{ $order->longer_guarantee ? 'checked' : '' }} class="form-check-input">
                            </div>

                            <div class="form-group">
                                <label for="delivery_date">Data odbioru:</label>
                                <input type="date" name="delivery_date" id="delivery_date" required value="{{ old('delivery_date', $order->delivery_date) }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="additional_information">Dodatkowe informacje:</label>
                                <textarea name="additional_information" id="additional_information" class="form-control">{{ old('additional_information', $order->additional_information) }}</textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
