<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\Currency;
use App\models\GeneralSetting;
use App\Utils\BusinessUtil;
use App\Utils\ModuleUtil;
use App\Utils\RestaurantUtil;
use Carbon\Carbon;
use DateTimeZone;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
/*
    |--------------------------------------------------------------------------
    | BusinessController
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new business/business as well as their
    | validation and creation.
    |
    */

    /**
     * All Utils instance.
     *
     */
    protected $businessUtil;
    protected $restaurantUtil;
    protected $moduleUtil;
    protected $mailDrivers;

    /**
     * Constructor
     *
     * @param ProductUtils $product
     * @return void
     */
    public function __construct(BusinessUtil $businessUtil, RestaurantUtil $restaurantUtil, ModuleUtil $moduleUtil)
    {
        $this->businessUtil = $businessUtil;
        $this->moduleUtil = $moduleUtil;
        
        $this->theme_colors = [
            'blue' => 'Blue',
            'black' => 'Black',
            'purple' => 'Purple',
            'green' => 'Green',
            'red' => 'Red',
            'yellow' => 'Yellow',
            'blue-light' => 'Blue Light',
            'black-light' => 'Black Light',
            'purple-light' => 'Purple Light',
            'green-light' => 'Green Light',
            'red-light' => 'Red Light',
        ];

        $this->mailDrivers = [
                'smtp' => 'SMTP',
                // 'sendmail' => 'Sendmail',
                // 'mailgun' => 'Mailgun',
                // 'mandrill' => 'Mandrill',
                // 'ses' => 'SES',
                // 'sparkpost' => 'Sparkpost'
            ];
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         //$date='now';
        //$current = Carbon::createFromTimestamp(strtotime('now'))->format('d-m-Y');
        //$current = Carbon::createFromFormat('Y-m-d H:i:s', now())->format('dd-mm-yyyy');
        //dd($current);
        $currencies = $this->businessUtil->allCurrencies();
        
        $timezone_list = $this->businessUtil->allTimeZones();
        //$general_setting_id = request()->session()->get('user.business_id');
        $general_settings = GeneralSetting::where('id', 1)->first();
        $months = [];
        for ($i=1; $i<=12; $i++) {
            $months[$i] = __('settings.months.' . $i);
        }
        $date_formats =  GeneralSetting::date_formats();

        return view('setting\general_setting.index', compact(
            'general_settings',
            'currencies',
            'timezone_list',
            'months',
            'date_formats'
           
        ));
    }
}
