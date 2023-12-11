@extends('master.header')

@section('link')
<link rel="stylesheet" href="css/formData.css">

@endsection

@section('title')
Edit Data Bumil
@endsection

@section('isi')

<h3 class="title-editform">Edit Data Ibu Melahirkan</h3>

<div id="container" class="container mt-4">
    <div class="progress px-1" style="height: 3px; width:70%; margin-left: auto; margin-right: auto;">
        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="step-container d-flex justify-content-between" style="width:70%; margin-left: auto; margin-right: auto;">
        <div class="step-circle active-step" onclick="displayStep(1)" id="step-1">1. Data Ibu Melahirkan</div>
        <div class="step-circle" onclick="displayStep(2)" id="step-2">2. Alamat Ibu Melahirkan</div>  
    </div>
  
    <form id="multi-step-form">
      <div class="step step-1">
        <!-- Step 1 form fields here -->
        <h4>Data Diri </h4>
            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label">No Index Bumil</label>
                    <input type="text" name="..." id="..."
                        class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Penolong </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Nama </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Cara Lahir </label>
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
                    <label for="..." class="formbold-form-label"> Kondisi Bayi</label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label">Tgl</label>
                    <input type="date" name="..." id="..."
                        class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Kondisi Ibu </label>
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
        <h4>Alamat Ibu</h4>
            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Posyandu </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Dusun </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> RT </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Desa </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>
            
            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> RW </label>
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
    var totalSteps = 2;

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

@endsection