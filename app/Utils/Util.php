<?php

namespace App\Utils;

use App\User;
use App\Currency;

use DB;
use GuzzleHttp\Client;
use Spatie\Permission\Models\Role;
use Config;

class Util
{
    public function getDays()
    {
      return [
            'sunday' => __('global_lang.sunday'),
            'monday' => __('global_lang.monday'),
            'tuesday' => __('global_lang.tuesday'),
            'wednesday' => __('global_lang.wednesday'),
            'thursday' => __('global_lang.thursday'),
            'friday' => __('global_lang.friday'),
            'saturday' => __('global_lang.saturday')
        ];
    }
    public function getMonthList()
    {
        $months = array(
            1  => __('global_lang.january'),
            2  => __('global_lang.february'),
            3  => __('global_lang.march'),
            4  => __('global_lang.april'),
            5  => __('global_lang.may'),
            6  => __('global_lang.june'),
            7  => __('global_lang.july'),
            8  => __('global_lang.august'),
            9  => __('global_lang.september'),
            10 => __('global_lang.october'),
            11 => __('global_lang.november'),
            12 => __('global_lang.december'));
        return $months;
    }
       /**
     * Gives a list of all currencies
     *
     * @return array
     */
    public function allCurrencies()
    {
        $currencies = Currency::select('id', DB::raw("concat(country, ' - ',currency, '(', code, ') ') as info"))
                ->orderBy('country')
                ->pluck('info', 'id');

        return $currencies;
    }
     /**
     * Gives a list of all timezone
     *
     * @return array
     */
    public function allTimeZones()
    {
        $datetime = new \DateTimeZone("EDT");

        $timezones = $datetime->listIdentifiers();
        $timezone_list = [];
        foreach ($timezones as $timezone) {
            $timezone_list[$timezone] = $timezone;
        }

        return $timezone_list;
    }
}
