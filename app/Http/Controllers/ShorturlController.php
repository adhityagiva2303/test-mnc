<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shorturl;

class ShorturlController extends Controller
{

    public function show($shorturl){
        $shortenUrl = $shorturl;

        $dataShorturl = Shorturl::where('shorten_url', $shortenUrl)->first();

        if ($dataShorturl != NULL) {
            $arrayData = $dataShorturl->toArray();
            header('Location: http://'.$arrayData['url']);
            exit;
        } else {
            $response = [
                'status' => 404,
                'message' => "Url not found !"
            ];
    
            return response()->json($response);
        }
    }

    public function store(Request $request){
        $url = $request->url;

        #Generate random alfanumerik for making shortener url
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $shortenerUrlGenerator = substr(str_shuffle($permitted_chars), 0, 5);

        $shortUrl = "bit.ly/".$shortenerUrlGenerator;

        $shorturl = new Shorturl;
        $shorturl->url = $url;
        $shorturl->shorten_url = $shortUrl;
        $shorturl->save();

        $response = [
            'status' => 201,
            'shortenUrl' => $shortUrl,
            'message' => "Shorturl Created"
        ];

        return response()->json($response);
        
    }
    
    public function update(Request $request, $id){
        $url = $request->url;

        $shorturl = Shorturl::find($id);

        if ($shorturl === NULL) {
            $response = [
                'status' => 404,
                'message' => "Shorturl not found !"
            ];
        } else {
            $shorturl->url = $url;
            $shorturl->save();

            $response = [
                'status' => 202,
                'message' => "Shorturl updated !"
            ];
        }

        return response()->json($response);
    }

    public function destroy($id)
    {
        $shorturl = Shorturl::find($id);

        if ($shorturl === NULL) {
            $response = [
                'status' => 404,
                'message' => "Shorturl not found !"
            ];
        } else {
            $shorturl->url = $url;
            $shorturl->delete();

            $response = [
                'status' => 200,
                'message' => "Shorturl deleted"
            ];
        }

        return response()->json($response);
    }
}
