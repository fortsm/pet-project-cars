<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Добавить поездку
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 py-12">
        <form method="POST" action="{{ route('trips.store') }}">
            @csrf

            <div>
                <x-input-label for="user_id" value="Сотрудник"/>
                <select
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                    name="user_id">
                    <option value="" selected disabled>Выберите сотрудника</option>
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('user_id')" class="mt-2"/>
            </div>

            <div class="mt-4">
                <x-input-label for="car_id" value="Автомобиль"/>
                <select
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                    name="car_id">
                    <option value="" selected disabled>Выберите автомобиль</option>
                    @foreach($cars as $car)
                        <option value="{{$car->id}}">{{$car->name}}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('car_id')" class="mt-2"/>
            </div>

            <div class="mt-4">
                <x-input-label for="from" value="Дата начала поездки"/>
                <x-text-input id="from" class="block mt-1 w-full" type="text" name="from"
                              required value="2024-10-01"/>
                <x-input-error :messages="$errors->get('from')" class="mt-2"/>
            </div>

            <div class="mt-4">
                <x-input-label for="till" value="Дата окончания поездки"/>
                <x-text-input id="till" class="block mt-1 w-full" type="text" name="till"
                              required value="2024-10-10"/>
                <x-input-error :messages="$errors->get('till')" class="mt-2"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    Добавить
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
