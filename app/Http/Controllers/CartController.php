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

class CartController extends Controller
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
        return view('koszyk');
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
        // $request->validate([
        //     'produkt' => [
        //         'required',
        //         'string',
        //         Rule::exists('products', 'product_name'), // Validate if 'produkt' exists in 'products' table
        //     ],
        //     'ilosc' => 'required|integer|min:1',
        //     'imieNazwisko' => 'required|string|regex:/^(?:[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]*[- ]?){2,}$/',
        //     'email' => 'required|email|regex:/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/',
        //     'numerTelefonu' => 'required|regex:/^\d{3}-\d{3}-\d{3}$/',
        //     'opcjeDodatkowe' => 'array',
        //     'dataOdbioru' => 'required|date',
        //     'informacjeDodatkowe' => 'nullable|string',
        //     'karta' => 'required|in:visa,master card',
        //     'numerKarty' => 'required|regex:/^\d{4} \d{4} \d{4} \d{4}$/',
        //     'dataWaznosci' => 'required|date_format:Y-m',
        //     'cvv' => 'required|regex:/^[0-9]{3}$/',
        // ]);

        // Sprawdź, czy użytkownik jest zalogowany
        if (Auth::check()) {
            $user = Auth::user();

            // Pobierz dane zamówienia z local storage
            $orderData = json_decode($request->getContent(), true);
            
            // Sprawdź, czy istnieje klucz 'lista' w żądaniu
            if (!isset($orderData[0]['lista'])) {
                return response()->json(['error' => 'Missing key "lista" in request'], 400);
            }

            // Definiuj reguły walidacyjne
            $validationRules = [
                'imieNazwisko' => 'required|string|regex:/^(?:[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]*[- ]?){2,}$/',
                'email' => 'required|email|regex:/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/',
                'numerTelefonu' => 'required|regex:/^\d{3}-\d{3}-\d{3}$/',
                'dataOdbioru' => 'required|date',
            ];

            if (!empty($orderData[0]['informacjeDodatkowe'])) {
                $validationRules['informacjeDodatkowe'] = 'nullable|string';
            }

            // Dodaj reguły dla opcji dodatkowych, jeśli istnieją
            if (!empty($orderData[0]['opcjeDodatkowe'][0]['opcja1'])) {
                $validationRules['opcjeDodatkowe.opcja1'] = 'nullable|string';
            }

            if (!empty($orderData[0]['opcjeDodatkowe'][0]['opcja2'])) {
                $validationRules['opcjeDodatkowe.opcja2'] = 'nullable|string';
            }

            // Dodaj pozostałe reguły
            $validationRules += [
                'karta' => 'required|in:visa,master card',
                'numerKarty' => 'required|regex:/^\d{4} \d{4} \d{4} \d{4}$/',
                'dataWaznosci' => 'required|date_format:Y-m',
                'cvv' => 'required|regex:/^[0-9]{3}$/',
            ];

            // Waliduj dane
            $validator = Validator::make($orderData[0], $validationRules);

            // Sprawdź, czy walidacja zakończyła się sukcesem
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }

            // Oblicz wartość zamówienia (np. sumując ceny produktów)
            $orderPrice = 0;
            foreach ($orderData[0]['lista'] as $item) {
                $orderPrice += $item['cena'] * $item['ilosc'];
            }

            // Utwórz zamówienie
            $order = new Order([
                'user_id' => $user->id,
                'phone_number' => $orderData[0]['numerTelefonu'],
                'special_box' => isset($orderData[0]['opcjeDodatkowe'][0]['opcja1']),
                'longer_guarantee' => isset($orderData[0]['opcjeDodatkowe'][0]['opcja2']),
                'delivery_date' => $orderData[0]['dataOdbioru'],
                'additional_information' => isset($orderData[0]['informacjeDodatkowe']) ? $orderData[0]['informacjeDodatkowe'] : "",
                'order_price' => $orderPrice,
            ]);

            $order->save();

            // Dodaj rekordy zamówienia
            foreach ($orderData[0]['lista'] as $item) {
                $product = Product::getProductByName($item['produkt']);

                if ($product) {
                    $orderRecord = new OrderRecord([
                        'order_id' => $order->id,
                        'product_id' => $product->id,
                        'product_count' => $item['ilosc'],
                        'order_record_price' => $item['cena'],
                    ]);

                    $orderRecord->save();
                }
            }

            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'User not logged in'], 401);
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
