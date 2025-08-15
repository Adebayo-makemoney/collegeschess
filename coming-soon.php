<!-- This is a simple "Coming Soon" page with a back button, a title, a description, and a subscription form. The page has a dark background with a gradient overlay and is responsive for mobile devices. -->
<!-- The page includes a back button that allows users to navigate back to the previous page. The subscription form collects email addresses for notifications. The design is clean and modern, with a focus on user experience. -->
<?php
include("includes/coming-soon-header.php");
?>
<body>

  <a href="javascript:history.back()" class="back-button">← Back</a>

  <h1>Coming Soon</h1>
  <p>Competitions is getting ready. Stay tuned for something amazing!</p>

  <form class="subscribe-form">
    <input type="email" placeholder="Enter your email" required>
    <button type="submit">Subscribe</button>
  </form>

</body>
</html>
