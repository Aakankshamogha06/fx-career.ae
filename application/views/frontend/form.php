<style>
  .radial-progress {
    margin: 25px;
    width: 120px;
    height: 120px;
    position: relative;
    background-color: #d7d7d7;
    border-radius: 50%;
  }

  @media (max-width: 480px) {
    .radial-progress {
      width: 85px;
      height: 85px;
    }
  }

  .radial-progress .circle .mask,
  .radial-progress .circle .fill,
  .radial-progress .circle .shadow {
    width: 120px;
    height: 120px;
    position: absolute;
    border-radius: 50%;
  }

  @media (max-width: 480px) {

    .radial-progress .circle .mask,
    .radial-progress .circle .fill,
    .radial-progress .circle .shadow {
      width: 85px;
      height: 85px;
    }
  }

  .radial-progress .circle .mask,
  .radial-progress .circle .fill {
    -webkit-backface-visibility: hidden;
    transition: -webkit-transform 1s;
    transition: -ms-transform 1s;
    transition: transform 1s;
  }

  .radial-progress .circle .mask.reanimate,
  .radial-progress .circle .fill.reanimate {
    transition: -webkit-transform 0s;
    transition: -ms-transform 0s;
    transition: transform 0s;
  }

  .radial-progress .circle .mask.reset,
  .radial-progress .circle .fill.reset {
    -webkit-transform: rotate(0deg) !important;
    -ms-transform: rotate(0deg) !important;
    transform: rotate(0deg) !important;
  }

  .radial-progress .circle .mask {
    clip: rect(0px, 120px, 120px, 60px);
  }

  @media (max-width: 480px) {
    .radial-progress .circle .mask {
      clip: rect(0px, 85px, 85px, 42.5px);
    }
  }

  .radial-progress .circle .mask .fill {
    clip: rect(0px, 60px, 120px, 0px);
    background-color: var(--it-theme-1);
  }

  @media (max-width: 480px) {
    .radial-progress .circle .mask .fill {
      clip: rect(0px, 42.5px, 85px, 0px);
    }
  }

  .radial-progress .inset {
    width: 100px !important;
    height: 100px !important;
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -50px 0 0 -50px !important;
    background-color: #fbfbfb;
    border-radius: 50%;
    text-align: center;
    line-height: 100px;
  }

  @media (max-width: 480px) {
    .radial-progress .inset {
      width: 66px !important;
      height: 66px !important;
      margin: -33px 0 0 -33px !important;
      line-height: 90px;
    }
  }

  .radial-progress .little {
    font-size: 22px;
    color: #d7d7d7;
  }

  @media (max-width: 480px) {
    .radial-progress .little {
      font-size: 12px;
    }
  }

  .radial-progress .big {
    font-size: 37px;
  }

  @media (max-width: 480px) {
    .radial-progress .big {
      font-size: 27px;
    }
  }

  :focus-visible {
    outline: hsl(var(--light-blue-900)) auto 1px;
    outline-offset: 0;
  }

  .visually-hidden {
    border: 0;
    clip: rect(1px, 1px, 1px, 1px);
    clip-path: inset(50%);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute !important;
    white-space: nowrap;
    /* 1 */
    width: 1px;
  }

  .it-btn:hover {
    background-color: #000;
    color: #fff;
  }


  button:active {
    transform: translateY(1px);
  }

  button:hover,
  button:focus {
    background-color: hsl(var(--light-blue-900));
    color: hsl(var(--white));
  }

  button:focus-visible {
    outline-offset: 4px;
  }

  button.disabled,
  button:disabled {
    background-color: hsl(var(--gray-900));
  }

  @media only screen and (min-width: 992px) {
    button {
      display: inline-block;
      vertical-align: top;
      width: auto;
    }
  }

  /* --- Simple Buttons --- */

  .button--simple,
  .button--simple:active,
  .button--simple:visited {
    background-color: transparent;
    color: hsl(var(--blue-900));
    text-shadow: none;
  }

  .button--simple:hover,
  .button--simple:focus {
    background-color: transparent;
    color: hsl(var(--light-blue-900));
  }

  .progress-form__tabs {
    column-gap: 20PX;
  }


  .it-contact__wrap {
    padding: 75px 50px;
  }

  .progress-form__tabs-item {
    --button-background-color: transparent;
    --button-border-width: 5px;
    --button-border-style: solid;
    --button-border-color: #DDD;
    --button-border: var(--button-border-width) var(--button-border-style) var(--button-border-color);
    --button-border-radius: 0;
    --button-height: 1.4;
    --button-text-align: left;
    --button-text-color: hsl(var(--blue-900));
    --button-text-font-size: 1.1rem;
    --button-text-letter-spacing: 0.025em;
    --button-text-shadow: none;
    background-color: var(--button-background-color);
    border: 0;
    border-top: var(--button-border);
    border-radius: var(--button-border-radius);
    color: var(--button-text-color);
    display: none;
    font-size: var(--button-text-font-size);
    letter-spacing: var(--button-text-letter-spacing);
    line-height: var(--button-height);
    position: relative;
    text-align: var(--button-text-align);
    text-shadow: var(--button-text-shadow);
    transition: color 0.2s ease-in-out;
    white-space: normal;
    font-weight: 600;
  }

  .progress-form__tabs-item:active {
    transform: none;
  }

  .progress-form__tabs-item:hover,
  .progress-form__tabs-item:focus {
    background-color: inherit;
    color: inherit;
  }

  .progress-form__tabs-item::before {
    background-color: var(--it-theme-1);
    content: "";
    height: 5px;
    left: 0;
    position: absolute;
    top: -5px;
    transition: width 0.2s ease-in-out;
    width: 0;
  }

  .progress-form__tabs-item>.step {
    color: #000;
    font-size: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    transition: color 0.2s ease-in-out;
  }

  .progress-form__tabs-item {
    width: 100%;
  }

  .form__error-text {
    color: #ee3f3f;
  }

  .form-select:focus {
    border-color: var(--it-theme-1);
    outline: 0;
    box-shadow: none;
  }

  .mtt-5 {
    margin-top: 3rem;
  }

  select {
    /* background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'%3E%3Cpath fill='hsl(0, 0%, 13%)' d='M224 416c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 338.8l169.4-169.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-192 192C240.4 412.9 232.2 416 224 416z'/%3E%3C/svg%3E'");
    background-repeat: no-repeat;
    background-position: right 2rem center;
    background-size: 0.7em auto; */
    padding: 10px 20px !important;
    border: none;
    border-radius: 5px;
    display: block;
    background-position: right 1.75rem center !important;
  }

  /* --- Current Step --- */

  .progress-form__tabs-item[aria-selected="true"] {
    display: block;
  }

  .progress-form__tabs-item[aria-selected="true"]::before {
    width: 50%;
  }


  /* --- Disabled Step --- */


  .progress-form__tabs-item[aria-disabled="true"] {
    --button-background-color: transparent;
    --button-text-color: hsl(var(--blue-100));
    background-color: var(--button-background-color);
    color: var(--button-text-color);

  }

  /* --- Completed Step --- */

  .progress-form__tabs-item[data-complete="true"]::before {
    width: 100%;
  }

  .progress-form__tabs-item[data-complete="true"]>.step {
    color: var(--it-theme-1);
  }

  .progress-form input,
  textarea {
    border-radius: 5px;
    border: 1px solid #ddd;
  }

  .progress-form__tabs-item[aria-selected="true"]>.step {
    color: var(--it-theme-1);
  }

  .progress-form__tabs-item[aria-disabled="true"] {
    color: #ddd;
  }

  .progress-form label {
    font-weight: 600;
  }

  legend {
    font-size: 17px;
    font-weight: 600;
  }

  label.form__choice-wrapper {
    display: flex;
    align-items: center;
  }

  .step-form {
    box-shadow: 0px 0px 10px rgb(0 0 0/16%);
    border-radius: 1rem;
    background: #fff;
  }

  .radio-input {

    background: #fff;
    padding: 10px 10px;
    border-radius: 4px;
    box-shadow: 0px 0px 10px rgb(0 0 0 / 20%);
    line-height: 1.2;
  }

  input.zoom-in:active,
  input.zoom-in:focus {
    -webkit-animation: zoom-in 0.45s ease-out;
    -moz-animation: zoom-in 0.45s ease-out;
    animation: zoom-in 0.45s ease-out;
  }

  @-webkit-keyframes zoom-in {
    0% {
      -webkit-transform: scale(1);
    }

    66% {
      -webkit-transform: scale(0.9);
    }

    100% {
      -webkit-transform: scale(1);
    }
  }

  @-moz-keyframes zoom-in {
    0% {
      -moz-transform: scale(1);
    }

    66% {
      -moz-transform: scale(0.9);
    }

    100% {
      -moz-transform: scale(1);
    }
  }

  @keyframes zoom-in {
    0% {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1);
    }

    66% {
      -webkit-transform: scale(0.9);
      -moz-transform: scale(0.9);
      -ms-transform: scale(0.9);
      -o-transform: scale(0.9);
      transform: scale(0.9);
    }

    100% {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1);
    }
  }

  @media only screen and (min-width: 992px) {
    .progress-form__tabs-item {
      display: block;

    }
  }

  @media(min-width:992px) and (max-width:1199.98px) {
    .step-form {
      padding: 30px 30px;
    }

    .progress-form__tabs-item {
      font-size: 15px;
    }

    .progress-form__tabs-item>.step {

      font-size: 0.9rem;
    }
  }
