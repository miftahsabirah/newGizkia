<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Multi-Step Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div id="container" class="container mt-5">
    <div class="progress px-1" style="height: 3px;">
      <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="step-container d-flex justify-content-between">
      <div class="step-circle" onclick="displayStep(1)">1</div>
      <div class="step-circle" onclick="displayStep(2)">2</div>
      <div class="step-circle" onclick="displayStep(3)">3</div>
    </div>
  
    <form id="multi-step-form">
      <div class="step step-1">
        <!-- Step 1 form fields here -->
        <h3>Step 1</h3>
        <div class="mb-3">
          <label for="field1" class="form-label">Field 1:</label>
          <input type="text" class="form-control" id="field1" name="field1">
        </div>
        <button type="button" class="btn btn-primary next-step">Next</button>
      </div>
  
      <div class="step step-2">
        <!-- Step 2 form fields here -->
        <h3>Step 2</h3>
        <div class="mb-3">
          <label for="field2" class="form-label">Field 2:</label>
          <input type="text" class="form-control" id="field2" name="field2">
        </div>
        <button type="button" class="btn btn-secondary prev-step">Previous</button>
        <button type="button" class="btn btn-primary next-step">Next</button>
      </div>
  
      <div class="step step-3">
        <!-- Step 3 form fields here -->
        <h3>Step 3</h3>
        <div class="mb-3">
          <label for="field3" class="form-label">Field 3:</label>
          <input type="text" class="form-control" id="field3" name="field3">
        </div>
        <button type="button" class="btn btn-secondary prev-step">Previous</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script>
    var currentStep = 1;
    var updateProgressBar;

    function displayStep(stepNumber) {
      if (stepNumber >= 1 && stepNumber <= 3) {
        $(".step-" + currentStep).hide();
        $(".step-" + stepNumber).show();
        currentStep = stepNumber;
        updateProgressBar();
      }
    }

    $(document).ready(function() {
      $('#multi-step-form').find('.step').slice(1).hide();
    
      $(".next-step").click(function() {
        if (currentStep < 3) {
          $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
          currentStep++;
          setTimeout(function() {
            $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
            $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
            updateProgressBar();
          }, 500);
        }
      });

      $(".prev-step").click(function() {
        if (currentStep > 1) {
          $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
          currentStep--;
          setTimeout(function() {
            $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
            $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInLeft");
            updateProgressBar();
          }, 500);
        }
      });

      updateProgressBar = function() {
        var progressPercentage = ((currentStep - 1) / 2) * 100;
        $(".progress-bar").css("width", progressPercentage + "%");
      }
    });
  </script>
  
</body>
</html>
