<?php
namespace Hieubv\Timezones;
 
use App\Http\Controllers\Controller;
// use laibray
use Carbon\Carbon;
 
class TimezonesController extends Controller
{
 
    public function getTimeZones($timezone)
    {
        	$current_time =  Carbon::now($timezone)->toDateTimeString();
    	return view('timezones::time', ['current_time'=>$current_time]);
    }
 
}


?>