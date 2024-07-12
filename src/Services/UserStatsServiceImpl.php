<?php

namespace Enzosharp\UserStats\Services;

use App\Models\Entry;

class UserStatsServiceImpl implements UserStatsService
{

    public function getUserListStats()
    {
        return Entry::orderBy('id', 'DESC')->paginate(10);
    }

    public function set($user_id)
    {
        return Entry::insert(
            [
                'user_id' => $user_id,
                'last_login' => now()
            ]
        );
    }

    public function getUserStatsById($id)
    {
        // TODO: Implement getUserStatsById() method.
    }

    public function getUserStatsByDate($startDate, $endDate)
    {
        // TODO: Implement getUserStatsByDate() method.
    }

    public function getUserStatsByDateRange($startDate, $endDate)
    {
        // TODO: Implement getUserStatsByDateRange() method.
    }

    public function getUserStatsByMonth($startDate, $endDate)
    {
        // TODO: Implement getUserStatsByMonth() method.
    }

    public function getUserStatsByMonthRange($startDate, $endDate)
    {
        // TODO: Implement getUserStatsByMonthRange() method.
    }

    public function getUserStatsByYear($startDate, $endDate)
    {
        // TODO: Implement getUserStatsByYear() method.
    }

    public function getUserStatsByYearRange($startDate, $endDate)
    {
        // TODO: Implement getUserStatsByYearRange() method.
    }
}
