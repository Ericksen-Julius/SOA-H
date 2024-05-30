<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Http\Controllers\Controller;
use App\Models\Airline;
use App\Models\Hotels;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {
        echo "uhuy";
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
        $request['category_id'] = (int)$request['category_id'];
        $request['user_id'] = (int)$request['user_id'];
        $request['product_id'] = (int)$request['product_id'];
        $request['asuransi_id'] = (int)$request['asuransi_id'];

        // return response()->json($request);

        $validatedData = $request->validate([
            'category_id' => 'required|integer|between:21,25',
            'user_id' => 'required|integer',
            'product_id' => 'required|integer',
            'asuransi_id' => 'required|integer',
            'start_time' => 'required|date|after:now',
            'end_time' => 'required|date|after:now',
            'count_product' => 'required|integer|min:1',
        ]);

        $bookings = Bookings::create($validatedData);

        return response()->json($bookings, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Bookings $bookings)
    {
    }

    public function getBooking($id)
    {
        try {
            // Temukan booking berdasarkan ID
            $booking = Bookings::findOrFail($id);

            $category = $booking->category;

            // return $category->category_type;

            if ($category->category_type == "Hotel") {
                $hotel = Hotels::findOrFail($booking->entity_id);

                // return $hotel;

                $room = $hotel->rooms;

                return $room;

                return response()->json([
                    'message' => 'Room found',
                    'hotel' => $hotel,
                    'room' => $room
                ], 200);
            } else {
                // Kembalikan respons JSON jika kategori tidak ditemukan atau bukan instance dari Hotel
                return response()->json([
                    'message' => 'Category not found or not Hotel instance'
                ], 404);
            }
        } catch (ModelNotFoundException $e) {
            // Kembalikan respons JSON jika booking tidak ditemukan
            return response()->json([
                'message' => 'Booking not found'
            ], 404);
        } catch (\Exception $e) {
            // Kembalikan respons JSON jika terjadi kesalahan lainnya
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bookings $bookings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $booking = Bookings::findOrFail($id);

            $booking->update(['is_finished' => true]);

            return response()->json([
                'message' => 'Booking marked as finished',
                'booking' => $booking
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Booking not found'
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bookings $bookings)
    {
        //
    }
}
