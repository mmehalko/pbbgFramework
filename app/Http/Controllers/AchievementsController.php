<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

class AchievementsController extends Controller
{
    public function index(Request $request)
    {
        $user = User::find(1);
        $achievements = $user->achievements;
        
        return view ('achievements.index', compact('achievements'));
    }
}