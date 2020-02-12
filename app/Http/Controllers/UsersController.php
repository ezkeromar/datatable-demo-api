<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\Schema;

class UsersController extends Controller
{
    public function getusers (Request $request) {
        $users = new User;
        if (!empty($request->sortBy) && !empty($request->sortType)) {
            $users = $users->orderBy($request->sortBy, $request->sortType);
        }
        if (!empty($request->search)) {
            $users = $users->where('firstname', 'LIKE', '%'.$request->search.'%');
        }
        $users = $users->paginate($request->maxRows)->toArray();
        $res = [];
        $res['data'] = $users['data'];
        $res['per_page'] = $users['per_page'];
        $res['total'] = $users['total'];
        return response()->json($res);
    }
}
