@props(['active'])

@php
$classes = ($active ?? false)
                ? 'inline-flex items-center px-1 pt-1 border-b-5 border-teal-300 dark:border-teal-300 text-sm font-medium leading-5 text-red-400 dark:text-red-400 focus:outline-none focus:border-teal-300 transition duration-150 ease-in-out'
                : 'inline-flex items-center px-1 pt-1 border-b-5 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-500 hover:text-teal-300 dark:hover:text-teal-300 hover:border-teal-300 dark:hover:border-teal-300 focus:outline-none focus:text-teal-300 dark:focus:text-teal-300 focus:border-teal-300 dark:focus:border-teal-300 transition duration-150 ease-in-out';
            // ? 'inline-flex items-center px-1 pt-1 border-b-5 border-teal-300 dark:border-teal-300 text-sm font-medium leading-5 text-gray-400 dark:text-gray-400 focus:outline-none focus:border-teal-300 transition duration-150 ease-in-out'
            // : 'inline-flex items-center px-1 pt-1 border-b-5 border-transparent text-sm font-medium leading-5 text-gray-400 dark:text-gray-400 hover:text-teal-300 dark:hover:text-teal-300 hover:border-teal-300 dark:hover:border-teal-300 focus:outline-none focus:text-teal-300 dark:focus:text-teal-300 focus:border-teal-300 dark:focus:border-teal-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} style="text-decoration:none;">
    {{ $slot }}
</a>
