<div x-data="{ visible: @entangle('visible') }" x-show='visible' @click.away='visible = false'
    class="fixed right-0 top-5 flex mx-2 z-50 overflow-hidden transition-all duration-300 ease-in-out bg-white rounded-lg shadow-md dark:bg-gray-900">
    <div class="flex items-center justify-center w-12 bg-{{ $builder->color() }}-500">
        <i class="{{ $builder->icon() }} text-white text-xl"></i>
    </div>

    <div class="px-4 py-2 -mx-3">
        <div class="mx-3">
            <span class="font-semibold text-{{ $builder->color() }}-500 dark:text-{{ $builder->color() }}-400">{{
                $builder->header() }}</span>
            <p class="text-sm text-gray-600 dark:text-gray-200">{{ $builder->message() }}</p>
        </div>
    </div>
    <button type="button" @click='visible = false' class="flex justify-center items-center mr-1.5 cursor-pointer">
        <i class="ri-close-circle-fill text-{{ $builder->color() }}-500 text-lg"></i>
    </button>
</div>
