<?php
  $page_title = "Contact Us";
  $meta_discription = "";
  $meta_key = "uppi online academy, IIT-JEE online academy, NEET online academy, online academy, chemistry, physics, maths, biology";

  include('../private/config/config.php');
  include('../private/required/public/header.public.php');

?>


<div class="body-container">
        <main>

            <div class="wrap-contact-page">
                <section class="section-contact">
                  <div class="contact-detail">
                    <div class="contact-phone">
                      <ul class="contact-wrap">
                        <li class="contact__list">
                          <i class="fa fa-phone contact__icon"></i>
                        </li>
                        <li class="contact__list">
                          <span class="contact-text">call us</span>
                        </li>
                        <li class="contact__list">
                          <a href="" class="contact__link">+91 953-874-4550 </a>
                        </li>
                      </ul>
                    </div>
                    <div class="contact-address">
                      <ul class="contact-wrap">
                        <li class="contact__list">
                          <i class="fa fa-map contact__icon"></i>
                        </li>
                        <li class="contact__list">
                          <span class="contact-text">address</span>
                        </li>
                        <li class="contact__list">
                          <address></address>
                        </li>
                      </ul>
                    </div>
                    <div class="contact-email">
                      <ul class="contact-wrap">
                        <li class="contact__list">
                          <i class="fa fa-envelope contact__icon"></i>
                        </li>
                        <li class="contact__list">
                          <span class="contact-text">E-mail</span>
                        </li>
                        <li class="contact__list">
                          <a href="" class="contact__link"
                            >uppionlineacademy@gmail.com</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </section>
    
                <section class="section-form">
                  <div class="contact-location">
                    <header class="contact-heading">find your location</header>
                    <div class="location__map">
                      <iframe
                        class="map-iframe"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d972.2940472856521!2d77.59825112653515!3d12.89638969090531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae153acf0659c5%3A0x584bc0affac2c55f!2sAppollo%20Hospital%20IIB%20M!5e0!3m2!1sen!2sin!4v1591250360479!5m2!1sen!2sin"
                        frameborder="0"
                        style="border: 0;"
                        allowfullscreen=""
                        aria-hidden="false"
                        tabindex="0"
                      ></iframe>
                    </div>
                  </div>
                  <div class="contact-query">
                    <header class="contact-heading">
                      if you have any query please leave a message below
                    </header>
                    <form action="" onsubmit="return validation()">
                      <div class="contact__form">
                        <div class="form__top">
                          <div class="form__row">
                            <label for="name">name</label>
                            <input
                              type="text"
                              id="name"
                              name="name"
                              value=""
                              placeholder="your name"
                            />
                          </div>
    
                          <div class="form__row">
                            <label for="email">email</label>
                            <input
                              type="email"
                              id="email"
                              name="email"
                              value=""
                              placeholder="your email "
                            />
                          </div>
    
                          <div class="form__row">
                            <label for="subject">subject</label>
                            <input
                              type="text"
                              id="subject"
                              name="subject"
                              value=""
                              placeholder="subject"
                            />
                          </div>
    
                          <div class="form__row">
                            <label for="telephone">phone number</label>
                            <input
                              type="tel"
                              id="telephone"
                              name="phone number"
                              placeholder="999 999 9999"
                              value=""
                            />
                          </div>
                        </div>
    
                        <div class="form__middle">
                          <div class="form__textarea">
                            <label for="message">message</label><br />
                            <textarea name="message" id="msg"></textarea>
                          </div>
                        </div>
    
                        <div class="form__bottom">
                          <div class="form-btn">
                            <input
                              class="btn btn-form"
                              type="button"
                              name="submit"
                              value="send message"
                            />
                            <!-- <input
                              class="reset"
                              type="button"
                              name="reset"
                              value="reset"
                            /> -->
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </section>
              </div>

        </main>
    </div>

    <!-- end body container -->

<?php
  include('../private/required/public/footer.public.php');
?>