<navbar class="flex flex-1 justify-center gap-4 ">
    @foreach($menus as $menu)
    <a class="w-1/12 max-lg:w-1/6 max-2xl:w-1/6 max-sm:w-4/12 text-center p-2 {{ Route::is("home") ? "bg-true-blue-1000": "bg-true-blue-800" }} rounded-lg hover:bg-true-blue-400 cursor-pointer"
       href="{{ route($menu->to) }}">
        {{ $menu->name }}
    </a>
    @endforeach
</navbar>
