<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Livewire se espera que utilices layouts para que tus componentes sean
    | mostrados en una plantilla. Aquí puedes definir el layout predeterminado
    | que se utilizará para todos los componentes de Livewire.
    |
    */

    'layout' => 'layouts.app',  // Aquí especificamos el layout predeterminado

    /*
    |--------------------------------------------------------------------------
    | Compilador de Vistas
    |--------------------------------------------------------------------------
    |
    | Esta opción te permite controlar el compilador de vistas predeterminado
    | utilizado por Livewire para generar las vistas de los componentes.
    |
    */

    'view_path' => resource_path('views/livewire'),

    /*
    |--------------------------------------------------------------------------
    | Autoload de Directivas
    |--------------------------------------------------------------------------
    |
    | Aquí puedes agregar directivas adicionales que desees que Livewire autoload
    | en todos los componentes. Por ejemplo, si necesitas directivas personalizadas
    |
    */

    'livewire_directives' => [
        // Puedes agregar directivas personalizadas si las necesitas
    ],
];
