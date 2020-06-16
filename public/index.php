<?php
  $page_title = "Home"; 
  $meta_discription = "";
  $meta_key = "uppi online academy, IIT-JEE online academy, NEET online academy, online academy, chemistry, physics, maths, biology";
  include('../private/config/config.php');
  require_once ("../private/config/database/db_connect.php");
  include('../private/required/public/header.public.php');
?>


      <div class="body-banner">
        <div class="banner-image">
          <img src="<?php base_url();?>img/banner/banner-1.jpg" alt="UPPI ONLINE ACADEMT IIT-JEE NEET" />
        </div>
        <div class="banner-container">
          <section>
            <article class="banner-container-wrap">
              <header class="banner__header">
                <h1 class="banner-heading-primary">
                  online classes for IIT JEE + CBSE + NEET
                </h1>
              </header>
              <div class="banner-body">
                <h2 class="banner-heading-secondary">
                  physics, math, chemistry made easy!
                </h2>
              </div>
              <div class="banner-footer">
                <a href="<?php base_url();?>course.php" class="btn btn-secondary">
                  start learning now
                </a>
              </div>
            </article>
          </section>
        </div>
        <!-- end banner container-->
      </div>
      <!-- end body banner -->

      
      <div class="body-container">
        <main>
          
        <section class="section__course">
            <header class="section__header">
              <sub class="sub-primary">Our Online Offerings</sub>
              <h2 class="heading-primary">IIT JEE, CBSE, ICSE, NEET</h2>
            </header>
            <section class="course__body">
              <article class="course-card">
                <header class="course-card__header">
                  <h1 class="heading-secondary u-padding-bottom-small">
                    LIVE ONLINE CLASSES <br />
                    (2020-2021)
                  </h1>
                  <span class="sub-secondary">Available for Std 7-12</span>
                </header>
                <div class="course-card-body">
                  <p class="u-padding-bottom-small">
                    Learn and interact live with from the comfort of your home.
                    Ask and clarify doubts instantly during the live class.
                  </p>
                  <span class="sub-secondary u-left-text">
                    For each subject, you get:
                  </span>
                  <p>
                    Everything in the mentored learning program
                  </p>
                  <p>
                    Live Virtual Class is just like a physical classroom, but
                    even better, without the time waste and hassle of
                    travelling. This course is perfect for hard-working
                    achievers ready to devote for each subject.
                  </p>
                </div>
                <footer class="course__footer">
                  <a href="<?php base_url();?>course.php" class="btn btn-primary"
                    >course details</a
                  >
                </footer>
              </article>
              <!-- end course card -->
              <article class="course-card">
                <header class="course-card__header">
                  <h1 class="heading-secondary u-padding-bottom-small">
                    MENTORED LEARNING PROGRAM <br />(2020-2021)
                  </h1>
                  <span class="sub-secondary">Available for Std 11-12 </span>
                </header>
                <div class="course-card-body">
                  <p>
                    Online video lessons and printed study materials for all
                    topics. Each week your personal mentor will assign your
                    lessons, track your progress and clear your doubts.
                  </p>
                  <span class="sub-secondary u-left-text">
                    For each subject, you get:
                  </span>
                  <p>
                    Everything in the full year online course
                  </p>
                  <ul>
                    <li>40 printed workbooks</li>
                    <li>20 topic tests</li>
                    <li>
                      4 revision tests with live online test discussion with
                      expert teachers
                    </li>
                    <li>
                      A personal mentor to guide you and clear your doubts.
                    </li>
                  </ul>
                </div>
                <footer class="course__footer">
                  <a href="<?php base_url();?>course.php" class="btn btn-primary"
                    >course details</a
                  >
                </footer>
              </article>
              <!-- end course card -->
              <article class="course-card">
                <header class="course-card__header">
                  <h1 class="heading-secondary u-padding-bottom-small">
                    SELF STUDY COURSES <br />
                    (2020-2021)
                  </h1>
                  <span class="sub-secondary">Available for Std 8-12 </span>
                </header>
                <div class="course-card-body">
                  <p class="u-padding-bottom-small">
                    Online video lessons for all topics. Learn any topic,
                    anytime, at your own pace.
                  </p>
                  <span class="sub-secondary u-left-text">
                    For each subject, you get:
                  </span>
                  <ul>
                    <li>200 video lectures</li>
                    <li>750 solved video examples</li>
                    <li>1000 practice questions</li>
                  </ul>
                  <p>
                    Each subject course requires 4 hours of effort per week.
                    This course is perfect for motivated self-learners. Often,
                    students who attend other coaching classes take this course
                    to strengthen their concepts and master problem solving
                    techniques.
                  </p>
                </div>
                <footer class="course__footer">
                  <a href="<?php base_url();?>course.php" class="btn btn-primary"
                    >course details</a
                  >
                </footer>
              </article>
              <!-- end course card -->
            </section>
          </section>
          <!-- end section course -->

          <section class="section-video">
            <header class="section__header">
              <sub class="sub-primary"></sub>
              <h2 class="heading-primary">our video samples</h2>
            </header>
            <div class="video-body">
              <ul class="owl-carousel owl-theme">
                <?php
               $query = "SELECT * from youtube_videos WHERE active = 1";

                $result = mysqli_query($conn , $query);

                if(!$result){
                    die("query failed");
                }

                while($row = mysqli_fetch_assoc($result)){
                  ?>
                <li>
                  <div class="video-wrap">
                    <iframe
                      src="<?php echo $row['vdo_url']?>"
                      frameborder="0"
                      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                      class="video__iframe"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <header class="video__header">
                   <?php echo $row['vdo_title']?>
                  </header>
                </li>
                <?php
                }
                ?>
              </ul>
            </div>
          </section>
          <!-- end section video -->

          <section class="section__teachers">
            <header class="section__header">
              <sub class="sub-primary">Our Top</sub>
              <h2 class="heading-primary">Teachers</h2>
            </header>
            <section class="teacher-main">
              <?php

                    $query = "SELECT * from teachers";

                    $result = mysqli_query($conn , $query);

                    if(!$result){
                        die("query failed");
                    }
                    
                    while($row = mysqli_fetch_assoc($result)){
              ?>
              <article class="teacher-card">
                <div class="teacher-card-image">
                  <figure>
                    <img
                      src="<?php base_url();?>img/teacher/<?php echo $row['teacher_image'];?>"
                      alt="<?php echo $row['teacher_name'];?>"
                    />
                  </figure>
                </div>
                <div class="teacher-card-header">
                  <header>
                    <h1>
                    <?php echo $row['teacher_name'];?>, <?php echo $row['teacher_detail'];?>.
                      <strong class="teacher-card-subject"> <?php echo $row['teacher_subject'];?></strong>
                    </h1>
                  </header>
                </div>
                <div class="teacher-card-body">
                  <p>
                    
                  </p>
                </div>
              </article>
              <?php 
                    }
              ?>
            </section>
          </section>
          <!-- end  section teacher -->

          <section class="section-testimonial">
            <header class="section__header">
              <sub class="sub-primary">what students</sub>
              <h2 class="heading-primary">say about us</h2>
            </header>
            <div class="testimonial-body">
              <ul class="owl-carousel owl-theme">
                <li>
                  <blockquote>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Asperiores enim, dolore ipsam deleniti sit aspernatur
                      officia. Temporibus voluptate ratione eveniet
                      exercitationem excepturi recusandae quod, maxime nulla
                      voluptatem, blanditiis ea magnam.
                    </p>
                  </blockquote>
                </li>
                <li>
                  <blockquote>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Asperiores enim, dolore ipsam deleniti sit aspernatur
                      officia. Temporibus voluptate ratione eveniet
                      exercitationem excepturi recusandae quod, maxime nulla
                      voluptatem, blanditiis ea magnam.
                    </p>
                  </blockquote>
                </li>
                <li>
                  <blockquote>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Asperiores enim, dolore ipsam deleniti sit aspernatur
                      officia. Temporibus voluptate ratione eveniet
                      exercitationem excepturi recusandae quod, maxime nulla
                      voluptatem, blanditiis ea magnam.
                    </p>
                  </blockquote>
                </li>
              </ul>
            </div>
          </section>

        </main>
      </div>
      <!-- end body container -->

<?php
  include('../private/required/public/footer.public.php');
?>