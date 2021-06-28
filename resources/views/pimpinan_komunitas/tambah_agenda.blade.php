@extends('layout.master')
@section('content')
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md">
            <div class="card card-white">
               <div class="card-header ">
                  <h3 class="card-title">Tambah Agenda</h3>
               </div>
               <div class="card-body">
                  <!-- Tanggal -->
                  <div class="form-group">
                  <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                        <input type="text"
                    class="datepicker-here"
                    data-language='en'
                    data-multiple-dates="3"
                    data-multiple-dates-separator=", "
                    data-position='bottom left'/>
                </div>
                     <!-- /.input group -->
                 
                </div>
                  <!-- /.form group -->
                  <!-- Jenis Agenda -->
                  <div class="form-group">
                  <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-list"></i></span>
                        </div>
                            <select class="form-control select2" style="width: 80%;">
                                <option>Agenda Rutin</option>
                                <option>Agenda Tambahan</option>
                                <option>Agend Mendesak</option>
                            </select>
                </div>
                     <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <!-- Peruntukan -->
                  <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                            <select class="form-control select2" style="width: 80%;">
                                <option>Seluruh User</option>
                                <option>Petani</option>
                                <option>Ketua Kelompok</option>
                            </select>
                     </div>
                     <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <!-- Agenda -->
                  <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-bell"></i></span>
                        </div>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Agenda">
                     </div>
                     <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <!-- Keterangan -->
                  <div class="form-group ">
                  <label>Keterangan</label>
                        <textarea class="form-control" rows="3" placeholder="Keterangan Agenda ..."></textarea>
                      </div>
                     <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <div class="col-md-2 offset-md-5 text-center">
                     <!-- small box -->
                     <a href="#" class="text-light">
                        <div class="small-box bg-success">
                           <div class="inner">
                              Tambah
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <!-- /.card-body -->
            </div>
            <!-- /.card -->
         </div>
      </div>
   </div>
</section>
<!-- /.content -->
<!-- jQuery -->
<script src="{{asset('public/asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('public/asset/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  });

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false;

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template");
  previewNode.id = "";
  var previewTemplate = previewNode.parentNode.innerHTML;
  previewNode.parentNode.removeChild(previewNode);

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  });

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
  });

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
  });

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1";
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
  });

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0";
  });

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
  };
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true);
  };
  // DropzoneJS Demo Code End
</script>
@endsection

