<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DateValidate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $start_date = strtotime($value); 
        $end_date = strtotime(date('Y-m-d')); 
        //$diff = ($end_date - $start_date)/(365*60*60*24); 
        //return $diff >= 18;
        return $start_date<$end_date;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Sorry! your age must be greater than 18';
    }
}
