<?php

function get_browser_name($user_agent){
        $browser_name;
        if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) {
            $browser_name = 'Opera';
        }elseif (strpos($user_agent, 'Edge')) {
            $browser_name = 'Edge';
        }elseif (strpos($user_agent, 'Chrome')) {
            $browser_name = 'Chrome';
        }elseif (strpos($user_agent, 'Safari')) {
            $browser_name = 'Safari';
        }elseif (strpos($user_agent, 'Firefox')) {
            $browser_name = 'Firefox';
        }elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) {
            $browser_name = 'Internet Explorer';
        }else{
            $browser_name = 'Other';
        }

        return $browser_name;
    }

?>