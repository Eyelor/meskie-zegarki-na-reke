<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderRecord;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DateTime;

class OrdersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Pobierz zalogowanego użytkownika
        $user = auth()->user();

        // Pobierz zamówienia zalogowanego użytkownika
        $orders = Order::where('user_id', $user->id)->get();

        foreach ($orders as $order) {
            // Pobierz rekordy zamówienia
            $orderRecords = OrderRecord::where('order_id', $order->id)->get();

            foreach ($orderRecords as $orderRecord) {
                // Pobierz produkt
                $product = Product::where('id', $orderRecord->product_id)->first();

                // Przypisz produkt do rekordu zamówienia
                $orderRecord->product = $product;
            }

            // Przypisz rekordy zamówienia do zamówienia
            $order->orderRecords = $orderRecords;
        }

        // Przekaż dane do widoku
        return view('zamowienia', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Pobierz zalogowanego użytkownika
        $user = auth()->user();

        // Pobierz zamówienie do edycji
        $order = Order::where('user_id', $user->id)
                    ->where('id', $id)
                    ->with('orderRecords.product') // Dodaj relację do ładowania produktów z orderRecords
                    ->first();

        // Przyjmując, że $order->delivery_date to "2024-02-11 00:00:00"
        $rawDate = $order->delivery_date;

        // Tworzymy obiekt DateTime
        $dateTime = new DateTime($rawDate);

        // Formatujemy datę do oczekiwanego formatu
        $formattedDate = $dateTime->format('Y-m-d');

        // Teraz $formattedDate zawiera "2024-02-11"
        $order->delivery_date = $formattedDate;
        
        // Przekieruj do widoku edycji z danymi zamówienia
        return view('edit', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Waliduj dane z formularza
        $request->validate([
            'phone_number' => 'required|regex:/^\d{3}-\d{3}-\d{3}$/',
            'special_box' => 'nullable|string',
            'longer_guarantee' => 'nullable|string',
            'delivery_date' => 'required|date',
            'additional_information' => 'nullable|string|max:255',
        ]);

        // Pobierz zalogowanego użytkownika
        $user = Auth::user();

        // Pobierz zamówienie do aktualizacji
        $order = Order::findOrFail($id);

        // Sprawdź, czy zalogowany użytkownik jest właścicielem zamówienia
        if ($order->user_id != $user->id) {
            return redirect()->route('/')->with('error', 'Nie masz uprawnień do edycji tego zamówienia.');
        }

        // Aktualizuj dane zamówienia
        $order->update([
            'phone_number' => $request->input('phone_number'),
            'special_box' => $request->has('special_box'),
            'longer_guarantee' => $request->has('longer_guarantee'),
            'delivery_date' => $request->input('delivery_date'),
            'additional_information' => null !== $request->input('additional_information') ? $request->input('additional_information') : "",
        ]);

        //dd($request->all(), $order->toArray());

        // Przekieruj po udanej aktualizacji
        return redirect()->route('orders')->with('success', 'Zamówienie zostało zaktualizowane.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Znajdź zamówienie do usunięcia
        $order = Order::findOrFail($id);

        // Usuń rekordy zamówienia (opcjonalne)
        $order->orderRecords()->delete();

        // Usuń zamówienie
        $order->delete();

        return redirect()->route('orders')->with('success', 'Zamówienie zostało usunięte.');
    }
}
