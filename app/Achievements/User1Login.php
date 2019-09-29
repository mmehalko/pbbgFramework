<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class User1Login extends Achievement
{
    /*
     * The achievement name
     */
    public $name = "User's First Login";

    /*
     * A small description for the achievement
     */
    public $description = "Congratulations! You have logged in for the first time.";
}
