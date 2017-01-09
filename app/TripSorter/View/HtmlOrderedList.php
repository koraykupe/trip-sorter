<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 9.01.2017
 * Time: 09:35
 */

namespace App\TripSorter\View;


use App\TripSorter\View\Contracts\IFormat;

class HtmlOrderedList implements IFormat
{
    /**
     * @param array $data
     * @return string
     * Create an ordered list to show boarding lists
     */
    public function view($data = [])
    {
        $str = '<ol>';
        foreach( $data as $sortedBoardingCard){
            $str .= '<li>' . $sortedBoardingCard->toString() . '</li>' ;
        }
        $str .= '<li>You have arrived at your final destination.</li>';
        $str .= '</ol>';
        return $str;
    }
}