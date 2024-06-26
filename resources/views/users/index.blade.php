<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Сотрудники
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <table class="w-full">
                    <tr>
                        <th class="text-left py-3 px-4 font-semibold">ID</th>
                        <th class="text-left py-3 px-4 font-semibold">Имя</th>
                        <th class="text-left py-3 px-4 font-semibold">Email</th>
                        <th class="text-left py-3 px-4 font-semibold">Уровень</th>
                        <th class="text-left py-3 px-4 font-semibold">Категории автомобилей</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td><a href="/users/{{ $user->id }}">{{ $user->name }}</a></td>
                            <td><a href="/users/{{ $user->id }}">{{ $user->email }}</a></td>
                            <td><a href="/users/{{ $user->id }}">{{ $user->level }}</a></td>
                            <td>
                                @foreach ($user->categories as $category)
                                    <a href="/categories/{{ $category->id }}">{{ $category->name }}</a> &nbsp;
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
