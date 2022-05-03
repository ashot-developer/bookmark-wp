<?php
get_header();
?>
<main class="main">
  <section class="bookmark__manager">
    <div class="bookmark__manager__container">
      <div class="bookmark__manager--body">
        <h1>A Simple Bookmark Manager</h1>
        <p> A clean and simple interface to organize your favourite websites. Open a new
          browser tab and see your sites load instantly. Try it for free.</p>
        <div class="bookmark__manager--btns">
          <a href="#" class="btn btn__blue">Get it on Chrome</a>
          <a href="#" class="btn btn__gray">Get it on Firefox</a>
        </div>
      </div>
      <div class="bookmark__manager--img">
        <img src="<?= get_template_directory_uri() ?>/assets/img/illustration-hero.svg" alt="Bookmark Manager">
      </div>
    </div>
  </section>
  <section class="features" id="features">
    <div class="features__container">
      <div class="sections__titles">
        <h3>Features</h3>
        <p>Our aim is to make it quick and easy for you to access your favourite websites. Your bookmarks sync between your devices so you can access them on the go.</p>
      </div>

      <div class="features__tabs">
        <div class="tabs-header">
          <ul>
            <li class="tab-item"><a href="#simple" data-tab="0" class="active__tab">
                Simple Bookmarking
              </a></li>
            <li class="tab-item"><a href="#speedy" data-tab="1">
                Speedy Searching
              </a></li>
            <li class="tab-item"><a href="#eazy" data-tab="2">
                Easy Sharing
              </a></li>
          </ul>
          <div class="tab-indicator"></div>
        </div>
        <div class="tabs-body">
          <div id="simple" class="tab-content active">
            <div class="features__img">
              <img src="<?= get_template_directory_uri() ?>/assets/img/illustration-features-tab-1.svg" alt="Features Tab 1">
            </div>
            <div class="features__body">
              <h3>Bookmark in one click</h3>
              <p>Organize your bookmarks however you like. Our simple drag-and-drop interface
                gives you complete control over how you manage your favourite sites.</p>
              <a href="#" class="btn btn__blue">More Info</a>
            </div>
          </div>
          <div id="speedy" class="tab-content">
            <div class="features__img">
              <img src="<?= get_template_directory_uri() ?>/assets/img/illustration-features-tab-2.svg" alt="Features Tab 1">
            </div>
            <div class="features__body">
              <h3>Bookmark in one click</h3>
              <p>Our powerful search feature will help you find saved sites in no time at all.
                No need to trawl through all of your bookmarks.</p>
              <a href="#" class="btn btn__blue">More Info</a>
            </div>
          </div>
          <div id="eazy" class="tab-content">
            <div class="features__img">
              <img src="<?= get_template_directory_uri() ?>/assets/img/illustration-features-tab-3.svg" alt="Features Tab 1">
            </div>
            <div class="features__body">
              <h3>Share your bookmarks</h3>
              <p>Easily share your bookmarks and collections with others. Create a shareable
                link that you can send at the click of a button.</p>
              <a href="#" class="btn btn__blue">More Info</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="extension" id="pricing">
    <div class="extension__container">
      <div class="sections__titles">
        <h3>Download the extension</h3>
        <p>We’ve got more browsers in the pipeline. Please do let us know if you’ve got a favourite you’d like us to prioritize.</p>
      </div>
      <div class="extension__row">
        <?php
        $extensions = get_field('extension', 'option');
        if ($extensions) :
          foreach ($extensions as $extension) :
        ?>
            <div class="extension__box">
              <div class="extension__box--header">
                <img src="<?= $extension['extension_image']["sizes"]["thumbnail"] ?>" alt="Logo chrome">
                <h4><?= $extension['extension_title'] ?></h4>
                <span><?= $extension['extension_descrription'] ?></span>
              </div>
              <div class="extension__box--footer">
                <a href="<?= $extension['download_link'] ?>" class="btn btn__blue">
                  <?= $extension['download_text'] ?>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <section class="faq">
    <div class="faq__container">
      <div class="sections__titles">
        <h3>Frequently Asked Questions</h3>
        <p>Here are some of our FAQs. If you have any other questions you’d like answered please feel free to email us.</p>
      </div>

      <div class="faq__row">
        <ul class="faq__row--list">
          <?php
          $faqs = get_field('faq', 'option');
          if ($faqs) :
            foreach ($faqs as $index => $faq) :
          ?>
              <li>
                <div class="faq__header" data-index="<?= $index + 1 ?>">
                  <h5><?= $faq['question'] ?></h5>
                  <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq__body">
                  <p><?= $faq['answer'] ?></p>
                </div>
              </li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
        <div class="faq__btn">
          <a href="#" class="btn btn__blue more__faq">
            More Info
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="contact__us" id="contact">
    <div class="contact__us__container">
      <span class="members__count">35,000+ already joined</span>
      <div class="contact__us--form">
        <h3>Stay up-to-date with what we’re doing</h3>
        <form action="#" method="post">
          <label for="">
            <input type="text" name="email" placeholder="Enter your email address">
            <span class="error__message">Whoops, make sure it's an email</span>
          </label>
          <button class="btn btn__red" name="submit" type="submit">Contact Us</button>
        </form>
      </div>
    </div>
  </section>
</main>

<?php

get_footer();

?>