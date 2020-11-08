<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'name' => 'Google Display Network (GDN) ad preview generator',
                'slug' => Str::slug('Google Display Network (GDN) ad preview generator', '-'),
                'link' => 'https://gdnpreviewgenerator.com',
                'why' => '<p>In one of my agency marketing campaigns, the design team had been struggling to view in-progress ads to the client.</p>
            <p>The ads were done in Google Web Designer. The problem was that the client did not have access to the software to view how it will display on the web.</p>
            <p>That is why we came up with the idea to build up a Software as a Service (SaaS) that hosts the ads and dedicates a link to it for sharing.</p>',
                'how' => '<p>The designer brought up the issue and we decided to build a SaaS that is totally independent of the Google Web Designer and anyone else can simply preview the ad as easy as just visiting a link generated from the website. The SaaS is built on an open-source PHP framework is called <a href="https://laravel.com/" target="_blank">"Laravel"</a>.</p>',
                'what' => '<p>Yes. That is simply gdnpreviewgenerator.com.</p>',
                'challenge' => '<p>So far the number of uploads, as well as users, has been increasing higher than what I expected. However, this is a SaaS that addresses a niche problem and targets the agencies. As a result, the number of users will not be a rocket.</p>',
            ],

            [
                'name' => 'Swappers',
                'slug' => Str::slug('Swappers', '-'),
                'link' => 'https://swappers.io',
                'why' => '<p>Make the process of getting pre-owned video games less painful by removing a few steps.</p>
            <p>Typical process:</p>
            <ol>
                <li>Advertise your pre-owned game online.</li>
                <li>Contact, meet and deal with a random stranger to selling.</li>
                <li>Look for the next game you wish to play.</li>
                <li>Contact, meet and deal again with another stranger to buy.</li>
            </ol>
            <p>Desire process:</p>
            <ol>
                <li>Give your game and get a fresh one from one party.</li>
            </ol>',
                'how' => '<p>Making a platform where users could select the games they have and find the games they are willing to play from the list. Then swap the games.</p>',
                'what' => '<p>My fellow, <a href="https://mattdaneshvar.com/" target="_blank">Matt Daneshvar</a>, and I brought this idea to life and made Swappers.io.</p>
            <p>Swappers is a platform where gamers can swap the pre-owned games with the website inventory by paying $5 US for transaction fees. People could order in two ways. They could either select the "Standard Shipping" or "Drop Off" option on checkout.</p>',
                'challenge' => '<ul>
                <li>Inventory
                <p>For some reason, the Swappers inventory was virtual. When someone orders, we go and buy the pre-owned game too.</p>
                    <p>If they select Standard Shipping that takes at least three days to deliver to our office, we had enough time to buy. And when it was Drop Off method, we had an option for the user to select a time slot, that the closest was in the next three days. It sounds interesting so far!</p>
                    <p>The challenge here was, even though we could manage the risk of investment, but the cost of reordering was too high and inefficient.</p>
                </li>

                <li>Credibility
                    <p>We used the listing websites and social media to advertise the website.</p>
                    <p>These platforms helped us to reach out to our target market freely. This could eliminate the cost of marketing. However, scammers use them either.</p>
                    <p>Despite having a decent website, replying seamlessly and on time,  gaining people\'s trust was challenging and sometimes impossible.</p>
                </li>

                <li>The target market
                    <p>The business model was targeting the local market (Malaysia), for some reasons such as available delivery options, currency rate, being trustworthy, and etc.</p>
                </li>
            </ul>',
            ],

            [
                'name' => 'Specs Template',
                'slug' => Str::slug('SpecsTemplate', '-'),
                'link' => 'https://specstemplate.com',
                'why' => null,
                'how' => null,
                'what' => null,
                'challenge' => null,
            ],

            [
                'name' => 'Form n Go',
                'slug' => Str::slug('formngo', '-'),
                'link' => 'https://formngo.app',
                'why' => null,
                'how' => null,
                'what' => null,
                'challenge' => null,
            ],

            [
                'name' => 'Tiny Note',
                'slug' => Str::slug('tinynote', '-'),
                'link' => 'https://tinynote.io',
                'why' => null,
                'how' => null,
                'what' => null,
                'challenge' => null,
            ],

            [
                'name' => 'Pay Well',
                'slug' => Str::slug('PayWell', '-'),
                'link' => 'https://PayWell.app',
                'why' => null,
                'how' => null,
                'what' => null,
                'challenge' => null,
            ],

            [
                'name' => 'Get Set Go',
                'slug' => Str::slug('getsetgo', '-'),
                'link' => 'https://getsetgo.work',
                'why' => null,
                'how' => null,
                'what' => null,
                'challenge' => null,
            ],
        ]);
    }
}
