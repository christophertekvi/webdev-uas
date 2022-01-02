<?php

namespace App\Models;

class Cart
{
    private static $cart_menu = [
        "title" => "Ini Judul",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem doloribus saepe nesciunt sit officiis! Rerum illum quibusdam unde dicta ut placeat molestias nemo consectetur explicabo maiores vel porro asperiores iusto, voluptatem illo deserunt harum. Neque nulla quam pariatur et suscipit quia perspiciatis temporibus delectus consequuntur rerum aliquid ut ea labore minus officia nostrum, voluptate veritatis id explicabo? Neque iste, ipsam quia et porro nisi voluptate non deserunt pariatur nostrum voluptates rem, minus quae cupiditate vero quibusdam dolorum quaerat repellendus velit nulla ut veritatis blanditiis sapiente? Corporis inventore excepturi vitae maxime sapiente iste beatae qui minima. Omnis porro impedit quaerat quibusdam."
    ];

    public static function all()
    {
        return self::$cart_menu;
    }
}
