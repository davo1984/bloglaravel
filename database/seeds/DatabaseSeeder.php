<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('posts')->truncate();

        Post::create(['title' => 'Pre-Work Week 1']);
        Post::create(['title' => 'Pre-Work Week 2']);
        Post::create(['title' => 'Pre-Work Week 3']);
        Post::create(['title' => 'Pre-Work Week 4']);
        Post::create(['title' => 'In Class Work Week 1']);

        DB::table('paragraphs')->truncate();

        Paragraph::create(['body' => 'This first week passed in a blur of information that left me feeling like I was drinking 
            from a firehose.  Working through the GitHub tutorials felt like all of my concentration 
            was solely focused on getting through the tutorial rather than actually learning the 
            material.   I plan on doing a more in-depth review as time permits.   Also just trying to 
            figure out what format to turn in this work is unsettling.   I am looking forward in 
            eagar anticipation to the coming week.', 'post-id' => 1 ]);
        Paragraph::create(['body' => 'Figuring out what is required to be posted as completed work is 
            still challenging for me.  I made a list Thursday during stand-up which left out three items 
            I noticed that all my co-students had posted.  I found where I had done them and added  
            links to those items.  Perhaps the hardest thing is simply determining what day of the week it is.
            Thursday at stand-up I told of my plans for the next 24 hours thinking that it was Wednesday.  
            I was only corrected by my wife just before bedtime when I was planning which vehicle to take to
            work.', 'post-id' => 2 ]);
        Paragraph::create(['body' => "I like pseudo coding and flow charting.  That was how I planned every new program I had to write
            when I worked as a programmer back in the 90s.  Especially diagramming with flow charts.  
            Diagramming was how I planned how programs and parts of a system would interact with one another.  
            Every part that I couldn't figure out became an empty box.  Once I had figured out what the 
            inputs and outputs were, usually what to do with them was greatly simplified.", "post-id" => 2 ]);
        Paragraph::create(['body' => "I am super excited to be learning a new programming language. Teaching myself a new language
            I find to be extremely difficult because the main thing I need is a worthy project to
            make it worthwhile.  Working with others is also a major plus for me. I don't do very well
            without the stimulation I get from interacting with other educated and intelligent people.
            If that makes me an intellectual then I'm unapologetic.", "post-id" => 2]);
    }
}
