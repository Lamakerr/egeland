<?php

namespace App\Http\Controllers;

use App\Console\Commands\Log\ClearLogFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DownloadsController extends Controller
{
    public function download() 
    {
        


       $table = DB::table('users')->select( 'phone', 'vk_url')->get();
       Storage::disk('local')->put('file.log', $table);
       $filepath = storage_path('app\file.log');
  
      

       return   response()->Download($filepath);

     


       
       
    }
}
