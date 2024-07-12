<?php

namespace Enzosharp\UserStats\Services;

interface UserStatsService
{
    public function getUserListStats();

    public function set($user_id);

    public function getUserStatsById($id);

    public function getUserStatsByDate($startDate, $endDate);

    public function getUserStatsByDateRange($startDate, $endDate);

    public function getUserStatsByMonth($startDate, $endDate);

    public function getUserStatsByMonthRange($startDate, $endDate);

    public function getUserStatsByYear($startDate, $endDate);

    public function getUserStatsByYearRange($startDate, $endDate);
}