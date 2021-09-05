<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Pagination\Paginator;

use Carbon;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if (request()->has('lang')) {
            \App::setLocale(request()->get('lang'));
        }
        Blade::withoutDoubleEncoding();
        Paginator::useBootstrapThree();

        //
        Blade::directive('lowercase',function($data){
            return "<?php
                    
            echo '<i class=\"fa fa-info-circle text-info hover-q no-print \" aria-hidden=\"true\" 
            data-container=\"body\" data-toggle=\"popover\" data-placement=\"auto bottom\" 
            data-content=\"' . $data . '\" data-html=\"true\" data-trigger=\"hover\"></i>';
        }
        ";
        });
    //Blade directive to convert.
    Blade::directive('format_date', function ($date) {
        if (!empty($date)) {
            return "\Carbon::createFromTimestamp(strtotime($date))->format('d-m-Y')";
        } else {
            return null;
        }
    });
                //Blade directive to display help text.
        Blade::directive('show_tooltip', function ($message) {
            return "<?php
                
                    echo '<i class=\"fa fa-info-circle text-info hover-q no-print \" aria-hidden=\"true\" 
                    data-container=\"body\" data-toggle=\"popover\" data-placement=\"auto bottom\" 
                    data-content=\"' . $message . '\" data-html=\"true\" data-trigger=\"hover\"></i>';
                
                ?>";
        });
    }
}
