<?php $pageTitle = "Applicant card"; include '../base-popup.php';?>

<?php startblock('popup-top');?>
<div class="notification notification-info d-print-none" role="notification">
  <i class="gel-icon-info gel-icon-lg" aria-hidden="true"></i>
  This applicant has been entered by Referred Candidate <a class="notification-link" href="#">View referral</a>
</div>
<section id="popup-top" class="bg-navy" role="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="text-white">Daniel Applicant</h2>
        </div>
        <div class="col-md-4 col-lg-2 mb-3 mb-sm-0">
          <fieldset data-toggle="tooltip" data-placement="bottom" data-original-title="Talent pool status">
            <legend class="sr-only">Segmented Control Small</legend>
            <div class="btn-group btn-group-toggle segmented-control">
              <label>
                <input type="radio" name="options-seg-sm" id="option1" autocomplete="off" checked="checked">
                <span class="btn btn-ctrl btn-sm">
                  Active
                </span>
              </label>
              <label>
                <input type="radio" name="options-seg-sm" id="option2" autocomplete="off">
                <span class="btn btn-ctrl btn-sm">
                  Inactive
                </span>
              </label>
            </div>
          </fieldset>
        </div>

        <div class="col-6 col-md-4 col-lg-2">
          <div class="btn-group d-print-none" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-sm btn-ctrl" onclick="javascript: window.print();"><i class="gel-icon-print"></i></button>
            <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-ctrl dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Actions
              </button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="#">Dropdown link</a>
                <a class="dropdown-item" href="#">Dropdown link</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6 col-md-4 col-lg-2">
          <fieldset data-toggle="tooltip" data-placement="bottom" data-original-title="Trays">
            <legend class="sr-only">3 trays</legend>
            <div class="tray tray-green tray-lg">
              <input type="radio" name="radio-b-l" id="radio-b-l-1" value="option-b-l">
              <label for="radio-b-l-1">
                <span class="sr-only">
                  Green</span>
              </label>
            </div>
            <div class="tray tray-orange tray-lg">
              <input type="radio" name="radio-b-l" id="radio-b-l-2" value="option-b-l">
              <label for="radio-b-l-2">
                <span class="sr-only">
                  Orange</span>
              </label>
            </div>
            <div class="tray tray-red tray-lg">
              <input type="radio" name="radio-b-l" id="radio-b-l-3" value="option-b-l">
              <label for="radio-b-l-3">
                <span class="sr-only">
                  Red</span>
              </label>
            </div>
          </fieldset>
        </div>
      </div>
      <div class="w-100 mt-4"></div>
      <dl class="row">
        <span class="col-6 col-md-4 col-lg-2">
          <dt>Gender</dt>
          <dd>Male</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt>Phone</dt>
          <dd>+61 4123 111 111</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-4">
          <dt>Address</dt>
          <dd>91 William Street, Melbourne, VIC, Australia</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt>Linked Employee</dt>
          <dd><a class="text-white" href="#"> Relink</a></dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt>Flags</dt>
          <dd></dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt>Number</dt>
          <dd>10923445</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt>Nationality</dt>
          <dd>Australia</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-4">
          <dt>Email</dt>
          <dd>daniel.applicant@company.com</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt>Orininal Source</dt>
          <dd>Seek</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt>Employment status</dt>
          <dd>Never employed or contracted</dd>
        </span>
      </dl>
    </div>
</section>
<?php endblock()?>

<?php startblock('page-tabs') ?>
<ul class="page-tabs nav mt-0 d-print-none" role="tablist">
  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#applications" role="applications" aria-controls="applications" aria-selected="true">Applications</a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#history" role="History" aria-controls="History" aria-selected="false">History</a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#crm" role="tab" aria-controls="CRM" aria-selected="false">CRM</a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#resume" role="tab" aria-controls="resume" aria-selected="false">Resume</a></li>
</ul>
<?php endblock() ?>

<?php startblock('page-body');?>

