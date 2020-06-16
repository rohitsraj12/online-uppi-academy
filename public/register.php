<?php

$page_title = "Course Registration";
$meta_discription = "";
$meta_key = "uppi online academy, IIT-JEE online academy, NEET online academy, online academy, chemistry, physics, maths, biology";
  include('../private/config/config.php');
  include('../private/required/public/header.public.php');

?>

<div class="body-container">
        <main>
            <section class="section-registration-form">
                <header class="section__header">
                    <h1 class="heading-primary">
                        REGISTRATION FORM
                    </h1>
                </header>
                <form action="" onsubmit="return validation()" class="registration-form">
                    <div class="contact__form">
                      <div class="form__top">
                        <div class="form__row">
                          <label for="firstname">firstname</label>
                          <input
                            type="text"
                            id="firstname"
                            name="name"
                            value=""
                            placeholder="first name"
                          />
                        </div>

                        <div class="form__row">
                            <label for="lastname">lastname</label>
                            <input
                              type="text"
                              id="lastname"
                              name="lastname"
                              value=""
                              placeholder="last name"
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
                            <label for="telephone">phone number</label>
                            <input
                              type="tel"
                              id="telephone"
                              name="phone number"
                              placeholder="999 999 9999"
                              value=""
                            />
                          </div>
  
                        <div class="form__row">
                          <label for="standard">standard</label>
                          <select class="select-box" id="select-box">
                            <option value="select">select</option>
                            <option value="12">standard 12th</option>
                            <option value="11">standard 11th</option>
                            <option value="10">standard 10th</option>
                            <option value="9">standard 9th</option>
                            <option value="8">standard 8th</option>
                            <option value="7">standard 7th</option>
                            <option value="6">standard 6th</option>
                          </select>
                        </div>
                        
                        <div class="form__row ">
                            <label for="course">course</label>
                            <ul>
                                <li><input
                                    type="radio"
                                    id="foundation"
                                    name="course"
                                    value="foundation"
                                  />
                                  <label for="foundation">foundation</label>
                                </li>
                                <li>   
                                    <input
                                      type="radio"
                                      id="JEE"
                                      name="course"
                                      value="JEE"
                                    />
                                    <label for="JEE">IIT-JEE</label>
                                </li>
                                <li>
                                    <input
                                    type="radio"
                                    id="NEET"
                                    name="course"
                                    value="NEET"
                                  />
                                  <label for="NEET">NEET</label>
                                
                                </li>
                            </ul>

                         
                        </div>

                        <div class="form__row registration-textarea">
                          <label for="msg">Message</label>
                          <textarea name="msg" id="msg"></textarea>
                        </div>
                      </div>
  
                      <div class="form__bottom">
                        <div class="form-btn">
                          <input
                            class="btn btn-form"
                            type="button"
                            name="submit"
                            value="register"
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
                
            </section>
        </main>
    </div>

    <!-- end body container -->
<?php
  include('../private/required/public/footer.public.php');
?>