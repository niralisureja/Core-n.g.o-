  <!-- Add Model Form -->
  <div id="add-model">
      <div id="add-model-form">
        <h2 class="">Select Donation Type</h2>
        <div id="add-form" class="m-2 mt-4">
          <div class="row">
            <div class="col"></div>
            <a href="ecoDonation.php" class="a-btn scrollto col text-a-center">Economical</a>
            <div class="col"></div>
          </div>
          <div class="row">
            <div class="col"></div>
            <div class="col text-a-center my-3">OR</div>
            <div class="col"></div>
          </div>
          <div class="row">
            <div class="col"></div>
            <a href="#" class="a-btn scrollto col text-a-center">Non-Economical</a>
            <div class="col"></div>
          </div>
        </div>
        <button id="add-model-close-btn" class="btn btn-danger">X</button>
      </div>
    </div>
  </div>
  
  <!-- For Ajax -->
  <script src="assets/js/jquery.js"></script>
  <script type="text/javascript">
  $(document).ready(function () {
    // Open Add Model
    $(document).on('click', '#donate-btn', function () {
      $("#add-model").show();
    });

    // Close Add Model
    $(document).on('click', '#add-model-close-btn', function () {
      $("#add-model").hide();
    });
  });
  </script> 