<?php

use function Pest\Laravel\blade;

blade('@if(true) render @endif')->assertSee('render');
blade('@if(false) render @endif')->assertDontSee('render');

