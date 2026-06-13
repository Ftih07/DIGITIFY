<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MarsVisionController extends Controller
{
    public function index()
    {
        return view('mars-vision'); // Sesuaikan dengan nama file blade kamu
    }

    public function predict(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:5120',
        ]);

        $imagePath = $request->file('image')->getPathname();
        $imageName = $request->file('image')->getClientOriginalName();

        // Tembak ke API Hugging Face yang barusan kamu bikin
        $response = Http::timeout(60)
            ->attach('file', file_get_contents($imagePath), $imageName)
            ->post('https://ftih-mars-vision-api.hf.space/predict');

        if ($response->successful()) {
            return response()->json($response->json());
        }

        return response()->json(['error' => 'Gagal menghubungi server Mars Vision'], 500);
    }
}
