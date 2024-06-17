<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Поездка
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mb-4">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <table style="width:100%">
                        <tr>
                            <td>ID</td>
                            <td>{{ $trip->id }}</td>
                        </tr>
                        <tr>
                            <td>Сотрудник</td>
                            <td>{{ $trip->user->name }}</td>
                        </tr>
                        <tr>
                            <td>Автомобиль</td>
                            <td>{{ $trip->car->name }}</td>
                        </tr>
                        <tr>
                            <td>Начало поездки</td>
                            <td>{{ date('d.m.Y', strtotime($trip->from)) }}</td>
                        </tr>
                        <tr>
                            <td>Окончание поездки</td>
                            <td>{{ date('d.m.Y', strtotime($trip->till)) }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
