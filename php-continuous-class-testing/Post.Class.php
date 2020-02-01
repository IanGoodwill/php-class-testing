

<?php
class tweets {
    public $title;
    public $date;
    public $author;
    public $content;
    public $rstatus;
    public $birthday;
    public $favcolor;

    function __construct ( $title, $date, $author, $content, $rstatus, $birthday, $favcolor )
    {
        $this->title = $title;
        $this->date = $date;
        $this->author = $author;
        $this->content = $content;
        $this->rstatus = $rstatus;
        $this->birthday = $birthday;
        $this->favcolor = $favcolor;
    }

    public function show ()
    {
        ?>
            <article>
                <h2><?php echo $this->title; ?></h2>
                <p> 
                    Written by 
                    <em><?php echo $this->author; ?> </em>
                    <br>
                     on
                     <time><?php echo $this->date; ?> </time>
                     <br>
                     My favorite color is
                     <strong><?php echo $this->favcolor; ?></strong>
                     <br>
                     My Birthday is 
                     <?php echo $this->birthday; ?>
                     <br>
                     My relationship status is
                    <?php echo $this->rstatus; ?>
                 </p>
                 <?php echo $this->content; ?>
            
            </article>


        <?php
    }
}

class tweetsstatus extends tweets
{
    public $online = TRUE;

    public function showStatus ()   
    {
        ?>
        <article>
            <p>
                <?php
                    if( $online == TRUE ) 
                        echo 'Welcome Online!';
                    else echo 'Not logged In';
                ?>
            </p>
        </article>

        <?php
    } 
}