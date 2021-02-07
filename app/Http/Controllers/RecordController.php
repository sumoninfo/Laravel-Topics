<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Storage;
class RecordController extends Controller
{
    public function record(Request $request)
    {

    	 // $path = $request->file('file')->store('file');
  $file = $request->file; 

  $original_pic = $request->file('file');

    $file_extension=$original_pic->getClientOriginalExtension();
    $filename = time() . '.' . $file_extension;

    # upload original image
     $path =Storage::put('audio/' . $filename, (string) file_get_contents($original_pic), 'public');

// $filename = $file->getClientOriginalName();
// // dd($filename);
     $path =Storage::disk('public')->put('audio/'.$filename, $request->file('file'));


        // $path = Storage::disk('public')->putFile('audio', $request->file('file'));
        return $path;



         $file = $request->file; 
		$filename = $file->getClientOriginalName();
		Storage::disk('public')->put($filename, \File::get($file));
 
 return "success";
    }
}
