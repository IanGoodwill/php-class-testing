<?php
class Post {
    public $title;
    public $date;
    public $author;
    public $content;

    function __construct ( $title, $date, $author, $content )
    {
        $this->title = $title;
        $this->date = $date;
        $this->author = $author;
        $this->content = $content;
    }

    public function show ()
    {
        ?>
            <article>
                <h2><?php echo $this->title; ?></h2>
                <p> 
                    Written by 
                    <em><?php echo $this->author; ?> </em>
                     on
                     <time><?php echo $this->date; ?> </time>
                 </p>
                 <?php echo $this->content; ?>
            </article>


        <?php
    }
}
