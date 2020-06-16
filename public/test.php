<?php 

include ("../private/config/config.php");
include ("../private/config/database/db_connect.php");
// include ("../private/required/public/header.public.php");

$query = "SELECT * from youtube_videos WHERE active = 1";

$result = mysqli_query($conn , $query);

if(!$result){
    die("query failed");
}

while($row = mysqli_fetch_assoc($result)){
    // echo $row["social_media_id"];
    // echo $row["social_media_name"];
    // echo $row["social_media_url"];
    // echo $row["social_media_icon"];
?>
            <ul class="owl-carousel owl-theme">
                <li>
                  <div class="video-wrap">
                    <iframe
                      src="<?php echo $row['vdo_url'];?>"
                      frameborder="0"
                      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                      class="video__iframe"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <header class="video__header">
                    <?php echo $row["vdo_title"];?>
                  </header>
                </li>
            </ul>

<?php
}

?>




