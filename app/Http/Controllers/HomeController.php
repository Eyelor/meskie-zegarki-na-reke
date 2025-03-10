<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderRecord;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
        return view('home', ['orders' => $orders]);
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
