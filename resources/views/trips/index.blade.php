<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Поездки
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <table style="width:100%">
                        <tr>
                            <th>ID</th>
                            <th>Сотрудник</th>
                            <th>Автомобиль</th>
                            <th>Начало поездки</th>
                            <th>Окончание поездки</th>
                        </tr>
                        @foreach ($trips as $trip)
                            <tr>
                                <td>{{ $trip->id }}</td>
                                <td>
                                    <a href="/users/{{ $trip->user->id }}">{{ $trip->user->name }}</a>
                                </td>
                                <td>
                                    <a href="/cars/{{ $trip->car->id }}">
                                        {{ $trip->car->name }} ({{ $trip->car->model }})
                                    </a>
                                </td>
                                <td>
                                    <a href="/trips/{{ $trip->id }}">
                                        {{ date('d.m.Y', strtotime($trip->from)) }}
                                    </a>
                                </td>
                                <td>
                                    <a href="/trips/{{ $trip->id }}">
                                        {{ date('d.m.Y', strtotime($trip->till)) }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
