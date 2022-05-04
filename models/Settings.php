<?php namespace AlbrightLabs\SnowDay\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'albrightlabs_snowday_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
