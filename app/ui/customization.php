<?php $pageTitle = "Customization"; $hasSubPage = false;include '../base-ui.php';?>

<?php emptyblock('page-tagline');?>

<?php startblock('page-body');?>
<div class="row mb-5">
  <div class="col-sm-2 col-lg-1">
    <h1 class="text-muted text-sm-right">Why</h1>
  </div>
  <div class="col-sm-8 col-lg-7">
    <p class="lead">We support HTML in some cases, but with limited stylings. Because the new design going forward must meet our key criteria: Accessibility, Mobile responsive, Scalability, Consistency, Maintainability and Aesthetics.</p>
    <p class="lead">Here are some new rules we have created along with the building of new design framework.</p>
  </div>
</div>
<!-- ****************  Do's **************** -->
<div class="row mb-5">
  <div class="col-md-6">
    <section class="bg-white p-5 rounded">
      <h1 class="text-success mb-5">Do's</h1>
      <ul class="timeline">
        <li class="timeline-item">
          <div class="timeline-marker"></div>
          <div class="timeline-content">
            <h4 class="timeline-title">Native HTML tags, such as h1, a, p, strong etc</h4>
            <p>HTML gives meaning to content so that browsers and devices can then give that meaning to a user.</p>
            <ul><li>If it's a heading use a heading.</li></ul>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-marker"></div>
          <div class="timeline-content">
            <h4 class="timeline-title">Leverage GEL utility classes</h4>
            <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
              mollis pretium. Pellentesque ut neque.
            </p>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-marker"></div>
          <div class="timeline-content">
            <h4 class="timeline-title">Use GEL font icons</h4>
            <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
              mollis pretium. Pellentesque ut neque.
            </p>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-marker"></div>
          <div class="timeline-content">
            <h4 class="timeline-title">Use GEL colours</h4>
            <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
              mollis pretium. Pellentesque ut neque.
            </p>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-marker"></div>
          <div class="timeline-content">
            <h4 class="timeline-title">Write good alt text for your images</h4>
            <p>Describe all of the elements that explain what’s happening in the image, rather than just setting the alt text to be something like, “photograph"
            </p>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-marker"></div>
          <div class="timeline-content">
            <h4 class="timeline-title">Make links descriptive</h4>
            <p>Assistive technology is able to find all links on a page and present them in various forms, but these links are rather useless if it’s a long list of links that are just the text “click here.”
            </p>
          </div>
        </li>
      </ul>
    </section>
  </div>

  <div class="col-md-6">
    <!-- **************** Don'ts **************** -->
    <section class="bg-white p-5 rounded">

        <h1 class="text-danger mb-5">Don'ts</h1>
        <ul class="timeline bad">
          <li class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <h4 class="timeline-title">No Javascript injection</h4>
              <p>Changing the product interaction and behavior is forbidden. Don't try injecting any Javascript in the Header or Footer into the system.</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <h4 class="timeline-title">No inline styles</h4>
              <p>text-danger  (To be documented in all utility classes in one place)
              </p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <h4 class="timeline-title">No stretching images</h4>
              <p>When uploading the images from RTE, don't hard code any width or height at the same time to stretch image.
              </p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <h4 class="timeline-title">No random icons from internet</h4>
              <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
                mollis pretium. Pellentesque ut neque.
              </p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <h4 class="timeline-title">No CSS hacks applied </h4>
              <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
                mollis pretium. Pellentesque ut neque.
              </p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <h4 class="timeline-title">No background image/logo </h4>
              <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
                mollis pretium. Pellentesque ut neque.
              </p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <h4 class="timeline-title">Override a language item by HTML</h4>
              <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
                mollis pretium. Pellentesque ut neque.
              </p>
            </div>
          </li>
        </ul>
    </section>
  </div>
</div>

<?php endblock()?>
