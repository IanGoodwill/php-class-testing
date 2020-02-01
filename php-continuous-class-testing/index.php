<?php
include 'Post.Class.php';

$firstPost = new tweets(
    'My first post!',
    'February 1, 2020',
    'Bob',
    '<p>Hello, World!</p>',
    'Single',
    'Aug. 26th',
    'red',
    'TRUE'

);

$secondPost = new tweets(
    'My Second post!',
    'February 5, 2020',
    'Lisa',
    '<p>Hi,I love green tea!</p>',
    'Single',
    'Dec. 25th',
    'blue',
    'FALSE'
);

$thirdPost = new tweetsstatus(
    'My third post!',
    'February 10, 2020',
    'Andrew',
    '<p>No more snow please!</p>',
    'Married',
    'Dec. 2nd',
    'green',
    'TRUE'
);

$myPosts = [ $firstPost, $secondPost, $thirdPost ];

foreach ($myPosts as $val)
 {
    echo $val->show();
    if(is_a( $val, 'tweetsstatus' )) // if(is_a($object, 'parentClass')) 
        echo "Not Logged In";
        else echo "Welcome!";
}

