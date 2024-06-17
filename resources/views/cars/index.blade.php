<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Автомобили
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <table style="width:100%">
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Модель</th>
                            <th>Категория</th>
                            <th>Водитель</th>
                        </tr>
                        @foreach ($cars as $car)
                            <tr>
                                <td>{{ $car->id }}</td>
                                <td>
                                    <a href="/cars/{{ $car->id }}">{{ $car->name }}</a>
                                </td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->category->name }}</td>
                                <td>{{ $car->driver->name }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
