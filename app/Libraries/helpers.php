<?php

function getTheme()
{
    $theme_name = 'theme';
    Theme::set($theme_name);
    return Theme::current();
}
