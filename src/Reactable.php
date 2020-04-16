<?php

namespace Armincms\Reactable;
 
trait Reactable  
{
    public function like(bool $liked = true)
    { 
        return $this->react(compact('liked')); 
    }

    public function react($data)
    { 
        if($user = request()->user()) {
            $attributes = [
                'actreactor_id' => $user->id,
                'actreactor_type' => $user->getMorphClass(),
            ];
        }

        return $this->reactions()->whereHas('reactor', function($reactor) {
            return $reactor
                        ->where('reactor_type', )
                        ->where('reactor_id', );
        });
    }

    public function dislike()
    {
        return $this->like(false);
    }

    public function reactions()
    {
        return $this->morphMany(Reaction::class, 'reactable');
    }
}
