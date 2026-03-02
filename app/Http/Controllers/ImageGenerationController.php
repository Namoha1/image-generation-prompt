<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageGenerationRequest;
use Illuminate\Http\Request;
use OpenAI;

class ImageGenerationController extends Controller
{

    public function index() {}

    public function store(ImageGenerationRequest $request)
    {
        dd($request->all());
        $file = $request->file("image");
    }

    public function generateImageByPrompt(string $filePath) {
       $filePath = base_path($filePath);

       $client = OpenAI::client(apiKey: config('opeanai.api_key'), organization: "Namoha", project: config('app.name'));
        //    $client->make
        /*  
            $image = $client->image()->create([
            'file' => fopen($filePath, 'r'),
            'model' => 'dall-e-3',
            'response_format' => 'url',
            'size' => '1024x1024',
        ]);
        */

    }

}
