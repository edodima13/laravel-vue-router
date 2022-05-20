<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $tags = [
            'vegetariano','vegano','bio','soia'
        ];

        foreach($tags as $t){

            $tag = new Tag();
            $tag->name = $t;
            $tag->slug = Str::slug($t);

            $tag->save();

        };

    }
}
