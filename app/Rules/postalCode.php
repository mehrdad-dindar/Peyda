<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class postalCode implements Rule
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
        if (!preg_match('/^[0-9]{10}$/', $value))
            return false;
        for ($i = 0; $i < 10; $i++) {
            if (preg_match('/^' . $i . '{10}$/', $value))
                return false;
        }
        return true;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'کد پستی صحیح نیست.';
    }
}
