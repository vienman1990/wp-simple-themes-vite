<?php

if (is_archive() || is_front_page()) {
    printf('<a href="%s">%s</a>', get_the_permalink(), get_the_title());

} else {
    printf('<h1>%s</h1>', get_the_title());

    the_content();
}