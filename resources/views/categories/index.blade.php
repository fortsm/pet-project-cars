<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Категории автомобилей
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
                            <th>Список автомобилей</th>
                            <th>Доступно сотрудникам</th>
                        </tr>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>
                                    <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                                </td>
                                <td>
                                    @foreach ($category->cars as $car)
                                        <a href="/cars/{{ $car->id }}">{{ $car->name }}</a> &nbsp;
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($category->users as $user)
                                        <a href="/users/{{ $user->id }}">{{ $user->name }}</a> &nbsp;
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
