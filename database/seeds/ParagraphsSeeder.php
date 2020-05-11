<?php

use Illuminate\Database\Seeder;
use App\Paragraph;

class ParagraphsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paragraphsArray = [
            [
                'post_id' => 1,
                'body' => "This first week passed in a blur of information that left me feeling like I was drinking 
            from a firehose.  Working through the GitHub tutorials felt like all of my concentration 
            was solely focused on getting through the tutorial rather than actually learning the 
            material.   I plan on doing a more in-depth review as time permits.   Also just trying to 
            figure out what format to turn in this work is unsettling.   I am looking forward in 
            eager anticipation to the coming week."
            ],
            [
                'post_id' => 2,
                'body' => "Figuring out what is required to be posted as completed work is 
            still challenging for me.  I made a list Thursday during stand-up which left out three items 
            I noticed that all my co-students had posted.  I found where I had done them and added  
            links to those items.  Perhaps the hardest thing is simply determining what day of the week it is.
            Thursday at stand-up I told of my plans for the next 24 hours thinking that it was Wednesday.  
            I was only corrected by my wife just before bedtime when I was planning which vehicle to take to
            work."
            ],
            [
                'post_id' => 2,
                'body' => "I like pseudo coding and flow charting.  That was how I planned every new program I had to write
            when I worked as a programmer back in the 90s.  Especially diagramming with flow charts.  
            Diagramming was how I planned how programs and parts of a system would interact with one another.  
            Every part that I couldn't figure out became an empty box.  Once I had figured out what the 
            inputs and outputs were, usually what to do with them was greatly simplified."
            ],
            [
                'post_id' => 2,
                'body' => "I am super excited to be learning a new programming language. Teaching myself a new language
            I find to be extremely difficult because the main thing I need is a worthy project to
            make it worthwhile.  Working with others is also a major plus for me. I don't do very well
            without the stimulation I get from interacting with other educated and intelligent people.
            If that makes me an intellectual then I'm unapologetic."
            ],
            [
                'post_id' => 3,
                'body' => "First I need to offer apologies to my fellow students for not offering 
                any advice on your blogs.  The ones I did look at intimidated me."
            ],
            [
                'post_id' => 3,
                'body' => "I like the separation of effort between html, CSS, JS and SQL.  That 
                just makes sense to me because that's how I try to organize my life.  
                On the down side it is very tedious and error prone.  Often I find that
                what I was thinking about when I find a new home for a tool or bookmark 
                a link isn't what I'm thinking about when I go to retrieve it. Although 
                I want to be detail oriented I find myself being more of an abstract and 
                \"Big Picture\" type of person.  What data do I need, how will it be 
                deconstructed, manipulated and stored and retrieved? What program needs
                to do what to which data are tasks that energize me. Designing 
                shadows for drop boxes on forms I don't find so compelling."
            ],
            [
                'post_id' => 3,
                'body' => "That's why I was excited to read an article describing how frameworks 
                become an abstraction layer allowing one to focus on what needs to be
                done rather than on what to do while minimizing bugs."
            ],
            [
                'post_id' => 3,
                'body' => "My one big Ah-Ha! moment was margin -> border -> padding -> content NOT
                    content -> margin -> border -> padding. My method is to plug in a few 
                    bizarre values so which does what becomes obvious."
            ],
            [
                'post_id' => 3,
                'body'  => "My \"oh rats\" moments:
                    I realized that the border I was going to add was 
                            already there, just not displaying and not even \"Developer Tools\" shed 
                            any light.
                        
                            Now I need sub-menu navigation for these weekly blog posts.
                        
                            There never seems to be enough time to go as deeply as I would like.  
                            I need a quick day trip to visit my parents before the in-class session begins.
                            There was a delay in getting my computer eyeglasses made."
            ],
            [
                'post_id' => 4,
                'body' => "Why do you see JavaScript Frameworks and Libraries useful or hard to use?<br>
                    I'm enjoying the programming challenge of working in JavaScript.
                    I find concepts like the scope of variables and calling functions different 
                    from anything I've encountered before. Javascript is a combination of powerful
                    features, protection from making errors and \"why did they do that?\"  
                    It will take some time to master, but because of its power and libraries 
                    should be well worth the effort.  I am also going to learn C# just to give
                    me another modern, web language to work with and compare."
            ],
            [
                'post_id' => 4,
                'body' => "What Frameworks or Libraries are you interested in learning more about?<br>
                    At this point I really don't know enough about what Frameworks are available
                    and their differences to actually know which I'd like to dive into."
            ],
            [
                'post_id' => 4,
                'body' => "Find one emerging JavaScript tool that you would like to learn more about or use in your final project.<br>
                    The Frameworks which most interest me are Node.JS, Vue.JS, React and Meteor.js.  
                    Meteor.js interests me because it is both full-stack and 
                    cross-platform.  An added bonus is its claim to be great for 
                    rapid prototyping.  And then there is Rust by the Mozilla Foundation.
                    Reading about Rust I thought that it sounded like how things should be done."
            ]
        ];
        foreach ($paragraphsArray as $Paragraph) {
            Paragraph::create($Paragraph);
        }
    }
}
