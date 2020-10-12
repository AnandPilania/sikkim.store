<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Rating extends Component
{
    private ?int $rating;
    public ?int $filledStar;
    public ?int $unfilledStar;
    public ?int $reviewCount;

    public function __construct(int $rating = null, int $reviewCount = null)
    {
        $this->rating = $rating;
        $this->reviewCount = $reviewCount;

        if ($rating > 5) {
            $this->rating = 5;
        }

        $this->unfilledStar = 0;
        $this->filledStar = $this->rating;

        if ($this->rating < 5) {
            $this->unfilledStar = 5 - $this->rating;
        }
    }

    public function render(): View
    {
        return view('components.rating');
    }
}
