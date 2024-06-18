<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Автомобиль
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mb-4">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <table style="width:100%">
                        <tr>
                            <td>ID</td>
                            <td>{{ $car->id }}</td>
                        </tr>
                        <tr>
                            <td>Название</td>
                            <td>{{ $car->name }}</td>
                        </tr>
                        <tr>
                            <td>Модель</td>
                            <td>{{ $car->model }}</td>
                        </tr>
                        <tr>
                            <td>Категория</td>
                            <td>
                                <a href="/categories/{{ $car->category->id }}">{{ $car->category->name }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Водитель</td>
                            <td>
                                <a href="/drivers/{{ $car->driver->id }}">{{ $car->driver->name }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Доступна сотрудникам</td>
                            <td>
                                @foreach ($car->users() as $user)
                                    <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td>Запланированные поездки</td>
                            <td>
                                @foreach ($car->trips as $trip)
                                    <a href="/trips/{{ $trip->id }}">{{ $trip->from }} - {{ $trip->till }}</a> &nbsp;
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
