<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class BrowsershotController extends Controller
{


     public function screenshotGoogle(){
        return view('test-screenshot');
    }

    
    public function screenshotGoogle() {
    Browsershot::url('https://google.com')
            ->setOption('landscape', true)
            ->windowSize(3840, 2160)
            ->waitUntilNetworkIdle()
            ->save("storage/" . 'googlescreenshot.jpg');
}


}
    ?>
