<?php namespace RainLab\Blog\Updates;

use RainLab\Blog\Models\Category;
use RainLab\Blog\Models\IMsg;
use RainLab\User\Models\User;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{

    public function run()
    {
        //
        // @todo
        //
        // Add a Welcome post or something
        //

        Category::create([
            'name' => trans('rainlab.blog::lang.categories.uncategorized'),
            'slug' => 'uncategorized',
        ]);

        IMsg::create([
            'user_id' => User::orderBy('id' , 'desc')->first()->id,
            'content' => '初始化信息第一条',
        ]);
    }

}
