<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-32 text-left inline-flex">
            
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
                
            <x-down-arrow class="absolute pointer-events-none" style="right: 12px;" />
    
        </button>
    </x-slot>
    
    <x-dropdown-item href="/" :active="request()->routeIs('home')">
        All
    </x-dropdown-item>

    @foreach($categories as $category)
        <x-dropdown-item 
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category')) }}"
            :active="isset($currentCategory) && $currentCategory->is($category)"> {{--:active="request()->is('categories/' . $category->slug)"--}}
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>