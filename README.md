### Source

> https://laracasts.com/series/livewire-3-from-scratch/episodes/8

### This Git

> https://github.com/samedan/2410_Livewire3

### Modifiers

> wire:model.live.debounce.1000ms="name"

### Search Form

> Articles - Model, Migration, Factory
> DatabaseSeeder.php ->

## database seed

> php artisan db:wipe
> php artisan migrate
> ArticleFactory.php
> php artisan db:seed

### Search Component

> php artisan make:livewire search -> Class & View
> Search.php -> updatedSearchText()
> search.blade.php : input -> wire:model.live.debounce ('live' update, debounce = 'every 1 second')
> search.blade.php : button -> wire:click.prevent (preventdefault)

### Layout File

> Creates /resources/views/components/layouts/app.blade.php
> php artisan livewire:layout

## Individual Article

> php artisan make:livewire show-article

### search Results

> php artisan make:livewire search-results

### Events in Livewire

> app/Livewire/Search.php class: search:clear-results
> app.blade.php add Alpine code <body x-data x-on:click="">
