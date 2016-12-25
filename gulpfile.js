const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 */

elixir(mix => {
    mix.less('_main/*.less')
       .scripts('core/app.js', 'public/js/core/app.js')
       .webpack('app.js');
});
