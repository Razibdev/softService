<?php

namespace App\Http\Controllers\User\UserDashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use DB;
use Session;
use Validator;
use App\Models\Sms;
use App\Models\SendSms;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\Upazila;
use App\Models\Division;
use App\Models\District;
use App\Models\AdminBalance;
use App\Models\UserRole;
use App\Models\Subscriber;
use App\Models\ServiceProfile;

use App\Models\SubcriberPayment;
use App\Models\UserBalanceEdit;
use App\Models\BalanceTransaction;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ServiceItemRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\Category;
use App\Models\Need;
use App\Models\Note;
use App\Models\Opinion;
use App\Models\PostCategory;
use App\Models\Serviceitem;
use App\Models\ServicePayment;
use App\Models\ServiceProductOrder;
use App\Models\ServiceProfileInfo;
use App\Models\ServiceProfileInfoValue;
use App\Models\ServiceProfileProduct;
use App\Models\ServiceProfileVisitor;
use App\Models\SocialGroup;
use App\Models\Suggestion;
use App\Models\UserUpdateInformation;
use App\Models\WorkStation;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cookie;
use DateTime;

class EmployeeDashboardController extends Controller
{

    public function EmployeeCreateProfileList(){

    menuSubmenu('employee', 'employee');
    $user = Auth::user();
    $profiles =ServiceProfile::where('addedby_id',$user->id)
        ->latest()
        ->paginate(50);
    $total=$profiles->count();

    $start=Carbon::now();
    $end=Carbon::now();
    $paystatus='';
    $date='';

    return view('user.employee.createdserviceprofile', [
        'user' => $user,
        'profiles' => $profiles,
        'start' => $start,
        'end' => $end,
        'total'=>$total,
        'paystatus'=> $paystatus,
        'date'=>$date
    ]);

    }
    public function  EmployeeCreateProfileListFilter(Request $request)
    {

        $type = $request->type;
        $user = Auth::user();
        $date = $request->date;
        if ($type == 'all_create_profile_date') {
            
            menuSubmenu('employee', 'employee');
            $start = $request->date_from;
            $end = $request->date_to;
            $paystatus=$request->paystatus;
           if($request->date_from != null){
                $profiles =ServiceProfile::where('addedby_id',$user->id)
                ->where('paystatus',$request->paystatus)
                ->whereBetween('created_at',[$start,$end])
                ->latest()
                ->paginate(50);

           }else{
            
                if($date == 'today')
                {
                       $profiles = ServiceProfile::where('addedby_id',$user->id)->where('paystatus',$request->paystatus)->whereDate('created_at',Carbon::today()->toDateString())->orderBy('id','desc')->latest()->paginate(50);                
                   
                }
                elseif($date == 'yesterday')
                {
                    $profiles = ServiceProfile::where('addedby_id',$user->id)->where('paystatus',$request->paystatus)->whereDate('created_at',Carbon::yesterday()->toDateString())->orderBy('id','desc')->latest()->paginate(50);
            
                }
                elseif($date == 7)
                {
                    $end = Carbon::now()->toDateString();
                    $start = Carbon::now()->subDays(6)->toDateString();
                    
                    $profiles = ServiceProfile::where('addedby_id',$user->id)->where('paystatus',$request->paystatus)->whereBetween('created_at',[$start,$end])->latest()->paginate(50);
                }
        
                elseif($date == 30)
                {
                    $end = Carbon::now()->toDateString();
                    $start = Carbon::now()->subDays(29)->toDateString();
                    $profiles = ServiceProfile::where('addedby_id',$user->id)->where('paystatus',$request->paystatus)->whereBetween('created_at',[$start,$end])->orderBy('id','desc')->latest()->paginate(50);
                   
                }
                elseif($date == 'this_month')
                {
                   
                    $profiles = ServiceProfile::where('addedby_id',$user->id)->where('paystatus',$request->paystatus)->whereYear('created_at',date('Y'))->whereMonth('created_at', date('m'))->orderBy('id','desc')
                    ->latest()->paginate(50);   
                   
        
        
                }
                elseif($date == 'last_month')
                {
                    $previous =  Carbon::now()->subMonth(); 
                    $lastMonthYear =  $previous->format('Y'); 
                    $lastMonth =  $previous->format('m'); 
                    $profiles = ServiceProfile::where('addedby_id',$user->id)->where('paystatus',$request->paystatus)->whereYear('created_at',$lastMonthYear)->whereMonth('created_at',  $lastMonth)->orderBy('id','desc')->latest()->paginate(50);                
                }else{
                    $profiles = ServiceProfile::where('addedby_id',$user->id)->where('paystatus',$request->paystatus)->orderBy('id','desc')->latest()->paginate(50); 

                }
           }
          
            $total=$profiles->count();

            
           $start=new DateTime($start);
           $end=new DateTime($end);

            return view('user.employee.createdserviceprofile', [
                'user' => $user,
                'profiles' => $profiles,
                'type' => $type,
                'start' => $start,
                'end' => $end,
                'total'=>$total,
                'paystatus'=> $paystatus,
                'date'=>$date
            ]);
        }
       
      

        return back();
    }

    public function categorycommissioncheck()
    {
        menuSubmenu('categories', 'categories');
        $user = Auth::user();
       $categories =Category::orderBy('name', 'asc')->get();
       
       return view('user.employee.categorylist', [
            'user' => $user,
            'categories' => $categories
        ]);
       
    }
    
}
