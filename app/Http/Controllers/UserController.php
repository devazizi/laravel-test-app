<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => [
                [
                    'id' => 1,
                    'name' => 'Ali'
                ],
                [
                    'id' => 2,
                    'name' => 'Hassan'
                ],
                [
                    'id' => 3,
                    'name' => 'Mahdi'
                ],
                [
                    'id' => 4,
                    'name' => 'Mohammad'
                ],
            ]
        ]);
    }

    public function get(int $userId)
    {
        return response()->json(
            ['data' => [
                'id' => $userId,
                'name' => 'demo username'
            ]]
        );
    }
}
