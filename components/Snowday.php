<?php namespace Albrightlabs\SnowDay\Components;

use AlbrightLabs\SnowDay\Models\Settings;
use Cms\Classes\ComponentBase;

class SnowDay extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Snow Day Banner',
            'description' => 'Displays a cross-site banner message.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page->addCss('/plugins/albrightlabs/snowday/assets/css/styles.css','core');
    }

    public function message()
    {
        if($settings = Settings::get('show_showday')){
            return Settings::get('snowday_message');
        }
    }

    public function enabled()
    {
        if($settings = Settings::get('show_showday')){

            if(Settings::get('show_before_after', false)){

                $start_date   = date('Y-m-d', strtotime(Settings::get('date_start')));
                $end_date     = date('Y-m-d', strtotime(Settings::get('date_end')));
                $current_date = date('Y-m-d');

                trace_log($start_date);
                trace_log($end_date);
                trace_log($current_date);

                if(($current_date >= $start_date || $start_date == '1970-01-01') && ($current_date <= $end_date || $end_date == '1970-01-01')){
                    return true;
                }
                else {
                    return false;
                }

            }

            return true;
        }

        return false;
    }
}
