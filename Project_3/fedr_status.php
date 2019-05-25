<?php
include "include/config.php";
include "./include/control.php";
$site_name="CT310 Project 3";
$page_name="Federation Status";
include "./include/header.php";
?>

<script type="text/javascript" src="fedr_status.js"></script>

<body>
  <div id="container">
    <div id="body">
      <div id="header">

      </div>

      <div class="container-fluid">
        <div class="row visible-on description">
          <div class="col-md-4 col-lg-4 hidden-sm hidden-xs">
          
          </div>
          <div class="col-lg-4 col-md-4">
            <table id="sites">
              <tr>
                <th>Short</th>
                <th>Long</th>
                <th>Status</th>
              </tr>
            </table>
            <p>Status of Federation AJAX call: <span id="outp1"> ... </span></p>
            <p id="demo"></p>
          </div>
          <div class="col-md-4 col-lg-4 hidden-sm hidden-xs">
          
          </div>
        </div>
      </div>
    </div>
  </div>
    <br><br><br><br>

    <?php
      include "./include/footer.php";
    ?>
  </div>
</body>
