<?php

namespace App\Http\Middleware;
use Closure;
use App\Post;
use Illuminate\Session\Store;


class ViewPostHandler
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    private $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function handle(Post $post)
    {
        if (!$this->isPostViewed($post))
        {
            $post->increment('view');
            $this->storePost($post);
        }
    }

    private function isPostViewed($post)
    {
        $viewed = $this->session->get('viewed_posts', []);

        return array_key_exists($post->id, $viewed);
    }

    private function storePost($post)
    {
        $key = 'viewed_posts.' . $post->id;

        $this->session->put($key, time());
    }
}
