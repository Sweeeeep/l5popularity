<?php

namespace Sweeeeep\Popularity;

use Sweeeeep\Popularity\Models\Stats;

class Popularity
{
    public static function getStats($days = 'one_day_stats', $orderType = 'DESC', $modelType = '', $limit = null)
    {
        $stats = new Stats();
        $query = $stats->newQuery();

        if (! empty($modelType)) {
            $query->where('trackable_type', '=', $modelType);
        }
        // Only retrieve elements with at least 1 hit in the requested period
        if (! empty($days)) {
            $query->where($days, '!=', 0);
        }
        if (! empty($limit)) {
            $query->take($limit);
        }
        $query->orderBy($days, $orderType);

        return $query;
    }
}
