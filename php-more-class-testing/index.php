<?php
include 'Post.Class.php';

$firstPost = new Post(
    'My first post!',
    'February 1, 2020',
    'Ian',
    '<p>Hello, World!</p>'
);

$secondPost = new Post(
    'Great day!',
    'February 3, 2020',
    'anonymous',
    '<p>I am glad it stopped snowing!</p>'
);

$thirdPost = new Post(
    'My third post!',
    'February 5, 2020',
    'Ian',
    '<p>I love green tea!!</p>'
);

$myPosts = [ $firstPost, $secondPost ];

for ( $i = 0; $i < count( $myPosts ); $i++ )
{
    $myPosts[$i]->show();
}