<?php
  include("dbconnection.php");
  include("session.php");

  // Fetch counts
  $counts = ['patients'=>0,'hotspots'=>0,'contacts'=>0];

  $q1 = mysqli_query($dbconnection, "SELECT COUNT(*) AS cnt FROM patient");
  if ($q1 && $r = mysqli_fetch_assoc($q1)) {
    $counts['patients'] = $r['cnt'];
  }
  $q2 = mysqli_query($dbconnection, "SELECT COUNT(*) AS cnt FROM hotspot");
  if ($q2 && $r = mysqli_fetch_assoc($q2)) {
    $counts['hotspots'] = $r['cnt'];
  }
  $q3 = mysqli_query($dbconnection, "SELECT COUNT(*) AS cnt FROM contact");
  if ($q3 && $r = mysqli_fetch_assoc($q3)) {
    $counts['contacts'] = $r['cnt'];
  }

  include("header.php");
  include("menu.php");
?>

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="col-12"><h2>Dashboard</h2></div>
    </div>
    <div class="content-body">
      <div id="crypto-stats-3" class="row">

       
        <div class="col-xl-4 col-12">
          <a href="patientView.php" style="text-decoration:none; color:inherit;">
            <div class="card crypto-card-3 pull-up">
              <div class="card-content">
                <div class="card-body pb-0">
                  <div class="row">
                    <div class="col-2">
                      <h1><i class="la la-user warning font-large-2" title="Patients"></i></h1>
                    </div>
                    <div class="col-5 pl-2">
                      <h4>Patients</h4>
                      <h6 class="text-muted">No. of Patients</h6>
                    </div>
                    <div class="col-5 text-right">
                      <h4><?= number_format($counts['patients']) ?></h4>
                     
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <canvas id="btc-chartjs" class="height-75"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        
        <div class="col-xl-4 col-12">
          <a href="hotspotView.php" style="text-decoration:none; color:inherit;">
            <div class="card crypto-card-3 pull-up">
              <div class="card-content">
                <div class="card-body pb-0">
                  <div class="row">
                    <div class="col-2">
                      <h1><i class="la la-map-marker font-large-2 info" title="Hotspot Areas"></i></h1>
                    </div>
                    <div class="col-5 pl-2">
                      <h4>Hotspot Areas</h4>
                      <h6 class="text-muted">No. of Hotspot Areas</h6>
                    </div>
                    <div class="col-5 text-right">
                      <h4><?= number_format($counts['hotspots']) ?></h4>
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <canvas id="eth-chartjs" class="height-75"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

       
        <div class="col-xl-4 col-12">
          <a href="contactView.php" style="text-decoration:none; color:inherit;">
            <div class="card crypto-card-3 pull-up">
              <div class="card-content">
                <div class="card-body pb-0">
                  <div class="row">
                    <div class="col-2">
                      <h1><i class="la la-users font-large-2 success" title="Contacts"></i></h1>
                    </div>
                    <div class="col-5 pl-2">
                      <h4>Contacts</h4>
                      <h6 class="text-muted">No. of Contact Persons</h6>
                    </div>
                    <div class="col-5 text-right">
                      <h4><?= number_format($counts['contacts']) ?></h4>
                     
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <canvas id="xrp-chartjs" class="height-75"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>
</div>

<?php
  include("footer.php");
  mysqli_close($dbconnection);
?>
