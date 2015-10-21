
<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('categories')->delete();

        $categories = array(
            ['id'=>'1','name'=>'apple','created_at'=>'new dateTime','updated_at'=>'new dateTime']
        );

        // Uncomment the below to run the seeder
        DB::table('categories')->insert($categories);
    }

}