<?php

/*
 * This file is part of Laravel Ownership.
 *
 * (c) Anton Komarev <a.komarev@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$factory->define(\Cog\Ownership\Tests\Stubs\Models\EntityWithDefaultOwner::class, function (\Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'owned_by' => null,
    ];
});
