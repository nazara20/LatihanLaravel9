<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_user')->truncate();

        $books = \App\Models\Books::all();
        $users = \App\Models\User::all();

        foreach($books as $book) {
            $userIds = $users->random(rand(1, 3))->pluck('id')->toArray(); // return collection id of users
            $book->users()->attach($userIds); // insert to book_user table
        }
    }
    }
