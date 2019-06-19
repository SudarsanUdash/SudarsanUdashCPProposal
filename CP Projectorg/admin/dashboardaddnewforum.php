<?php
include('dashboardheader.php');
?>

<div class="">
    <div class="container">
        <div class="col-md-10 col-lg-offset-1">
            <div class="mt-wrapper mt-style-button1">

                <div class="mt-button-text"><a href="dashboardaddnewforum.php" class="mt-style-button normal">+ New Topic</a> </div>

            </div>
            <div>


                <table class="table table-striped table-dark table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"><h5> Topics </h5></th>
<!--                        <th scope="col"> <h5>Views </h5></th>-->
                        <th scope="col"> <h5>Posted on:</h5></th>
                    </tr>
                    </thead>
                   
                </table>






                <!-- LEAVE COMMENTS -->
                <div class="commnetsfrm">
                    <h4>Leave Your Comments</h4>
                    <p>Make sure to Sign in to post your Queries</p>
                    <li class="col-sm-12">
                    <textarea class="form-control" placeholder="MESSAGE" name="comments"></textarea>
                    </li>
                           
                          
                                    <button type="submit" class="btn margin-top-20">SEND</button>
                                  
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
            </div>
        </div>
  

<?php
include('footer.php');
?>

