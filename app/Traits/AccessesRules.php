<?php
namespace App\Traits;
trait AccessesRules
{
    /**
     * Returns rules array.
     *
     * @return array
     */
    public static function getRules(): array
    {
        return (array) static::$rules;
    }
    /**
     * Return only the fields that we are interested in from the request.
     * This will include empty fields as a null value.
     *
     * @param $request
     * @return array
     */
    public static function filterRequest(\Illuminate\Foundation\Http\FormRequest $request): array
    {
        return (array) \array_filter(
            $request->only(
                \array_keys(static::$rules)
            )
        );
    }
}