<div class="tab-content">
  <div class="tab-pane d-print-block show active" id="applications" role="tabpanel" aria-labelledby="applications-tab">
    <h3 class="d-none d-print-block">Applications</h3>
        <?php for ($x =1; $x <= 3; $x++) {?>
          <div class="card hover mb-4">
            <div class="row">
              <div class="mb-4 mb-lg-0 col-md-12 col-lg-6">
                <h5><a class="d-print-none" href="#"><i class="gel-icon-info-pointer"></i></a> International Consultant on Early Childhood Development</h5>
                <div class="row">
                    <span class="col-6 col-sm-3"><sup class="text-black-50">Job ID:</sup><br/> <span>942130</span></span>
                    <span class="col-6 col-sm-3"><sup class="text-black-50">Submit date:</sup> <br/><span>17 Nov 2017</span></span>
                    <span class="col-6 col-sm-3"><sup class="text-black-50">Recruiter:</sup> <br/><span>Daniel Wang</span></span>
                    <span class="col-6 col-sm-3"><sup class="text-black-50">Applied via:</sup> <br/><span>Linkedin</span></span>
                </div>
              </div>
              <div class="col-6 col-lg-2">
                <a href="#">Interviewed</a>
                <p>Status changed 12 May 2018</p>
              </div>
              <div class="col-6 col-lg-1">
                <a href="#">No offer</a>
              </div>
              <div class="col-6 col-lg-1">
                <i class="gel-icon-location"></i><i class="gel-icon-bullhorn"></i><i class="gel-icon-info"></i><i class="gel-icon-lock"></i>
              </div>
              <div class="col-6 col-lg-2 text-lg-right">
                <div class="dropdown d-inline-block d-print-none">
                    <button class="btn btn-ctrl btn-sm dropdown-toggle mr-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Actions
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        <?php } ?>

  </div>
  <div class="tab-pane d-print-block" id="history" role="tabpanel" aria-labelledby="history-tab">
    <h3 class="d-none d-print-block">History</h3>
    <div class="row">
      <div class="col-sm-3">
        <div class="form-group">
          <label for="group1">Jobs</label>
          <select class="form-control" id="group1">
            <option>Operations Manager</option>
            <option>Senior Project Manager</option>
          </select>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label for="group1">Item</label>
          <select class="form-control" id="group1">
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
            <option>Option 4</option>
            <option>Option 5</option>
          </select>
        </div>
      </div>
    </div>
    <ul class="timeline timeline-split mt-3 mb-3">
    <li class="timeline-item">
      <div class="timeline-info">
        <span>Saturday, 2 Dec 2017, 5:22am</span>
      </div>
      <div class="timeline-marker"></div>
      <div class="timeline-content">
        <h5 class="timeline-title">Line manager review 1</h5>
        <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
          mollis pretium. Pellentesque ut neque.</p>
      </div>
    </li>
    <li class="timeline-item">
      <div class="timeline-info">
        <p>Wednesday, 22 Nov 2017 9:33am</p>
        <span class="muted">Daniel Recruiter</span>
      </div>
      <div class="timeline-marker"></div>
      <div class="timeline-content">
        <h5 class="timeline-title">Status changed to 'HR shortlist'</h5>
        <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
          mollis pretium. Pellentesque ut neque.
        </p>
      </div>
    </li>
    <li class="timeline-item">
      <div class="timeline-info">
        <span>Monday, 20 Nov 2017, 9:53am</span>
      </div>
      <div class="timeline-marker"></div>
      <div class="timeline-content">
        <h5 class="timeline-title">Application submitted</h5>
        <p>Scoring breakdown: <br>
          0/20 points: 'No' for 'Are you a National of the country where this position is based?' <br>
          20/20 points: 'Yes' for 'Do you have a background or experience working with/in Emergency country context?' <br>
          20/20 points: 'Yes' for 'Do you possess any full-time, paid work experience outside your country of nationality (this can inc...' <br>
          12/20 points: 'I have a Bachelor’s / First Level University Degree' for 'Please indicate your highest completed university degree (i.e. degree in-hand):' <br>
          20/20 points: 'I have more than 15 years’ experience' for 'Please indicate your years of professional work experience relevant to the position applied for:' <br>
          ------------------ <br>
          72/100 total points (rounded)
        </p>
      </div>
    </li>
    <li class="timeline-item">
      <div class="timeline-info">
        <span>Monday, 20 Nov 2017, 9:50am</span>
      </div>
      <div class="timeline-marker"></div>
      <div class="timeline-content">
        <h5 class="timeline-title">Cover letter: Application Letter Dep REP Guine.pdf Size: 119kb</h5>
        <p><a class="btn btn-outline-primary btn-sm" href="#">View</a>  <a class="btn btn-outline-primary btn-sm"href="#">PDF</a>  <a class="btn btn-outline-primary btn-sm" href="#">Reprocess</a>
        </p>
      </div>
    </li>
  </ul>
  </div>
  <div class="tab-pane d-print-block" id="crm" role="tabpanel" aria-labelledby="CRM-tab">
    <h3 class="d-none d-print-block">CRM</h3>
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.
    Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa.
  </div>
  <div class="tab-pane d-print-block" id="resume" role="tabpanel" aria-labelledby="resume-tab">
    <h3 class="d-none d-print-block">Resume</h3>
    Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse
    potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam.
  </div>
</div>


<?php endblock()?>