</style>
<main>

  <!-- breadcrumb-area-start -->
  <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="<?= base_url() ?>public/web/assets/img/breadcrumb/breadcrumb.jpg">
    <div class="container">
      <div class="row ">
        <div class="col-md-12">
          <div class="it-breadcrumb-content z-index-3 text-center">
            <div class="it-breadcrumb-title-box">
              <h3 class="it-breadcrumb-title">Inquiry Form</h3>
            </div>
            <div class="it-breadcrumb-list-wrap">
              <div class="it-breadcrumb-list">
                <span><a href="index.html">home</a></span>
                <span class="dvdr">//</span>
                <span>Inquiry Form</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- breadcrumb-area-end -->

  <!-- contact-area-start -->
  <div class="it-contact__area pt-120 pb-120 ">
    <div class="container">
      <div class="it-contact__wrap fix z-index-3 p-relative step-form" style="background-image:url('<?= base_url() ?>public/web/assets/img/breadcrumb/step-form.jpg')">

        <div class="row align-items-end">

          <div class="mx-auto container">

            <!-- Progress Form -->
            <form id="progress-form" class="progress-form" action="<?php echo site_url('website/submit'); ?>" method="post" lang="en" novalidate>


              <!-- Step Navigation -->
              <div class="d-flex align-items-start mb-3 sm:mb-5 progress-form__tabs" role="tablist">
                <button id="progress-form__tab-1" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-1" aria-selected="true">
                  <span class="d-block step" aria-hidden="true">Step 1 </span>
                  Details
                </button>
                <button id="progress-form__tab-2" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-2" aria-selected="false" tabindex="-1" aria-disabled="true">
                  <span class="d-block step" aria-hidden="true">Step 2</span>
                  Topics
                </button>
                <button id="progress-form__tab-3" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-3" aria-selected="false" tabindex="-1" aria-disabled="true">
                  <span class="d-block step" aria-hidden="true">Step 3 </span>
                  Refference
                </button>
                <button id="progress-form__tab-4" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-4" aria-selected="false" tabindex="-1" aria-disabled="true">
                  <span class="d-block step" aria-hidden="true">Step 4 </span>
                  Assasment Test
                </button>
                <button id="progress-form__tab-5" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-5" aria-selected="false" tabindex="-1" aria-disabled="true">
                  <span class="d-block step" aria-hidden="true">Step 5 </span>
                  Assasment Result
                </button>
              </div>
              <!-- / End Step Navigation -->

              <!-- Step 1 -->
              <section id="progress-form__panel-1" role="tabpanel" aria-labelledby="progress-form__tab-1" tabindex="0" class="mtt-5">
                <div class="row">
                  <div class="mt-3 col-md-6  form__field">

                    <label for="first_name">
                      First name
                      <span data-required="true" aria-hidden="true"></span>
                    </label>
                    <input id="first_name" type="text" name="first_name" autocomplete="given-name" required class="zoom-in">
                  </div>

                  <div class="mt-3 col-md-6 form__field">
                    <label for="last_name">
                      Last name
                      <span data-required="true" aria-hidden="true"></span>
                    </label>
                    <input id="last_name" type="text" name="last_name" autocomplete="family-name" required class="zoom-in">
                  </div>
                  <div class="mt-3 col-md-6 form__field">
                    <label for="email_address">
                      Email
                      <span data-required="true" aria-hidden="true"></span>
                    </label>
                    <input id="email_address" type="email" name="email_address" autocomplete="email" inputmode="email" required class="zoom-in">
                  </div>

                  <div class="mt-3  col-md-6 form__field">
                    <label for="phone_number">
                      Phone number*
                    </label>
                    <input id="phone_number" type="tel" name="phone_number" autocomplete="tel" inputmode="tel" required class="zoom-in">
                  </div>
                </div>

                <div class="mt-3 form__field">
                  <label for="phone_number">
                    Address*
                  </label>
                  <input id="address" type="text" name="address" autocomplete="address" required class="zoom-in">
                </div>
                <div class="d-flex align-items-center mtt-5">
                  <button type="button" class="it-btn " data-action="next">
                    Continue
                  </button>
                </div>
              </section>
              <!-- / End Step 1 -->

              <!-- Step 2 -->
              <section id="progress-form__panel-2" role="tabpanel" aria-labelledby="progress-form__tab-2" tabindex="0" hidden class="mtt-5">
                <div class="row">
                  <div class="col-md-6 " style="margin-top: 3rem;">
                    <div class="mt-3 form__field">
                      <label for="address-state">
                        Preferred Topic:
                        <span data-required="true" aria-hidden="true"></span>
                      </label><br>
                      <?php
                      $preffered_topic_fetch_data = $this->Form_model->preffered_topic_fetch();
                      foreach ($preffered_topic_fetch_data as $data) { ?>
                        <input type="checkbox" id="product_purchase" name="product_purchase" value="<?php echo $data['id']; ?>">
                        <label for="<?php echo $data['id']; ?>"><?php echo $data['topic_name']; ?></label>

                      <?php } ?>

                      </select>

                    </div>
                  </div>
                  <div class="col-md-6 " style="margin-top: 3rem;">
                    <div class="mt-3 form__field">
                      <label for="address-state">
                        Preferred Timings:
                        <span data-required="true" aria-hidden="true"></span>
                      </label>
                      <select id="address_state" name="address_state" autocomplete="shipping address-level1" class="form-select" required>
                        <option value="" disabled selected>Please select</option>

                        <?php
                        $preffered_time_fetch_data = $this->Form_model->preffered_time_fetch();
                        foreach ($preffered_time_fetch_data as $data) { ?>
                          <option value="<?php echo $data['id']; ?>"><?php echo $data['time_slot']; ?></option>
                        <?php } ?>

                      </select>

                    </div>
                  </div>
                </div>
                <div class="d-flex  gap-4  mtt-5">
                  <button type="button" class="it-btn black-bg " data-action="prev">
                    Back
                  </button>
                  <button type="button" class="it-btn  " data-action="next">
                    Continue
                  </button>
                </div>
              </section>
              <!-- / End Step 2 -->

              <!-- Step 3 -->
              <section id="progress-form__panel-3" role="tabpanel" aria-labelledby="progress-form__tab-3" tabindex="0" hidden class="mtt-5">
                <div class="mt-3 mb-4 form__field">
                  <label for="product-satisfaction">
                    How do you know about fxcareers?
                    <span data-required="true" aria-hidden="true"></span>
                  </label>
                  <select id="product-satisfaction" name="product_satisfaction" class="form-select " required>
                    <option value="" disabled selected>Please select</option>
                    <option value="Google">Google</option>
                    <option value="Sign Board">Sign Board</option>
                    <option value="Instagram">Instagram</option>
                    <option value="Facebook">Facebook</option>
                    <option value="Newspaper">Newspaper</option>
                  </select>
                </div>

                <div class="row mt-4">
                  <label for="product-feedback">
                    Any Refference
                  </label>
                  <div class="mt-3 col-md-6  form__field">
                    <label for="referal_first_name">
                      First name
                      <span data-required="true" aria-hidden="true"></span>
                    </label>
                    <input id="referal_first_name" type="text" name="referal_first_name" autocomplete="given-name" class="zoom-in">
                  </div>

                  <div class="mt-3 col-md-6 form__field">
                    <label for="referal_last_name">
                      Last name
                      <span data-required="true" aria-hidden="true"></span>
                    </label>
                    <input id="referal_last_name" type="text" name="referal_last_name" autocomplete="family-name" class="zoom-in">
                  </div>
                  <div class="mt-3 col-md-6 form__field">
                    <label for="referal_email_address">
                      Email
                      <span data-required="true" aria-hidden="true"></span>
                    </label>
                    <input id="referal_email_address" type="email" name="referal_email_address" autocomplete="email" inputmode="email" class="zoom-in">
                  </div>

                  <div class="mt-3  col-md-6 form__field">
                    <label for="referal_phone_number">
                      Phone number*
                    </label>
                    <input id="referal_phone_number" type="tel" name="referal_phone_number" autocomplete="tel" inputmode="tel" class="zoom-in">
                  </div>
                </div>

                <div class="mt-3 form__field">
                  <label for="product-feedback">
                    Message
                  </label>
                  <textarea id="product-feedback" name="product_feedback" rows="5" class="py-2" class="zoom-in"></textarea>
                </div>

                <div class="d-flex gap-4  mtt-5">
                  <button type="button" class="it-btn black-bg " data-action="prev">
                    Back
                  </button>
                  <button type="button" class="it-btn  " data-action="next">
                    Continue
                  </button>
                </div>
              </section>
              <!-- / End Step 3 -->
              <!-- Step 4 -->
              <section id="progress-form__panel-4" role="tabpanel" aria-labelledby="progress-form__tab-4" tabindex="0" hidden class="mtt-5">

                <?php
                $c = 1;
                foreach ($questions as $question) : ?>
                  <div class="mb-4">
                    <p class="fw-semibold"><?php echo $c++; ?> - <?php echo $question->question; ?></p>
                    <div class="row">
                      <div class="col-lg-7 col-md-12">
                        <div class="row">
                          <div class="col-lg-6">
                            <?php if ($question->answer1 != '') : ?>
                              <div class="d-flex align-items-center radio-input"><input type="radio" name="question_<?php echo $question->id; ?>" value="A"><?php echo $question->answer1; ?></div><br>
                            <?php endif; ?>
                          </div>
                          <div class="col-lg-6">
                            <?php if ($question->answer2 != '') : ?>
                              <div class="d-flex align-items-center radio-input">
                                <input type="radio" name="question_<?php echo $question->id; ?>" value="B"><?php echo $question->answer2; ?>
                              </div><br>
                            <?php endif; ?>
                          </div>
                          <div class="col-lg-6">
                            <?php if ($question->answer3 != '') : ?>
                              <div class="d-flex align-items-center radio-input" for="Quesion3">
                                <input type="radio" name="question_<?php echo $question->id; ?>" value="C"><?php echo $question->answer3; ?>
                              </div><br>
                            <?php endif; ?>
                          </div>
                          <div class="col-lg-6">
                            <?php if ($question->answer4 != '') : ?>
                              <div class="d-flex align-items-center radio-input">
                                <input type="radio" name="question_<?php echo $question->id; ?>" value="D"><?php echo $question->answer4; ?>
                              </div>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                <?php endforeach; ?>

                <div class="d-flex gap-4  mtt-5">
                  <button type="button" class="it-btn black-bg" data-action="prev">
                    Back
                  </button>
                  <button type="button" class="it-btn " data-action="next">
                    Continue
                  </button>
                </div>
              </section>

              <!-- / End Step 4 -->
              <!-- Step 5 -->
              <section id="progress-form__panel-5" role="tabpanel" aria-labelledby="progress-form__tab-5" tabindex="0" class="py-5" hidden>
                <div class="mt-3 form__field text-center ">

                  <h2 class="mb-4">Your Result</h2>


                  <div class="radial-progress m-auto" data-score="4">
                    <div class="circle">
                      <div class="mask full">
                        <div class="fill"></div>
                      </div>
                      <div class="mask half">
                        <div class="fill"></div>
                        <div class="fill fix"></div>
                      </div>
                    </div>
                    <div class="inset"><span class='big'><?php echo $score; ?></span> <span class='little'>/ 5</span></div>
                  </div>
                </div>

                <div class="d-flex gap-4  mtt-5 justify-content-center">
                  <button type="button" class="it-btn black-bg " data-action="prev">
                    Back
                  </button>
                  <button type="button" class="it-btn" data-action="next">
                    Continue
                  </button>
                </div>

              </section>
              <!-- Thank You -->
              <section id="progress-form__thank-you" hidden>
                <p>Thank you for your submission!</p>
                <p>We appreciate you contacting us. One of our team members will get back to you very&nbsp;soon.</p>
              </section>
              <!-- / End Step 5 -->
              <!-- / End Thank You -->

            </form>
            <!-- / End Progress Form -->

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- contact-area-end -->
</main>
<!-- footer Include  -->