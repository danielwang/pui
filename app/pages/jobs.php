<?php $pageTitle = "My Jobs"; $parent = "hm"; include '../base-t1.php';?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<div class="row">
  <div class="col-md-6 col-lg-4">
    <h5>Visibility</h5>
    <fieldset>
      <legend class="sr-only">visibility</legend>
      <div class="btn-group btn-group-toggle segmented-control">
        <label>
          <input type="radio" name="options-v" id="option1" autocomplete="off" checked="checked">
          <span class="btn btn-ctrl">
            My jobs
          </span>
        </label>
        <label>
          <input type="radio" name="options-v" id="option2" autocomplete="off">
          <span class="btn btn-ctrl">
            Team jobs
          </span>
        </label>
        <label>
          <input type="radio" name="options-v" id="option3" autocomplete="off">
          <span class="btn btn-ctrl">
            All jobs
          </span>
        </label>
      </div>
    </fieldset>
  </div>
  <div class="col-md-6 col-lg-4">
    <h5 class="mt-2 mt-md-0">Status</h5>
    <fieldset>
      <legend class="sr-only">Status</legend>
      <div class="btn-group btn-group-toggle segmented-control">
        <label>
          <input type="radio" name="options-seg-status" id="option1" autocomplete="off" checked="checked">
          <span class="btn btn-ctrl">
            Current
          </span>
        </label>
        <label>
          <input type="radio" name="options-seg-status" id="option2" autocomplete="off">
          <span class="btn btn-ctrl">
            Archived
          </span>
        </label>
        <label>
          <input type="radio" name="options-seg-status" id="option3" autocomplete="off">
          <span class="btn btn-ctrl">
            All
          </span>
        </label>
      </div>
    </fieldset>
  </div>
  <div class="col-lg-4 d-flex justify-content-sm-end align-items-end mt-3">
      <span class="mb-2 mr-2">55 results</span>
      <button class="btn btn-ctrl" type="button" data-toggle="modal" data-target="#exampleModal"><i aria-hidden="true" class="gel-icon-settings"></i> Settings </button>
  </div>
</div>
<div class="table-responsive">
  <table class="table table-striped table-hover mt-3">
      <caption class="sr-only">List of jobs</caption>
      <thead class="thead-dark thead-sortable">
        <tr>
          <th scope="col"><a href="#" class="sort-up" aria-label="sorting by Job Title">Job Title</a></th>
          <th scope="col"><a href="#" aria-label="sorting by Job ID">Job ID</a></th>
          <th scope="col"><a href="#" aria-label="sorting by Recruiter">Recruiter</a>
          </th>
          <th scope="col"><a href="#" aria-label="sorting by Status">Status</a>
          </th>
          <th scope="col"><a href="#" aria-label="sorting by Opening date">Opening date </a></th>
          <th scope="col"><a href="#" aria-label="sorting by Closing date">Closing date </a></th>
          <th scope="col"><span class="sr-only">Action</span></th>
        </tr>
      </thead>
      <tbody>
        <?php for ($x =1; $x <= 10; $x++) {?>
        <tr>
          <th scope="row">International Consultant on Early Childhood Development</th>
          <td data-title="Job ID">
            <?php echo $x * 2  + 53302042 ?>
          </td>
          <td data-title="Recruiter">Peter Smith</td>
          <td data-title="Status">
            Offer Made
          </td>
          <td data-title="Opening date">Jul 14, 2017</td>
          <td data-title="Closing date">Jan 23, 2018</td>
          <td data-title="Actions" class="text-center">
            <a aria-label="View application" href="job-card"><i data-toggle="tooltip" data-placement="bottom" data-original-title="View application" class="gel-icon-lg gel-icon-view"></i></a>
          </td>
        </tr>
        <tr>
          <th scope="row">Retail Customer Service Officer </th>
          <td data-title="Job ID">
            <?php echo $x + 53302042 ?>
          </td>
          <td data-title="Recruiter"> Arnold Schwarzenegger </td>
          <td data-title="Status">
            Approved to advertise
          </td>
          <td data-title="Opening date">Jul 14, 2017</td>
          <td data-title="Closing date">Jan 23, 2018</td>
          <td data-title="Actions" class="text-center">
            <a aria-label="View application" href="job-card"><i data-toggle="tooltip" data-placement="bottom" data-original-title="View application"class="gel-icon-lg gel-icon-view"></i></a>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
</div>
<nav aria-label="Search results pages" class="row">
  <span class="text-muted text-sm mb-2 col-md-6 order-md-1 col-lg-2 col-xl-3 d-flex align-items-center">Showing 121 - 140 of 175 results</span>
  <ul class="order-md-3 order-lg-2 col-lg-6 col-xl-6 mb-2 pagination justify-content-center" role="pagination">
    <li class="page-item">
      <a class="page-link" href="#" data-toggle="tooltip" data-placement="left" data-original-title="First" ><i class="gel-icon-left-end gel-icon-xs"></i></a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" data-toggle="tooltip" data-placement="top" data-original-title="Previous" ><i class="gel-icon-angle-left gel-icon-xs"></i></a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">6
        <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">7</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">8</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" data-toggle="tooltip" data-placement="top" data-original-title="Next"><i class="gel-icon-angle-right gel-icon-xs"></i></a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" data-toggle="tooltip" data-placement="right" data-original-title="Last" ><i class="gel-icon-right-end gel-icon-xs"></i></a>
    </li>
  </ul>
  <div class="col-md-6 order-md-2 order-lg-3 col-lg-4 col-xl-3 justify-content-end d-flex align-items-center mb-2">
    <span class="text-muted text-sm mr-2">
      Page 6 of 8 | Jump to page
    </span>
    <div class="d-inline-flex input-group input-group-sm w-auto">
      <input style="width:45px" type="number" min="1" max="8" class="form-control border-0" aria-label="Jump to page">
      <div class="input-group-append">
        <button class="btn btn-light" type="button">Go</button>
      </div>
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Settings</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="gel-icon-close gel-icon-lg"></span>
        </button>
      </div>
      <div class="modal-body">
        <p class="lead">Select the columns you wish to add/remove</p>
        <form>
          <div class="form-group">
            <label for="group1">Columns</label>
            <div class="d-flex flex-wrap">
                <?php $c=1; for ($i =1; $i <= 15; $i++) {?>
                  <div class="w-50">
                    <div class="checkbox checkbox-default">
                      <input type="checkbox" checked id="<?php echo $c . '-' .$i ?>">
                      <label for="<?php echo $c . '-' . $i ?>">
                        Column <?php echo $c . '-' . $i ?>
                      </label>
                    </div>
                  </div>
                <?php } ?>
            </div>
          </div>
          <div class="form-group">
          <label for="who1">Number of rows on the page</label>
          <div>
            <div class="radio radio-default radio-inline">
              <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
              <label for="inlineRadio1">
                20
              </label>
            </div>
            <div class="radio radio-default radio-inline">
              <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
              <label for="inlineRadio2">
                50
              </label>
            </div>
            <div class="radio radio-default radio-inline">
              <input type="radio" id="inlineRadio3" value="option3" name="radioInline">
              <label for="inlineRadio3">
                100
              </label>
            </div>
          </div>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary mr-auto" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Apply</button>
      </div>
    </div>
  </div>
</div>

<?php endblock() ?>
