<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Session\Store;
use Session;

class Filter
{
    private $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $argument = $this->getViewedArgument();

        if (!is_null($argument))
        {
            $argument = $this->cleanExpiredViews($argument);
            $this->storeArgument($argument);
        }
        return $next($request);
    }

    private function getViewedArgument()
    {
        return $this->session->get('viewed_argument', null);
    }

    private function cleanExpiredViews($argument)
    {
        $time = time();

        // Let the views expire after 8'.
        $throttleTime =480;

        return array_filter($argument, function ($timestamp) use ($time, $throttleTime)
        {
            return ($timestamp + $throttleTime) > $time;
        });
    }

    private function storeArgument($argument)
    {
        $this->session->put('viewed_argument', $argument);
    }
}
