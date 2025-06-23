<!-- Header -->
  <header id="header" class="header">
    <div class="header-nav navbar-fixed-top header-dark navbar-white navbar-transparent navbar-sticky-animated animated-active">
      <div class="header-nav-wrapper">
        <div class="container">
          <nav id="menuzord-right" class="menuzord orange">
            <a class="menuzord-brand" href="javascript:void(0)">
              <img src="images/logo-wide.png" alt="">
            </a>
            
            <ul class="menuzord-menu">
              <li class="active"><a href="index.php">Home</a>
              </li>
                
                 
               
              <li><a href="#">Source Info</a>
                <ul class="dropdown">
                  <li><a href="sourceAdd.php">Add </a></li>
                  <li><a href="sourceView.php">View</a></li>
                </ul>
              </li>
			  <li><a href="#">Contact Info</a>
                <ul class="dropdown">
                  <li><a href="contactAdd.php">Add </a></li>
                  <li><a href="contactView.php">View</a></li>
                </ul>
              </li>
			  <li><a href="#">Primary Contact Info</a>
                <ul class="dropdown">
                  <li><a href="primaryAdd.php">Add </a></li>
                  <li><a href="primaryView.php">View</a></li>
                </ul>
              </li>
			  <li><a href="#">Medicine History</a> 
        <ul class="dropdown">
                 
                  <li><a href="historyView.php">View</a></li>
                </ul> 

              </li>
              <li><a href="#">More</a>
                <ul class="dropdown">
                  <li><a href="symptomsView.php">Symptoms</a></li>
               <!--   <li><a href="medicineView.php">Medicine</a></li>  -->
                  <li><a href="dischargeView.php">Discharge</a></li>
                  <li><a href="dailydutyView.php">Dailyduty</a></li>
                  <li><a href="hotspotView.php">Hotspot</a></li>
                 
                </ul>
              </li>
              
              <li><a href="#home"><?php echo $uName;  ?></a>
			  <ul class="dropdown">
                  
                  <li><a href="profile.php">Profile </a>
                    
                  </li>
                  <li><a href="logout.php">Logout</a>
                    
                  </li>
                  
               
              </li>
              
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>