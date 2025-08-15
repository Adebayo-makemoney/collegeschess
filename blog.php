<?php
include("includes/blog-head.php");
?>
    

  <?php
include("includes/pre-loader.php");
?>
<?php
include("includes/nav.php");
?>

  
     <!-- Hero -->
  <div class="hero mb-5">
    <h1>Welcome to the Game of Kings</h1>
  </div>

  <div class="container">
    <div class="row">
      <!-- Blog Posts -->
      <div class="col-md-8">
        <div class="card mb-4">
          <img src="./images/image1.jpg" class="card-img-top" alt="Post image">
          <div class="card-body">
            <h3 class="card-title">⚔️ The Art of Opening Traps</h3>
            <p class="card-text">Master sneaky traps in the Italian Game, Queen's Gambit, and more. Perfect for catching opponents off-guard!</p>
            <a href="#" class="btn btn-primary">Dive In</a>
          </div>
        </div>
        <div class="card mb-4">
          <img src="./images/getPart.jpg" class="card-img-top" alt="Endgame">
          <div class="card-body">
            <h3 class="card-title">🏁 Endgame Magic: Queen vs. Pawn</h3>
            <p class="card-text">It’s not over until it’s over. Learn precise endgame tactics that save or seal victories!</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-md-4 sidebar">
        <!-- Search -->
        <div class="mb-4">
          <input type="text" class="form-control" placeholder="🔍 Search articles...">
        </div>

        <!-- Categories -->
        <div class="card mb-4">
          <div class="card-header bg-dark text-light">Categories</div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">♘ Openings</li>
            <li class="list-group-item">♖ Endgames</li>
            <li class="list-group-item">♙ Tactics</li>
            <li class="list-group-item">♔ Player Spotlights</li>
            <li class="list-group-item">🧠 Chess Psychology</li>
          </ul>
        </div>

        <!-- Recent Posts -->
        <div class="card mb-4">
          <div class="card-header bg-dark text-light">Recent Posts</div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="#">🔎 Magnus Carlsen's Trickiest Blunders</a></li>
            <li class="list-group-item"><a href="#">🔥 5 Blitz Traps That Win Fast</a></li>
            <li class="list-group-item"><a href="#">🎓 Chess Puzzle of the Day</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
<!-- footer-area -->
               <?php
include("includes/footer.php");
?>
</main>

<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>


