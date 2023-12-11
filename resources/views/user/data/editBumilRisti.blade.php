@extends('master.header')

@section('link')
<link rel="stylesheet" href="css/formData.css">
@endsection

@section('title')
Edit Data Bumil Risti
@endsection

@section('isi')

<h3 class="title-editform">Edit Data Bumil Risti</h3>

<div id="container" class="container mt-4">    
    <div class="progress px-1" style="height: 3px; width:90%; margin-left: auto; margin-right: auto;">
      <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="step-container d-flex justify-content-between" style=" width:90%; margin-left: auto; margin-right: auto;">
        <div class="step-circle active-step" onclick="displayStep(1)" id="step-1">1. Data Bumil</div>
        <div class="step-circle" onclick="displayStep(2)" id="step-2">2. Detail Risti</div>
        <div class="step-circle" onclick="displayStep(3)" id="step-3">3. Alamat</div>
    </div>
  
    <form id="multi-step-form">
      <div class="step step-1">
        <!-- Step 1 form fields here -->
        <h4>Data Bumil</h4>
            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label">No Register</label>
                    <input type="text" name="..." id="..."
                        class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Jenis </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Nama </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Gakin </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label">Umur</label>
                    <input type="text" name="..." id="..."
                        class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> HTP </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label">Suami</label>
                    <input type="text" name="..." id="..."
                        class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Jenis Risti </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-auto">
                  <button type="button" class="btn btn-back prev-step mt-4">Batal</button>
                </div>
                <div class="col-auto">
                  <button type="button" class="btn btn-next next-step mt-4">Selanjutnya</button>
                </div>
            </div>
              
      </div>
  
      <div class="step step-2">
        <!-- Step 2 form fields here -->
        <h4>Detail Risti</h4>
        <div class="container" style="width: 85%">
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox1" name="option1" value="good">
                        <label class="form-check-label" for="checkbox1">F1</label>
                    </div>
                </div>
        
                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox2" name="option2" value="better">
                        <label class="form-check-label" for="checkbox2">F2</label>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox2" name="option2" value="better">
                        <label class="form-check-label" for="checkbox2">F3</label>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox2" name="option2" value="better">
                        <label class="form-check-label" for="checkbox2">F4</label>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox2" name="option2" value="better">
                        <label class="form-check-label" for="checkbox2">F5</label>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox2" name="option2" value="better">
                        <label class="form-check-label" for="checkbox2">F6</label>
                    </div>
                </div>
        
            </div>

            <div class="row justify-content-center">
                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox1" name="option1" value="good">
                        <label class="form-check-label" for="checkbox1">R1</label>
                    </div>
                </div>
        
                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox2" name="option2" value="better">
                        <label class="form-check-label" for="checkbox2">R2</label>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox2" name="option2" value="better">
                        <label class="form-check-label" for="checkbox2">R3</label>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox2" name="option2" value="better">
                        <label class="form-check-label" for="checkbox2">R4</label>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox2" name="option2" value="better">
                        <label class="form-check-label" for="checkbox2">R5</label>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox2" name="option2" value="better">
                        <label class="form-check-label" for="checkbox2">R6</label>
                    </div>
                </div>
        
            </div>

            <div class="row justify-content-center">
                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox1" name="option1" value="good">
                        <label class="form-check-label" for="checkbox1">R7</label>
                    </div>
                </div>
        
                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox2" name="option2" value="better">
                        <label class="form-check-label" for="checkbox2">R8</label>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox2" name="option2" value="better">
                        <label class="form-check-label" for="checkbox2">R9</label>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox2" name="option2" value="better">
                        <label class="form-check-label" for="checkbox2">R10</label>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox2" name="option2" value="better">
                        <label class="form-check-label" for="checkbox2">R11</label>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox2" name="option2" value="better">
                        <label class="form-check-label" for="checkbox2">R12</label>
                    </div>
                </div>
        
            </div>
        </div>
            

          <div class="row justify-content-between">
            <div class="col-auto">
              <button type="button" class="btn btn-back prev-step mt-4">Sebelumnya</button>
            </div>
            <div class="col-auto">
              <button type="button" class="btn btn-next next-step mt-4">Selanjutnya</button>
            </div>
        </div>

      </div>
  
      <div class="step step-3">
        <!-- Step 3 form fields here -->
        <h4>Data Kesehatan Anak</h4>
            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> RT </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Dusun </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> RW </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Desa </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            

        <div class="row justify-content-between">
            <div class="col-auto">
                <button type="button" class="btn btn-back prev-step mt-4">Sebelumnya</button>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-next next-step mt-4">Submit</button>
            </div>
        </div>
      </div>

    </form>
  </div>
@endsection

@section('addScript')
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script>
    var currentStep = 1;
    var totalSteps = 3;

    function displayStep(stepNumber) {
        
        $("#step-" + stepNumber).addClass("active-step");
            if (stepNumber >= 1 && stepNumber <= totalSteps) {
            $(".step-" + currentStep).hide();
            $(".step-" + stepNumber).show();
            currentStep = stepNumber;
            updateProgressBar();
        }
    }

    $(document).ready(function () {
    $('#multi-step-form').find('.step').slice(1).hide();

    $(".next-step").click(function () {
        if (currentStep < totalSteps) {
        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
        $("#step-" + (currentStep + 1)).addClass("active-step"); 
        currentStep++;
        setTimeout(function () {
            $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
            $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
            updateProgressBar();
        }, 500);
        }
    });

    $(".prev-step").click(function () {
        if (currentStep > 1) {
        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
        currentStep--;
        setTimeout(function () {
            $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
            $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInLeft");
            updateProgressBar();
        }, 500);
        }
    });

    updateProgressBar = function () {
        var progressPercentage = ((currentStep - 1) / (totalSteps - 1)) * 100;
        $(".progress-bar").css("width", progressPercentage + "%");
        $(".progress-bar").css("background-color", "#E85AAD");
    }
    });

</script>

<script>
    console.clear()

</script>

@endsection