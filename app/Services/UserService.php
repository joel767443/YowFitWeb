<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class UserService
 */
class UserService
{
    /**
     * @param User $instance
     * @return void
     */
    public static function delete(User $instance): void
    {
        $instance->delete();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public static function getPaginatedUsers(Request $request): mixed
    {
        return self::queryUsers($request)->paginate(env('PER_PAGE'));
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public static function getUsers(Request $request): mixed
    {
        return self::queryUsers($request)->get();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    private static function queryUsers(Request $request): mixed
    {
        return User::when($request->input('search'), function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('users.email', 'like', '%' . $search . '%')
                    ->orWhere('users.name', 'like', '%' . $search . '%');
            })->orWhereHas('userType', function ($subQuery) use ($search) {
                $subQuery->where('name', 'like', '%' . $search . '%');
            })->orWhereHas('userStatus', function ($subQuery) use ($search) {
                $subQuery->where('name', 'like', '%' . $search . '%');
            });
        });
    }
}
