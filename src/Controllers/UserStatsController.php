<?php

namespace Enzosharp\UserStats\Controllers;

use Enzosharp\UserStats\Services\UserStatsService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserStatsController extends Controller
{
    public function index(UserStatsService $userStatsService)
    {
        $userStats = $userStatsService->getUserListStats();
        return view('es_userStats::index', compact('userStats'));
    }

    public function store(UserStatsService $userStatsService, Request $request)
    {
        if ($request->has('user_id')) {
            return $userStatsService->set($request->user_id);
        }
    }
}