<?php

namespace Sweeeeep\Popularity;

use Sweeeeep\Popularity\Models\Stats;

trait Popularable
{
    public function popularityStats()
    {
        return $this->morphOne(Stats::class, 'trackable');
    }

    public function hit()
    {
        //check if a polymorphic relation can be set
        if ($this->exists) {
            $stats = $this->popularityStats()->first();
            if (empty($stats)) {
                //associates a new Stats instance for this instance
                $stats = new Stats();
                $this->popularityStats()->save($stats);
            }

            return $stats->updateStats();
        }

        return false;
    }
}
