<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        // Получаем фильтры из запроса
        $filters = $request->all();

        // Формируем SQL запрос
        $query = Car::query()
            ->select('cars.name', 'model', 'cars.category_id', 'driver_id')
            ->join('category_user', 'cars.category_id', '=', 'category_user.category_id')
            ->join('users', 'users.id', '=', 'category_user.user_id')
            ->distinct();

        if (isset($filters['from']) && isset($filters['till'])) {
            $query->join('trips', 'trips.car_id', '=', 'cars.id')
                ->whereNot([['trips.from', '<=', $filters['from']], ['trips.till', '>=', $filters['till']]])
                ->whereNot([['trips.from', '<=', $filters['from']], ['trips.till', '>=', $filters['from']]])
                ->whereNot([['trips.from', '<=', $filters['till']], ['trips.till', '>=', $filters['till']]])
                ->whereNot([['trips.from', '>=', $filters['from']], ['trips.till', '<=', $filters['till']]]);
        }

        foreach ($filters as $key => $value) {
            match ($key) {
                'category_id' => $query->where('cars.category_id', $filters['category_id']),
                'model' => $query->where('cars.model', 'ilike', '%' . $filters['model'] . '%'),
                'user_id' => $query->where('users.id', $filters['user_id']),
                default => null,
            };
        }

        $data = $query->get();

        return response()->json($data, 200);
    }
}
