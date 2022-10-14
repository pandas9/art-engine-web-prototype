<div style="text-align: center">

    <button wire:click="increment">+</button>

    <h1>{{ $count }}</h1>

    <div x-data="{ open: false }">

                    <button @click="open = true">Show More...</button>

            

                    <ul x-show="open" @click.outside="open = false">

                        <li><button wire:click="archive">Archive</button></li>

                        <li><button wire:click="delete">Delete</button></li>

                    </ul>

    </div>

    <h1 class="text-white" x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
    
</div>
