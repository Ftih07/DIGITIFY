<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;
use Carbon\Carbon;

class TrackVisitor
{
    public function handle(Request $request, Closure $next): Response
    {
        // Abaikan kalau request datang dari bot/crawler (opsional tapi disarankan)
        $userAgent = $request->userAgent();
        if (preg_match('/bot|crawl|slurp|spider|mediapartners/i', $userAgent)) {
            return $next($request);
        }

        // Catat visitor. firstOrCreate akan otomatis mengecek:
        // Kalau IP ini di hari ini sudah ada, lewati. Kalau belum, buat baru.
        Visitor::firstOrCreate([
            'ip_address' => $request->ip(),
            'visit_date' => Carbon::today()->toDateString(),
        ], [
            'user_agent' => $userAgent,
        ]);

        return $next($request);
    }
}
