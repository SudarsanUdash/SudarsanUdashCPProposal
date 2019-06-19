<?php
require_once('topnavigation.php');

require_once('class/forumquestion.class.php');


$question = new forumquestion;


if(isset($_POST['forumsubmit']))
{
  $question = $question->save();
  if(is_integer($question))
  {
    $msg = 'User Register';

  }
  else
  {
    $msg = 'User Not Register';
  }
}

?>
<div class="">
    <div class="container">
        <div class="col-md-10 col-lg-offset-1">
            <div class="mt-wrapper mt-style-button1">

                <div class="mt-button-text"><a href="addForum.php" class="mt-style-button normal">+ New Topic</a> </div>

            </div>
            <form action="" method="post">
            <?php if(isset($msg))
            echo $msg;
           ?>
            
                 
                    <p>Make sure to Sign in to post your Queries</p>
                    <br>

                    <li class="col-sm-4">
                      Name
                      <br>
                      <br>
                      <input type="text" name="username" placeholder="What is your name?" required="compulsary">
                      <br>
                      <br>
                        <textarea class="form-control" name="question" placeholder="Topic" required="compulsary">Topic of discussion</textarea>
                   
                           
                          
                                    <button type="submit" name="forumsubmit" class="btn margin-top-20">SEND</button>
                                  
                            
                       
                 
                </div>
            <div>
</form>

               





                <!-- LEAVE COMMENTS -->
               
            </div>
            </div>
        </div>
  
<?php
include('footer.php');
?>


