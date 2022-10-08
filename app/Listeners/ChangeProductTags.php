<?php

namespace App\Listeners;

use App\Events\ProductTags;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ChangeProductTags
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ProductTags $event)
    {
        $event->product->tags()->detach();
        if(!empty($event->tags)){
            $event->product->tags()->attach($event->tags);
        }
    }
}
