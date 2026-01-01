<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Download;
use App\Models\Archive;

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
    public function index(Request $request)
    {
       $timeFilter = $request->get('time', 'all'); // daily, weekly, monthly, all

        $archivesQuery = Archive::with('downloads');

        // Apply time filter if needed (requires tracking timestamps per download)
        if ($timeFilter !== 'all') {
            $archivesQuery->with(['downloads' => function($q) use ($timeFilter) {
                if ($timeFilter === 'daily') {
                    $q->whereDate('created_at', now());
                } elseif ($timeFilter === 'weekly') {
                    $q->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()]);
                } elseif ($timeFilter === 'monthly') {
                    $q->whereMonth('created_at', now()->month)
                      ->whereYear('created_at', now()->year);
                }
            }]);
        }

        $archives = $archivesQuery->get();

        // Total downloads
        $totalDownloads = $archives->sum(function($archive) {
            return $archive->downloads->sum('number_of_counts');
        });

        $timeFilter = $request->get('time', 'all'); // daily, weekly, monthly, all

        $archivesQuery = Archive::with('downloads');

        // Apply time filter if needed (requires tracking timestamps per download)
        if ($timeFilter !== 'all') {
            $archivesQuery->with(['downloads' => function($q) use ($timeFilter) {
                if ($timeFilter === 'daily') {
                    $q->whereDate('created_at', now());
                } elseif ($timeFilter === 'weekly') {
                    $q->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()]);
                } elseif ($timeFilter === 'monthly') {
                    $q->whereMonth('created_at', now()->month)
                      ->whereYear('created_at', now()->year);
                }
            }]);
        }

        $archives = $archivesQuery->get();

        $totalDownloads = 0;
        foreach ($archives as $archive) {
            $totalDownloads += $archive->downloads->sum('number_of_counts');
        }


        return view('home', compact('archives', 'totalDownloads', 'timeFilter'));

    }
}
