<?php
// Start the session at the beginning of the page
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: https://css1.seattleu.edu/~rspannaus/login.html");
    exit();
}
?>
<!-- saved from url=(0044)https://css1.seattleu.edu/~lil/template.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>FitConnect</title>

<style>
  .postButton{
      display: flex;
      margin-top: 5px;
      column-gap: 5px;
      margin-bottom: 5px;
  }

</style>
</head>
<body bgcolor="ffffff" class="vsc-initialized" data-new-gr-c-s-check-loaded="14.1205.0" data-gr-ext-installed=""> 


<font face="times" size="3">
<hr noshade="noshade" size="2">

<h1>FitConnect</h1>
<b>Team Members:</b> Rocco Blake Samir<br>
<div class = "postButton">
  <a href="https://css1.seattleu.edu/~rspannaus/posting.html" >
    <div class="button-container">
        <button type="Post">Post</button>
    </div>
  </a>
  <a href="https://css1.seattleu.edu/~rspannaus/Account.html" >
    <div class="button-container">
        <button type="Post">Account</button>
    </div>
</a>
  <a href="https://css1.seattleu.edu/~rspannaus/feed.html" >
    <div class="button-container">
        <button type="Post">Feed</button>
    </div>
  </a>
</div>
<br>
<hr>
<ul>
<li><b>Relations:</b><br><br>

<ol>
</li><li><a href="https://css1.seattleu.edu/~rspannaus/posts.php">Posts</a>
</li><li><a href="https://css1.seattleu.edu/~rspannaus/getFriends.php">Friends</a>
</li><li><a href="https://css1.seattleu.edu/~rspannaus/useraccount.php">User Account</a>
</li><li><a href="https://css1.seattleu.edu/~rspannaus/workouts.php">Workouts</a>
</li><li><a href="https://css1.seattleu.edu/~rspannaus/Cardio.php">Cardio</a>
</li><li><a href="https://css1.seattleu.edu/~rspannaus/UpperBody.php">UpperBody</a>
</li><li><a href="https://css1.seattleu.edu/~rspannaus/PostsWorkout.php">PostsWorkout</a>
</li><li><a href="https://css1.seattleu.edu/~rspannaus/UserWorkouts.php">UserWorkouts</a>
</li><li><a href="https://css1.seattleu.edu/~rspannaus/LowerBody.php">LowerBody</a>
</li></ol>
<br><br>
<hr>
</li><li><b>Queries:</b><br><br>

<ol>
<li><a href="https://css1.seattleu.edu/~rspannaus/query1.php">Query1</a>: Retrieves all users who have made posts, ensuring user data rentention.
</li><li><a href="https://css1.seattleu.edu/~rspannaus/query2.php">Query2</a>: Finds the count of how many posts a user has made. 
</li><li><a href="https://css1.seattleu.edu/~rspannaus/query3.php">Query3</a>: Finds users who are doing both cardio and upper body workouts by checking the workout types associated with each user.
</li><li><a href="https://css1.seattleu.edu/~rspannaus/query4.php">Query4</a>: Finds Cario Workouts and Joins them with the time
</li><li><a href="https://css1.seattleu.edu/~rspannaus/query5.php">Query5</a>: Finds workouts that are only muscle based.
</li></ol>
<br><br>
<hr>
</i></li><li><i><b>Ad-hoc Query:</b><br><br>

<form method="POST" action="https://css1.seattleu.edu/~rspannaus/customQuery.php">
      <table>
        <tbody><tr>
          <td align="right">
            <strong>Please enter your query here<br></strong>
          </td>
          <td>
            <input size="30" name="query" type="text">
          </td>
        </tr>
        <tr>
          <td align="right">
            <input value="Clear" type="reset">
          </td>
          <td>
            <input value="Submit" type="submit">
          </td>
        </tr>
      </tbody></table>
    </form>
</i></li></ul><i>
<p></p>
</i></font><i><i>
<hr noshade="noshade" size="2">
<p></p>

</i></i>
<script>
    let isNavigatingAway = false;

    // Set flag when user is navigating (e.g., clicking on a link or button)
    document.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            isNavigatingAway = true;
        });
    });

    window.addEventListener("beforeunload", function (event) {
        if (!isNavigatingAway) {
            // Only send the beacon if the user is closing the tab/window (not navigating)
            navigator.sendBeacon("https://css1.seattleu.edu/~rspannaus/logout.php");
        }
    });
</script>
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"><template shadowrootmode="open"><style>
      div.grammarly-desktop-integration {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select:none;
        user-select:none;
      }

      div.grammarly-desktop-integration:before {
        content: attr(data-content);
      }
    </style><div aria-label="grammarly-integration" role="group" tabindex="-1" class="grammarly-desktop-integration" data-content="{&quot;mode&quot;:&quot;full&quot;,&quot;isActive&quot;:true,&quot;isUserDisabled&quot;:false}"></div></template></grammarly-desktop-integration></html>