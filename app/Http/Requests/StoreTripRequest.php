<?php

namespace App\Http\Requests;

use App\Models\Car;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class StoreTripRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => ['required'],
            'car_id' => ['required'],
            'from' => ['required', 'date_format:Y-m-d'],
            'till' => ['required', 'date_format:Y-m-d'],
        ];
    }

    /**
     * Get the "after" validation callables for the request.
     */
    public function after(): array
    {
        return [
            function (Validator $validator) {
                $user = User::findOrFail($this->input('user_id'));
                $car = Car::findOrFail($this->input('car_id'));
                $from = $this->input('from');
                $till = $this->input('till');

                if (!in_array($user->id, $car->users()->pluck('id')->toArray())) {
                    $validator->errors()->add(
                        'car_id',
                        'Эта машина недоступна этому сотруднику'
                    );
                }

                $car_trips = $car->trips()
                    ->where([['trips.from', '<=', $from], ['trips.till', '>=', $till]])
                    ->orWhere([['trips.from', '<=', $from], ['trips.till', '>=', $from]])
                    ->orWhere([['trips.from', '<=', $till], ['trips.till', '>=', $till]])
                    ->orWhere([['trips.from', '>=', $from], ['trips.till', '<=', $till]])
                    ->count();

                if ($car_trips) {
                    $validator->errors()->add(
                        'from',
                        'Эта машина уже забронирована на эти даты'
                    );
                }
            }
        ];
    }
}
