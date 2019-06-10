<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Linhchan\Imgur\Facades\Imgur;

class ImgurController extends Controller
{
    public function index()
    {
        //test Imgur Facade
        $uploadFile = 'https://www.w3schools.com/w3css/img_lights.jpg';
        $image = Imgur::upload($uploadFile);

        // Get imgur image link.
       $image->link(); //"https://i.imgur.com/XN9m1nW.jpg"

        // Get imgur image file type.
        $image->type(); //"image/jpeg"

        // Get imgur image width.
        $image->width(); //480

        // Get imgur image height.
        $image->height(); //640

        // Or you can get usual data.
        return $image->usual();

        //[
        //  'link' => "https://i.imgur.com/XN9m1nW.jpg",
        //  'filesize' => 43180,
        //  'type' => "image/jpeg",
        //  'width' => 480,
        //  'height' => 640,
        //]
    }
}
