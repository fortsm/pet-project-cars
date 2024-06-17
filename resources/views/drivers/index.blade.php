<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Водители
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <table style="width:100%">
                        <tr>
                            <th>ID</th>
                            <th>Имя</th>
                            <th>Автомобиль</th>
                        </tr>
                        @foreach ($drivers as $driver)
                            <tr>
                                <td>{{ $driver->id }}</td>
                                <td>
                                    <a href="/drivers/{{ $driver->id }}">{{ $driver->name }}</a>
                                </td>
                                <td>
                                    <a href="/cars/{{ $driver->car->id }}">{{ $driver->car->name }}</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
