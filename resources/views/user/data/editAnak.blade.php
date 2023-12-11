@extends('master.header')

@section('link')
<link rel="stylesheet" href="css/formData.css">
@endsection

@section('title')
Edit Data Anak
@endsection

@section('isi')

<h3 class="title-editform">Edit Data Anak</h3>

<div id="container" class="container mt-4">    
    <div class="progress px-1" style="height: 3px;">
      <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="step-container d-flex justify-content-between">
        <div class="step-circle active-step" onclick="displayStep(1)" id="step-1">1. Data Diri Anak</div>
        <div class="step-circle" onclick="displayStep(2)" id="step-2">2. Data Penting Anak</div>
        <div class="step-circle" onclick="displayStep(3)" id="step-3">3. Data Kesehatan Anak</div>
        <div class="step-circle" onclick="displayStep(4)" id="step-4">4. Alamat Anak</div>        
    </div>
  
    <form id="multi-step-form">
      <div class="step step-1">
        <!-- Step 1 form fields here -->
        <h4>Data Diri Anak</h4>
            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label">Nama Anak</label>
                    <input type="text" name="..." id="..."
                        class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Jenis Kelamin </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Tanggal Lahir </label>
                    <input type="date" name="..." id="..." class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> No Index </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label">Nama Ayah</label>
                    <input type="text" name="..." id="..."
                        class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Nama Ibu </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label">Anak Ke-</label>
                    <input type="text" name="..." id="..."
                        class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Status </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Tanggal Registrasi </label>
                    <input type="date" name="..." id="..." class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> No Telp Ortu </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Dirujuk Ke </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Kategori Anak </label>
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
        <h4>Data Penting Anak</h4>
            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Akte </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> No KK </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
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
                    <label for="..." class="formbold-form-label"> Gakin </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Cek Baduta </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> TB Terakhir </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> No Index </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Tgl Timbang Terakhir </label>
                    <input type="date" name="..." id="..." class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Status BBU </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> No Kartu </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Status TBU </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Stunting </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> NIK Ibu </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> Cek IDL </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
                </div>

                <div class="formbold-w-45">
                    <label for="..." class="formbold-form-label"> NIK Ayah </label>
                    <input type="text" name="..." id="..." class="formbold-form-input" />
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

      <div class="step step-4">
        <!-- Step 4 form fields here -->
        <h4>Alamat Anak</h4>
        <div class="formbold-input-flex">
            <div class="formbold-w-45">
                <label for="..." class="formbold-form-label"> RT </label>
                <input type="text" name="..." id="..." class="formbold-form-input" />
            </div>

            <div class="formbold-w-45">
                <label for="..." class="formbold-form-label"> Alamat </label>
                <input type="text" name="..." id="..." class="formbold-form-input" />
            </div>
        </div>

        <div class="formbold-input-flex">
            <div class="formbold-w-45">
                <label for="..." class="formbold-form-label"> RW </label>
                <input type="text" name="..." id="..." class="formbold-form-input" />
            </div>

            <div class="formbold-w-45">
                <label for="..." class="formbold-form-label"> Kode Wilayah </label>
                <input type="text" name="..." id="..." class="formbold-form-input" />
            </div>
        </div>

        <div class="formbold-input-flex">
            <div class="formbold-w-45">
                <label for="..." class="formbold-form-label"> Kode Tempat </label>
                <input type="text" name="..." id="..." class="formbold-form-input" />
            </div>

            <div class="formbold-w-45">
                <label for="..." class="formbold-form-label"> Kode Suku </label>
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
    var totalSteps = 4;

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