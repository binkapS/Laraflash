<section>
    <?php if($visible): ?>
    <div wire:click='close'
        class="flex fixed z-30 justify-center items-center bg-black bg-opacity-20 top-0 w-full h-screen">
        <div
            class="flex flex-col justify-center items-center w-60 lg:max-w-sm mx-2 overflow-hidden bg-white rounded-lg -mt-10 p-3 shadow">

            <div class="flex justify-center items-center flex-col m-3">
                <span class="font-semibold <?= $builder->textColor() ?> ">
                    <?= $builder->header() ?>
                </span>
                <p class="text-sm text-gray-600 mt-3">
                    <?= $builder->message() ?>
                </p>
            </div>

            <span wire:click='close'
                class="close-button flex capitalize justify-center items-center font-semibold cursor-pointer <?= $builder->bgColor() ?> px-10 py-1.5 rounded-lg text-sm">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 10.5858L9.17157 7.75736L7.75736 9.17157L10.5858 12L7.75736 14.8284L9.17157 16.2426L12 13.4142L14.8284 16.2426L16.2426 14.8284L13.4142 12L16.2426 9.17157L14.8284 7.75736L12 10.5858Z">
                    </path>
                </svg>
            </span>
        </div>
    </div>
    <?php endif; ?>
</section>
