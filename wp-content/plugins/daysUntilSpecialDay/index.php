<?php
/*

Plugin Name: Days Till My Special Day

*/

function daysUntilSpecialDay_shortcodes_init()
{
    function daysUntilSpecialDay_shortcode($atts = [], $content = null)
    {
        
        date_default_timezone_set('US/Eastern');
        $now = time();
        $last_date = strtotime("2018-03-02");
        $datediff = $last_date - $now;
        $day_left=floor($datediff/(60*60*24));
        $content .= $day_left;
        return $content;
    
    }
    add_shortcode('daysUntilSpecialDay', 'daysUntilSpecialDay_shortcode');
}
add_action('init', 'daysUntilSpecialDay_shortcodes_init');