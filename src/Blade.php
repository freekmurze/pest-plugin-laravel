<?php

declare(strict_types=1);

namespace Pest\Laravel;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Testing\TestView;

/**
 * Define additional headers to be sent with the request.
 *
 * @param  string  $template
 * @param  Arrayable|array  $data
 * @return TestView
 */
function blade(string $template, array $data = [])
{
    return test()->blade(...func_get_args());
}
