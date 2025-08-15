<?php
include("includes/find-tutor-head.php");
?>
 
 <!-- preloader -->
 <?php
include("includes/pre-loader.php");
?>


<?php
include("includes/nav.php");
?>
    
    </style>

    

<?php
$pageTitle = "Chess Tutor";
?>
    <?php
include("includes/banner.php");
?>


<div class="container">
  <div class="from form-container">
    <h2 class="text-center mb-4" style="color: #fff;">Apply As A Chess Tutor</h2>

    <form action="#" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control transparent-input" id="name" placeholder="e.g. Magnus Carlsen" required />
      </div>

      <!-- Date of Birth -->
      <div class="mb-3">
        <label class="form-label">Date Of Birth</label>
        <div class="d-flex gap-2">
          <select class="form-select" id="dob-day" required>
            <option value="" selected disabled>Day</option>
          </select>
          <select class="form-select" id="dob-month" required>
            <option value="" selected disabled>Month</option>
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
          </select>
          <select class="form-select" id="dob-year" required>
            <option value="" selected disabled>Year</option>
          </select>
        </div>
      </div>

      <div class="mb-3">
        <label for="gender" class="form-label">Select Gender:</label>
        <div class="d-flex gap-2">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
            <label class="form-check-label" for="male">Male</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
            <label class="form-check-label" for="female">Female</label>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label transparent-input">Email Address</label>
        <input type="email" class="form-control" id="email" placeholder="you@example.com" required />
      </div>

      <div class="mb-3">
        <label for="state" class="form-label">State</label>
        <select class="form-select transparent-input" id="state" required>
          <option value="" selected disabled>Select State</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="lga" class="form-label">Local Government Area (LGA)</label>
        <select class="form-select" id="lga" required>
          <option value="" selected disabled>Select LGA</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="play" class="form-label">Ever Played Chess</label>
        <div class="d-flex gap-2">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="play" id="Yes" value="Yes">
            <label class="form-check-label" for="Yes">Yes</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="play" id="No" value="No">
            <label class="form-check-label" for="No">No</label>
          </div>
        </div>
      </div>

      <div class="mb-3 box">
        <label for="chess-level" class="form-label">Your Chess Level</label>
        <select class="form-select" id="chess-level" required>
          <option selected disabled value="">Choose...</option>
          <option>Beginner</option>
          <option>Intermediate</option>
          <option>Advanced</option>
          <option>Professional</option>
          <option>none</option>
        </select>
      </div>

      
      <div class="mb-3 box">
        <label for="qualification" class="form-label">Your Qualification</label>
        <select class="form-select" id="qualification" required>
          <option selected disabled value="">Choose...</option>
          <option>Grandmaster (GM)</option>
          <option>International Master (IM)</option>
          <option>FIDE Master (FM)</option>
          <option>Candidate Master (CM)</option>
          <option>Woman Grandmaster (WGM)</option>
          <option>none</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="time" class="form-label">Preferred Time</label>
        <input type="text" class="form-control" id="time" placeholder="e.g. Weekends, Evenings" required />
      </div>

      <div class="mb-3">
        <label for="notes" class="form-label">Additional Notes (Optional)</label>
        <textarea class="form-control" id="notes" rows="3" placeholder="What are you looking to improve? Openings, strategy, etc."></textarea>
      </div>

      <div class="mb-3">
        <label for="Social" class="form-label">Social Media Handle (Optional)</label>
        <select name="Social" id="Social" class="form-control">
          <option value="" selected disabled>Choose...</option>
          <option value="">none</option>
          <option value="Twitter">Twitter</option>
          <option value="Instagram">Instagram</option>
          <option value="Facebook">Facebook</option>
          <option value="LinkedIn">LinkedIn</option>
        </select>
      </div>

      <div class="mb-3" id="social-link-container" style="display: none;">
        <label for="social-link" class="form-label">Social Media Link</label>
        <input type="text" class="form-control" id="social-link" placeholder="e.g. https://twitter.com/yourhandle" required />
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-warning">Find Me a Tutor</button>
      </div>
    </form>
  </div>
</div>


</body>


<!-- footer-area -->
               <?php
include("includes/footer.php");
?>

<script>
  const radios = document.querySelectorAll('input[name="play"]');
    const boxes = document.querySelectorAll('.box'); // select all boxes

    radios.forEach(radio => {
      radio.addEventListener('change', () => {
        if (radio.value === 'Yes') {
          boxes.forEach(box => box.style.display = 'block');
        } else if (radio.value === 'No') {
          boxes.forEach(box => box.style.display = 'none');
        }
      });
    });

    const socialSelect = document.getElementById('Social');
    const socialLinkContainer = document.getElementById('social-link-container');

    socialSelect.addEventListener('change', function() {
      if (this.value) {
        socialLinkContainer.style.display = 'block';
      } else {
        socialLinkContainer.style.display = 'none';
      }
    });

  
</script>
