    <?php ob_start();

    // authentication check
    require_once('auth.php');

    // set page title
    $page_title = null;
    $page_title = 'Movie Details';

    // embed the header
    require_once('header.php');

    
    //initialzingi variables
    $userID = null;
    $userEmail = null;
    $userLocation = null;
    $userSkills = null;
    $userProfile = null; 
 
if (empty($_GET['userID']) == false) {
  $userID = $_GET['userID'];

  // connect
  require_once('db.php');
  
  // write the sql query
  $sql = "SELECT * FROM database1 WHERE userID = :userID";
  
  // execute the query and store the results
  $cmd = $conn->prepare($sql);
  $cmd->bindParam(':userID', $userID, PDO::PARAM_INT);
  $cmd->execute();
  $database = $cmd->fetchAll();
  
  foreach ($database as $item) {
    $userEmail = $item['userEmail'];
    $userLocation = $item['userLocation'];
    $userSkills = $item['userSkills'];
    $userProfile = $item['userProfile'];
  }
  
  // disconnect
  $conn = null;
}

?>
<main class="login-form">
  <div class="cotainer">
        <div class="row justify-content-center">
          <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Add Details</div>
                    <div class="card-body">
                       <form id="contact" action="addDetails.php" method="post">
                         <fieldset>
                           <input type="text" name="userEmail" class="form-control" tabindex="3" required placeholder="Email" value="<?php echo $userEmail; ?>">
                         </fieldset>
                         <fieldset>
                           <input type="text" name="userLocation" class="form-control" tabindex="4" required placeholder="Location" value="<?php echo $userLocation; ?>">
                         </fieldset>
                         <fieldset>
                           <input type="text" name="userSkills" class="form-control" tabindex="5" required placeholder="Job Title" value="<?php echo $userSkills; ?>">
                         </fieldset>
                         <fieldset>
                           <input type="text" name="userProfile" class="form-control" tabindex="6" required placeholder="Profile Picture" value="<?php echo $userProfile; ?>">
                         </fieldset>
                         <fieldset>
                           <input type="hidden" name="userID" value="<?php echo $userID; ?>">
                           <input id="contact-submit" type="submit" name="submit" value="submit" class="btn btn-primary">
                         </fieldset>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>


      <?php require('footer.php'); 
      ob_flush(); ?>
