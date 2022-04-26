<?php
require("libs/config.php");
$pageDetails = getPageDetailsByName($currentPage);

include("header.php");
?>
<center><font color="#EC7063 "><h1>OUR COLLEGE</h1></font><br>
<img src="6.jpg" height="600" width="1200">
<br>
<br>
<br>
<br>
<center><font color="#EC7063 "><h1>Addmission Block</h1></font><br>
<br>
<img src="8.jpg" height="800" width="1200">
<div class="row main-row">
    <div class="9u">
        <section class="left-content">
            <h2><?php echo stripslashes($pageDetails["page_title"]); ?></h2>
            <?php echo stripslashes($pageDetails["page_desc"]); ?>
        </section>
    
    </div>
    <!--sidebar starts-->
	<?php include("sidebar.php"); ?>    
    <!--sidebar ends-->
</div>
<?php
include("footer.php");
?>