<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function suggestions(Request $request){

        $query = $request->get('query');

        $suggestions = [
            "Project 1",
            "Project 2",
            "Project 3",
            "Software Development",
            "Fintech Experience",
            "Basketball",
            "Football",
            "Gym",
            "Video Games",
            "Portfolio"
        ];

        $filteredSuggestions = array_filter($suggestions, function($suggestion) use ($query) {
            return stripos($suggestion, $query) !== false;
        });

        return response()->json(array_values($filteredSuggestions));
    }
}
