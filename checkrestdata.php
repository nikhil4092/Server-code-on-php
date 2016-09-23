<?php 
echo <<<_END


<!DOCTYPE html>
<html lang="en">
 <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                           <div class="db">
                            <h2 style="padding-bottom:15px">Restaurant Details</h2>
                            <p class="item-intro text-muted" style="padding-bottom:40px"></p>
                                                       <p><form name="sentMessage" action="checkrestdata2.php" method="POST" >
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                            
<div class="form-group">
<h5>Enter Restaurant ID</h5>
<input type="Text" name="rest" textarea class="form-control"  placeholder="Restaurant id *" id="message">

<p class="help-block text-danger"></p>
</div>
<input type="text" name="deails" value="Restaurant ID" hidden >
                                <input type="submit" class="btn btn-xl" style="background-color: #fe5335 ; color:#FFF" ></a></input></div>
                               <div class="col-lg-12 text-center">
</div><div class="col-lg-12 text-center">
</div><div class="col-lg-12 text-center">
</div>
</form></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
_END;
?>