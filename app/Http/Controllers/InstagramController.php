<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InstagramController extends Controller
{
    public function index()
    {
        return view('ig-downloader');
    }

    public function process(Request $request)
    {
        $request->validate(['url' => 'required|url']);
        set_time_limit(0);

        try {
            $response = Http::timeout(300)
                ->withOptions(['stream' => true])
                ->asJson()
                ->post('https://ftih-ig-downloader-docker.hf.space/download', [
                    'url' => $request->url,
                    'format' => $request->format ?? '1',
                ]);

            if ($response->successful()) {
                $isAudio = ($request->format == '2');
                $ext = $isAudio ? 'mp3' : 'mp4';
                $contentType = $response->header('Content-Type') ?? ($isAudio ? 'audio/mpeg' : 'video/mp4');

                // LOGIKA PENAMAAN FILE
                // Ambil path dari URL (contoh: /reel/Cq2x.../)
                $path = parse_url($request->url, PHP_URL_PATH);
                $segments = explode('/', trim($path, '/'));
                // Ambil segment terakhir atau kedua dari akhir sebagai shortcode
                $shortcode = end($segments) ?: 'IG';
                if ($shortcode === 'reel' || $shortcode === 'p') {
                    $shortcode = prev($segments) ?: 'Video';
                }

                // Format: Digitify_MP4_Shortcode_Timestamp.mp4
                $fileName = 'Digitify_'.strtoupper($ext).'_'.$shortcode.'_'.time().'.'.$ext;

                return response()->streamDownload(function () use ($response) {
                    $stream = $response->toPsrResponse()->getBody();
                    while (! $stream->eof()) {
                        echo $stream->read(8192);
                    }
                }, $fileName, [
                    'Content-Type' => $contentType,
                ]);
            }

            return response()->json(['error' => 'API Error HTTP: '.$response->status()], 500);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Backend Error: '.$e->getMessage()], 500);
        }
    }
}
