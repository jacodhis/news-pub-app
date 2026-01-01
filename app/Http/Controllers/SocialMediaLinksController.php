<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialLink;

class SocialMediaLinksController extends Controller
{
     public function index()
    {
        $data = [
            'status' =>false,
            'data' => null,
        ];
        try {

           $data['data'] = SocialLink::get()->map(function($handle){
                return $handle->getSocialLinkData();
            });
            $data['status'] = true;
        } catch (\Throwable $th) {
            info($th->getMessage());
        }

        return response()->json($data);
    }

     public function store(Request $request){
        $socials = $request->input('social', []);
        foreach ($socials as $platform => $url) {
            SocialLink::updateOrCreate(
                ['platform' => $platform],
                ['url' => $url]
            );
        }

        return redirect()->back()->with('success', 'Social links updated successfully.');
    }

}
