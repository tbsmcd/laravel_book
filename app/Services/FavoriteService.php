<?php
namespace App\Services;

use App\DataProvider\Eloquent\Favorite;
use Illuminate\Support\Facades\DB;

class FavoriteService
{
    public function switchFavorite(int $bookId, int $userId, string $createdAt) : int
    {
        return DB::transaction(
            function () use ($bookId, $userId, $createdAt) {
                $count = Favorite::where('book_id', $bookId)
                    ->where('user_id', $userId)
                    ->count();
                if ($count == 0) {
                    Favorite::create([
                        'book_id' => $bookId,
                        'user_id' => $userId,
                        'created_at' => $createdAt
                    ]);
                    return 1;
                }
                Favorite::where('book_id', $bookId)
                    ->where('user_id', $userId)
                    ->delete();
                return 0;
            }
        );
    }
}
