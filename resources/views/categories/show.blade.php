<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Категория
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mb-4">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <table style="width:100%">
                        <tr>
                            <td>ID</td>
                            <td>{{ $category->id }}</td>
                        </tr>
                        <tr>
                            <td>Название</td>
                            <td>{{ $category->name }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                Доступные автомобили
                <table class="w-full">
                    <tr>
                        <th class="text-left py-3 px-4 font-semibold">ID</th>
                        <th class="text-left py-3 px-4 font-semibold">Название</th>
                    </tr>
                    @foreach ($category->cars as $car)
                        <tr>
                            <td>{{ $car->id }}</td>
                            <td>
                                <a href="/cars/{{ $car->id }}">
                                    {{ $car->name }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
