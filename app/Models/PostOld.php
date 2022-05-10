<?php

namespace App\Models;

class Post
{

    private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Arief",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, reiciendis iusto? Excepturi tempore quod quo aperiam dolore suscipit ipsum perferendis quis. Nesciunt sapiente deserunt minus placeat illo dolorum voluptate molestiae."
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nadhofa",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, veritatis! Nisi, laudantium in expedita similique ut necessitatibus maiores nesciunt illum nobis tempora suscipit eaque cupiditate, voluptatum ab amet iusto! Deleniti magni iste animi sunt dicta culpa eos reiciendis provident maiores quia? Alias libero quisquam culpa nisi sint cupiditate consequuntur quia? Inventore similique veniam odio, culpa doloribus nam aliquid quo, quasi obcaecati reiciendis veritatis consequuntur recusandae dolore porro eum praesentium? Eos beatae assumenda repellendus quis? Provident doloremque, consequatur a blanditiis nulla enim aut facere molestias impedit earum alias sint exercitationem quas? Dolores perferendis rerum aut dolor porro, ducimus sit quae quidem!"

        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
