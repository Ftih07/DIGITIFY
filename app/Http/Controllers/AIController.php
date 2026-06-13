<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AIController extends Controller
{
    public function index()
    {
        return view('ai-showroom');
    }

    public function predict(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:5120', // Max 5MB
        ]);

        $image = $request->file('image');

        try {
            $response = Http::attach(
                'file', file_get_contents($image), $image->getClientOriginalName()
            )->post('https://ftih-digitify-car-vision.hf.space/predict');

            if ($response->successful()) {
                return response()->json($response->json());
            }

            return response()->json(['error' => 'Gagal memproses gambar'], 500);

        } catch (\Exception $e) {
            return response()->json(['error' => 'AI Server (Python) sedang tidak aktif.'], 500);
        }
    }
}
