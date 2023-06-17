<section>
    <?php if($visible): ?>
    <div
        class="fixed right-0 top-5 flex mx-2 z-50 overflow-hidden transition-all duration-300 ease-in-out bg-white rounded-lg shadow-md dark:bg-gray-900">
        <div class="flex items-center justify-center w-12 <?= $builder->bgColor() ?>">
            <?= $builder->icon() ?>
        </div>

        <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
                <span class="font-semibold <?= $builder->textColor() ?>">
                    <?=
                    $builder->header() ?>
                </span>
                <p class="text-sm text-gray-600 dark:text-gray-200">
                    <?= $builder->message() ?>
                </p>
            </div>
        </div>
        <button wire:click='close' type="button"
            class="flex justify-center items-center mr-1.5 cursor-pointer <?= $builder->textColor() ?> text-lg">
            <svg class="w-6 h-6 <?= $builder->textColor() ?> fill-current" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 10.5858L9.17157 7.75736L7.75736 9.17157L10.5858 12L7.75736 14.8284L9.17157 16.2426L12 13.4142L14.8284 16.2426L16.2426 14.8284L13.4142 12L16.2426 9.17157L14.8284 7.75736L12 10.5858Z">
                </path>
            </svg>
        </button>
    </div>
    <?php endif; ?>
</section>
