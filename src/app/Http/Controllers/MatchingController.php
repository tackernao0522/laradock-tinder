<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reaction;
use App\User;
use Auth;
use App\Constants\Status;

class MatchingController extends Controller
{
    public static function index()
    {
        // 自分(to_user_id)へLIKEしてくれた人のIDを取得
        $got_reaction_ids = Reaction::where([
            ['to_user_id', Auth::id()], // to_user_idが自分になる
            ['status', Status::LIKE],
        ])->pluck('from_user_id');

        // LIKEしてくれた人の中から、自分がLIKEした人だけを抽出
        $matching_ids = Reaction::whereIn('to_user_id', $got_reaction_ids)
            ->where('status', Status::LIKE)
            ->where('from_user_id', Auth::id())
            ->pluck('to_user_id');

        $matching_users = User::whereIn('id', $matching_ids)->get();

        $match_users_count = count($matching_users);

        return view('users.index', compact('matching_users', 'match_users_count'));
    }
}
