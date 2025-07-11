<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Game;
use Illuminate\Http\Request;


class GameController extends Controller
{
    public function createGame($id)
    {
        $player = User::find($id);

        $dice1 = rand(1, 6);
        $dice2 = rand(1, 6);
        $is_win = ($dice1 + $dice2) === 7;

        $game = $player->games()->create([
            'dice1' => $dice1,
            'dice2' => $dice2,
            'is_win' => $is_win,
        ]);

        return response()->json($game);
    }

        public function destroy($id)
        {
            $player = User::find($id);
            $player->games()->delete();

            return response()->json(['message' => 'Tiradas eliminadas']);
    }
}
