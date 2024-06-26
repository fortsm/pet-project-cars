<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Главная
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul>
                        <li>
                            <a href="/users">Сотрудники</a>
                        </li>
                        <li>
                            <a href="/cars">Автомобили</a>
                        </li>
                        <li>
                            <a href="/categories">Категории автомобилей</a>
                        </li>
                        <li>
                            <a href="/drivers">Водители</a>
                        </li>
                        <li>
                            <a href="/trips">Поездки</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
