<?php

namespace App\Models\Concerns;

trait HasLocalizedFields
{
    /**
     * Return the value of $field, or its `{field}_en` counterpart when the
     * current app locale is English and a translation is available.
     */
    public function localized(string $field): ?string
    {
        if (app()->getLocale() === 'en') {
            $translated = $this->{"{$field}_en"} ?? null;

            if (filled($translated)) {
                return $translated;
            }
        }

        return $this->{$field};
    }
}
