<!-- TA Main Dashboard -->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Language" content="en" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>TA Dashboard</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="This is an example dashboard created using build-in elements and components."
    />
    <meta name="msapplication-tap-highlight" content="no" />
    <link href="./styles/custom-styles/styles.calendar.css" rel="stylesheet" />
    <link href="./styles/main.css" rel="stylesheet" />
    <style type="text/css">
      /* Chart.js */
      @-webkit-keyframes chartjs-render-animation {
        from {
          opacity: 0.99;
        }
        to {
          opacity: 1;
        }
      }
      @keyframes chartjs-render-animation {
        from {
          opacity: 0.99;
        }
        to {
          opacity: 1;
        }
      }
      .chartjs-render-monitor {
        -webkit-animation: chartjs-render-animation 0.001s;
        animation: chartjs-render-animation 0.001s;
      }
    </style>
    <script
      type="text/javascript"
      charset="UTF-8"
      src="http://maps.google.com/maps-api-v3/api/js/41/7/intl/en_gb/common.js"
    ></script>
    <script
      type="text/javascript"
      charset="UTF-8"
      src="http://maps.google.com/maps-api-v3/api/js/41/7/intl/en_gb/util.js"
    ></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script
      type="text/javascript"
      charset="UTF-8"
      src="./assets/scripts/custom-scripts/scripts.TA.js"
    ></script>
  </head>
  <body>
    <div
      class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header"
    >
      <div class="app-header header-shadow">
        <div class="app-header__logo">
          <div class="mr-1"><h5>DALTAMS</h5></div>
          <div><h6>TA Dashboard</h6></div>
          <div class="header__pane ml-auto">
            <div>
              <button
                type="button"
                class="hamburger close-sidebar-btn hamburger--elastic"
                data-class="closed-sidebar"
              >
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <div class="app-header__mobile-menu">
          <div>
            <button
              type="button"
              class="hamburger hamburger--elastic mobile-toggle-nav"
            >
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
        <div class="app-header__menu">
          <span>
            <button
              type="button"
              class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav"
            >
              <span class="btn-icon-wrapper">
                <i class="fa fa-ellipsis-v fa-w-6"></i>
              </span>
            </button>
          </span>
        </div>
        <div class="app-header__content">
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
              <div class="widget-content p-0">
                <div class="widget-content-wrapper">
                  <div class="widget-content-left">
                    <div class="btn-group">
                      <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                        <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                      </a>
                      <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(60px, 44px, 0px);">
                        <div class="card-body">
                          <img width="60" src="assets/images/avatars/1.jpg" alt="Card image cap" class="rounded-circle">
                          <br>
                          <br>
                          <h5 class="card-title">John Doe</h5>
                          <h6 class="card-subtitle">
                            TA
                          </h6>
                          <p>
                            Email: ab12345@dal.ca<br>Phone: (123) 456 789<br>Courses:
                            CSCI 1234, CSCI 5678
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="widget-content-left ml-3 header-user-info">
                    <div class="widget-heading">
                      John Doe
                    </div>
                    <div class="widget-subheading">
                      TA
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
          <div class="app-header__logo">
            <div><h5>DALTAMS</h5></div>
            <div><h6>TA Dashboard</h6></div>
            <div class="header__pane ml-auto">
              <div>
                <button
                  type="button"
                  class="hamburger close-sidebar-btn hamburger--elastic"
                  data-class="closed-sidebar"
                >
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
              </div>
            </div>
          </div>
          <div class="app-header__mobile-menu">
            <div>
              <button
                type="button"
                class="hamburger hamburger--elastic mobile-toggle-nav"
              >
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
          <div class="app-header__menu">
            <span>
              <button
                type="button"
                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav"
              >
                <span class="btn-icon-wrapper">
                  <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
              </button>
            </span>
          </div>
          <div class="scrollbar-sidebar ps ps--active-y">
            <div class="app-sidebar__inner">
              <ul class="vertical-nav-menu metismenu">

                <li>
                  <a href="TA.php" class="mm-active">
                    <i class="metismenu-icon pe-7s-user"></i>
                    My Dashboard
                  </a>
                </li>

                <li>
                  <a href="TAcourses.html">
                    <i class="metismenu-icon pe-7s-file"></i>
                    My Courses
                  </a>
                </li>

                <li>
                  <a href="jobs.html" target="_blank">
                    <i class="metismenu-icon pe-7s-pendrive"></i>
                    View Jobs
                  </a>
                </li>
              </ul>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div
                class="ps__thumb-x"
                tabindex="0"
                style="left: 0px; width: 0px;"
              ></div>
            </div>
            <div
              class="ps__rail-y"
              style="top: 0px; height: 706px; right: 0px;"
            >
              <div
                class="ps__thumb-y"
                tabindex="0"
                style="top: 0px; height: 589px;"
              ></div>
            </div>
          </div>
        </div>
		<?php
        session_start();
         include_once 'php-helpers/course-list.php';

        ?>
        <div class="app-main__outer">
          <div class="app-main__inner">
            <!-- Hour Submission and Schedule -->
            <div class="row">
              <!-- Hours of Submission -->
		          <?php
                //extract data, set variables and show the proceed button if form is submitted
                if(isset($_POST['submit']))
                {
                  if(empty($_POST['Courses']))
                  {
                    echo '<form class="col-md-12 col-lg-6">
                  <div class="mb-3 card">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                  </div>
                  <div class="ml-3 mr-3 position-relative form-group alert alert-danger" role="alert">
                  You have not selected a course. <br>Click the button below to select a course.
                  </div>


                  <button type="button" class="btn ml-2 mb-2 mr-2 btn-primary" onclick="window.history.back()">Try Again</button>
                  </div>
                  </form>' ;
                  }
                  else
                  {
                    $input = $_POST['Courses'];
                  $position = substr($input, 10, 11);
                  $_SESSION['position'] = $position;
                  $course =  substr($input, 0, 9);
                  $_SESSION['course'] = $course;
                  echo '<form class="col-md-12 col-lg-6">
                  <div class="mb-3 card">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="ml-3 mt-3 card-title">Hour Submission</div>
                    <button type="button" class="btn ml-2 mb-2 mr-2 mt-2 btn-primary"  value="Back" onclick="window.history.back()">Back</button>
                  </div>
                  <div class="ml-3 mr-3 position-relative form-group alert alert-success" role="alert">
                  You\'ve selected '.$_SESSION['course']. '.
                  Thank you for your selection. <br>Click proceed to fill out the Hour Submission Form.
                  </div>


                  <button type="button" class="btn ml-2 mb-2 mr-2 btn-primary" data-toggle="modal"
                  data-target="#modalTAHSub">Proceed</button>
                  </div>
                  </form>' ;
                  }
                }
                else //if form is not submitted, show the course selection
                {
                  echo '<form class="col-md-12 col-lg-6" method="post" action="TA.php">
                  <div class="mb-3 card">
                    <div class="ml-3 mt-3 card-title">Hour Submission</div>

                      <div class="ml-3 mr-3 position-relative form-group">
                      <label for="exampleCustomSelect" class=""
                        >Select Course</label
                      ><select
                        type="select"
                        id="exampleCustomSelect"
                        name="Courses"
                        class="custom-select"
                      >
                        <option value="">Select</option>
                        <option value="CSCI 1800 MK">CSCI 1800 MK</option>
                        <option value="CSCI 2100 TA">CSCI 2100 TA</option>
                        <option value="CSCI 3000 MK">CSCI 3000 MK</option>
                      </select>
                    </div>
                    <input
                      type="submit"
                      name="submit"
                      class="btn ml-2 mb-2 mr-2 btn-primary"
                      value= "Confirm Selection">
                  </div>
                </form>';
                }
              ?>
              <!-- Schedule for TA -->
              <div class="col-md-12 col-lg-6">
                <div class="mb-3 card">
                  <div class="card-body">
                    <div class="card-title">Schedule</div>
                    <div class="calendar__header">
                      <div class="card-title">Mon</div>
                      <div class="card-title">Tue</div>
                      <div class="card-title">Wed</div>
                      <!-- <div>thu</div>
                                        <div>fri</div>
                                        <div>sat</div>
                                        <div>sun</div> -->
                    </div>
                    <div class="calendar__week">
                      <div class="calendar__day">
                        <div class="calender_date card-title">Jul 1</div>
                        <p>
                          11:35-12:25 <br />
                          Job Interview
                        </p>
                      </div>
                      <div class="calendar__day">
                        <div class="calender_date card-title">Jul 2</div>
                        <p>
                          2:25-3:55 <br />
                          CSCI 2110 Cls
                        </p>
                      </div>
                      <div class="calendar__day">
                        <div class="calender_date card-title">Jul 3</div>
                        <p>
                          4:35-5:25 <br />
                          CSCI 3100 TA
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Current Courses -->
            <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="mb-3 card">
                  <div class="card-body">
                    <h5 class="card-title">Current Courses</h5>
                    <table class="mb-0 table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Course ID</th>
                          <th>Instructor</th>
                          <th>Position</th>
                          <th>Feedback Stats</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>CSCI XXXX</td>
                          <td>Joe Miller</td>
                          <td>TA</td>
                          <td><button data-toggle="modal" data-id="1" data-target="#Feedback" class="btn btn-primary">View</button></td>
                        </tr>
                        <tr data-toggle="modal" data-id="2" data-target="#TAdetail">
                          <th scope="row">2</th>
                          <td>CSCI XXXX</td>
                          <td>John Snow</td>
                          <td>Marker</td>
                          <td><button data-toggle="modal" data-id="1" data-target="#Feedback" class="btn btn-primary">View</button></td>
                        </tr>
                        <tr data-toggle="modal" data-id="3" data-target="#TAdetail">
                          <th scope="row">3</th>
                          <td>CSCI XXXX</td>
                          <td>Noctis Lucis Caelum</td>
                          <td>TA</td>
                          <td><button data-toggle="modal" data-id="1" data-target="#Feedback" class="btn btn-primary">View</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="./assets/scripts/main.js"></script>
    <!-- Modal for TA Hour Submission-->
    <div
      class="modal fade"
      id="modalTAHSub"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      style="display: none;"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Details</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="">
            <div class="card-body">
              <h5 class="card-title">Basic Information</h5>
              <ul class="list-group">
                <li class="list-group-item">
                  Emplyoyee Name: <?php echo $courses[$course]['eName']  ?>
                </li>
                <li class="list-group-item">Current Dal Student: <?php echo $courses[$course]['CurrStudent']  ?></li>
                <li class="list-group-item">ID#: <?php echo $courses[$course]['Id']  ?></li>
                <li class="list-group-item">Instructor: <?php echo $courses[$course]['iName']  ?></li>
                <li class="list-group-item">
                  Course ID &amp; CRN no: <?php echo $courses[$course]['CourseID']  ?> / <?php echo $courses[$course]['CRN']  ?>
                </li>
                <li class="list-group-item">Term: <?php echo $courses[$course]['Term']  ?></li>
                <li class="list-group-item">Year: <?php echo $courses[$course]['year']  ?></li>
              </ul>
            </div>

            <div class="card-body">
                    <?php
                      if($position == "TA")
                      {
                          echo '<h5 class="card-title">
                          Teaching Assistant Duties Form
                        </h5>
                        <h6 class="card-subtitle">
                          Article 17.1 – Dalhousie / CUPE 3912 Collective Agreement (^)
                        </h6>
                        <form class="" method="post" action="php-helpers/insert.php" >
                          <div class="form-row">
                            <div class="col-md-auto">
                              <div class="position-relative form-group">
                                <label for="exampleCustomSelect" class=""
                                  >Total Hours</label
                                ><select
                                  type="select"
                                  id="HourSub"
                                  name="tHours"
                                  class="custom-select"
                                >
                                  <option value="">Select</option>
                                  <option value="25">25</option>
                                  <option value="35">35</option>
                                  <option value="45">45</option>
                                  <option value="65">65</option>
                                  <option value="90">90</option>
                                  <option value="110">110</option>
                                  <option value="130">130</option>
                                  <option value="0">Other</option>
                                </select>
                              </div>
                              <div class="position-relative form-group 0 box">
                                <label for="examplePassword11" class=""
                                  >Note: Above TA assignment together with other TA
                                  assignments for other courses cannot exceed 130 hours
                                  per semester - as per (^)</label
                                ><input
                                  id="totalHours"
                                  placeholder="Enter total hours"
                                  type="text"
                                  class="form-control"
                                  name="otherTHours"
                                />
                              </div>
                        
                        <label for="examplePassword11">Note: The hours breakdown below must add up to the total hours selected above</label>
                        <div class="input-group">
                          <div class="input-group-prepend" style="width: 30%;">
                          
                            <span class="input-group-text" style="width: 100%;"
                              >In-Class Duties</span
                            >
                          </div>
                          <input
                            id="inclassDuties"
                            name="inclassDuties"
                            type="text"
                            class="form-control"
                            placeholder="Enter hours"
                          />
                        </div>
                        <br />
                        <div class="input-group">
                          <div class="input-group-prepend" style="width: 30%;">
                            <span class="input-group-text" style="width: 100%;"
                              >Office Duties</span
                            >
                          </div>
                          <input
                            id="officeDuties"
                            name="officeDuties"
                            type="text"
                            class="form-control"
                            placeholder="Enter hours"
                          />
                        </div>
                        <br />
                        <div class="input-group">
                          <div class="input-group-prepend" style="width: 30%;">
                            <span class="input-group-text" style="width: 100%;"
                              >Marking, Grading, Invigilating</span
                            >
                          </div>
                          <input
                            id="markingHours"
                            name="markingHours"
                            type="text"
                            class="form-control"
                            placeholder="Enter hours"
                          />
                        </div>
                        <br />
                        <div class="input-group">
                          <div class="input-group-prepend" style="width: 30%;">
                            <span class="input-group-text" style="width: 100%;"
                              >Others</span
                            >
                          </div>
                          <input
                            id="otherHours"
                            name="otherHours"
                            type="text"
                            class="form-control"
                            placeholder="Enter hours"
                          />
                        </div>
                        <br />
                      </div>
                    </div>
                    <div style="display:none" id="validated" class="alert alert-success" role="alert">
                      Validated
                    </div>
                    <button id="validate" type="button" onclick="checkTotalHours()" class="btn btn-primary" >
                Validate
              </button>';
              $page = "php-helpers/insert.php";
              $target = "_blank";
              echo '<input onsubmit="window.open('.$page.','.$target.')" style="visibility: hidden" id="hourSubmit" type="submit" name="hourSubmit" value="Submit" class="btn btn-success">';
                  }
                  else
                  {
                    $page = "php-helpers/insert.php";
                    $target = "_blank";
                    echo ' <h5 class="card-title">
                    Marker Form
                  </h5>
                  <h6 class="card-subtitle">
                    *Please note that the estimated # of hours is for budget
                    forecasting only and should not be interpreted as an employment
                    contract for a specific number of hours of work. Reporting hours
                    will be done through Timesheets to be submitted bi-weekly by
                    approver to timesheets@cs.dal.ca by due dates outlined in Marker
                    Timesheets. (^)
                  </h6>
                  <form class="" method="post" action="php-helpers/insert.php" >
                    <div class="form-row">
                      <div class="col-md-auto">
                        <div class="position-relative form-group 0 box">
                          <label for="examplePassword11">Enter total hours</label>
                          <input
                            id="totalHours"
                            type="text"
                            class="form-control"
                            name="tHours"
                          />
                        </div>

                    <input onsubmit="window.open('.$page.','.$target.')" type="submit" name="hourSubmit" value="Submit" class="btn btn-success">';
                  }
                    ?>


              <br />

				</input>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Modal for Marker Hour Submission-->
    <div
      class="modal fade"
      id="modalMKSub"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      style="display: none;"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Details</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card-body">
              <h5 class="card-title">Basic Information</h5>
              <ul class="list-group">
                <li class="list-group-item">
                  Emplyoyee Name: Abdullah X
                </li>
                <li class="list-group-item">Current Dal Student: Yes</li>
                <li class="list-group-item">ID# B00xxxxxx</li>
                <li class="list-group-item">Instructor: Andrew X</li>
                <li class="list-group-item">
                  Course ID &amp; CRN no: CSCI 8000 / 123456
                </li>
                <li class="list-group-item">Term: Summer</li>
                <li class="list-group-item">Year: 2020</li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">
                Marker Form
              </h5>
              <h6 class="card-subtitle">
                *Please note that the estimated # of hours is for budget
                forecasting only and should not be interpreted as an employment
                contract for a specific number of hours of work. Reporting hours
                will be done through Timesheets to be submitted bi-weekly by
                approver to timesheets@cs.dal.ca by due dates outlined in Marker
                Timesheets. (^)
              </h6>
              <form class="">
                <div class="form-row">
                  <div class="col-md-auto">
                    <div class="position-relative form-group">
                      <label for="examplePassword11" class=""
                        >Estimated # of marking hours</label
                      ><input
                        placeholder="Enter hours"
                        type="number"
                        class="form-control"
                      />
                    </div>
                  </div>
                </div>


              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">
              Submit
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="jvectormap-tip"></div>
  </body>
</html>
