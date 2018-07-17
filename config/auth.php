<?php

return [
	'multi' => [
    'user' => [
        'driver' => 'eloquent',
        'model'  => App\User::class,
        'table'  => 'users'
    ],
    'admin' => [
        'driver' => 'eloquent',
        'model'  => App\Admin::class,
        'table'  => 'admin'
    ]
 ],

];