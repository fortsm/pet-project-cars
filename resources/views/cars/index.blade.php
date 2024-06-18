<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Автомобили
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <table class="w-full">
                    <tr>
                        <th class="text-left py-3 px-4 font-semibold">ID</th>
                        <th class="text-left py-3 px-4 font-semibold">Название</th>
                        <th class="text-left py-3 px-4 font-semibold">Модель</th>
                        <th class="text-left py-3 px-4 font-semibold">Категория</th>
                        <th class="text-left py-3 px-4 font-semibold">Водитель</th>
                    </tr>
                    @foreach ($cars as $car)
                        <tr>
                            <td>{{ $car->id }}</td>
                            <td>
                                <a href="/cars/{{ $car->id }}">{{ $car->name }}</a>
                            </td>
                            <td>{{ $car->model }}</td>
                            <td>
                                <a href="/categories/{{ $car->category->id }}">{{ $car->category->name }}</a>
                            </td>
                            <td>
                                <a href="/drivers/{{ $car->driver->id }}">{{ $car->driver->name }}</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
