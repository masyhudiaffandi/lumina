<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-5 py-3 bg-[#4E9F3D] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-transparent focus:bg-gray-700 hover:text-[#4E9F3D] hover:border-[#4E9F3D] active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
