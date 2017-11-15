<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 15/11/17
 * Time: 14:59
 */

namespace Quimgc;

use Faker\Factory;


/**
 * Class Hello
 * @package Quimgc
 */
class Hello
{
    public function hello()
    {
        $faker = Factory::create();
        echo 'Hola ' . $faker->name;
    }
}