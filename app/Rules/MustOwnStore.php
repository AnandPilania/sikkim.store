<?php

namespace App\Rules;

use App\Models\Store;
use Illuminate\Contracts\Validation\Rule;

class MustOwnStore implements Rule
{
    /**
     * @var Store
     */
    private $store;

    /**
     * Create a new rule instance.
     *
     * @param object $store
     */
    public function __construct(object $store)
    {
        $this->store = $store;
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
        return $this->store->email === $value;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('auth.failed');
    }
}
