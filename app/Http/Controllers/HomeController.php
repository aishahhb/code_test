<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function form(Request $request)
    {
        //validate input: required = input cannot be blank, integer=only integer allow, min= input cannot be 0;
        $validated = $request->validate([
            'player' => 'required|integer|min:1',
        ]);

        //Spade = S, Heart = H, Diamond = D, Club = C
        $shapes = ['S', 'H', 'D', 'C']; 
        $numbers = ['A', '2', '3', '4', '5', '6', '7', '8', '9', 'X', 'J', 'Q', 'K'];
        $cards = [];


        foreach($shapes as $shape) {
            foreach($numbers as $number) {
                $cards[] = $shape."-".$number; //Random card
            }
        }
        
        $collection = collect($cards);
        //collect: declared an array and passed it to the collect() helper method which then created the Laravel collection.

        $shuffled = $collection->shuffle();
        //shuffle : This function shuffles (randomizes the order of the elements in) an array. It uses a pseudo random number generator that is not suitable for cryptographic purposes. - random playing cards

        $shuffled->all();

        $player = $request->player; //get value from input
        $player_card = floor(count($shuffled) / $player);
        if ($player_card < 1)
            $player_card = 1;

        //start the result
        $result = '';

        //Corresponding number of distribution cards
        for($i = 0; $i < $player; $i++) {
            $result .= 'Player No.'.($i + 1).' => ';
            for($j = $i * $player_card; $j < ($i + 1) * $player_card; $j++) {
                if ($j < 52) { //generate 52 cards
                    $result .= $shuffled[$j].', ';
                    unset($shuffled[$j]); //resets variable.
                }
            }
            $result .= '<br/>';
        }
        //return the value to page 'home'
        return view('home', ['result' => $result]);
    }

    public function question_b()
    {
        return view('question_b');
    }
}
