<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response; 
use App\Models\events;
use App\Models\eventImages;

class EventController extends Controller
{
    public function __construct(){}

    public function show()
    {
        $data = events::all();
        return view('show', compact('data')); 
    }

    public function edit(events $event)
    {
        return view('show-single', compact('event')); 
    }

    public function update(events $event, Request $request)
    {
        //echo "<pre>";print_r($request->all());die;
        $event->name = !empty($request->name)?$request->name:$event->name;
        $event->update();

        if($request->hasfile('first_img')){
            $file = $request->file('first_img');
            $img_1 = time().'_1.'.$file->extension();
            $file->move(public_path().'/images/', $img_1);

            $update = eventImages::where('id', $request->first_img_id)->update(['image' => $img_1]);
        }

        if($request->hasfile('second_img')){
            $file = $request->file('second_img');
            $img_2 = time().'_2.'.$file->extension();
            $file->move(public_path().'/images/', $img_2);

            $update = eventImages::where('id', $request->second_img_id)->update(['image' => $img_2]);

        }

        return  response()->json([
            'message' => "Event Updated Successfully .. !!",
            'success' => true
        ], Response::HTTP_OK);
    }
}
