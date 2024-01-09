@extends('admin.layouts.main')

@section('content-admin')
<div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
  <div class="toolbar" id="kt_toolbar">
    <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
      <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
        <!--Start Title-->
        <h1 class="text-dark fw-bold my-1 fs-2">Uplaod Images<small class="text-muted fs-6 fw-normal ms-1"></small></h1>
        <!--End Title-->

        <!--Start Breadcrumb-->
        <ul class="breadcrumb fw-semibold fs-base my-1">
          <li class="breadcrumb-item text-muted">
            <a href="/admin" class="text-muted text-hover-primary"> Home </a>
          </li>

          <li class="breadcrumb-item text-dark">Uplaod Images</li>
        </ul>
        <!--End Breadcrumb-->
      </div>
    </div>
  </div>

  <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
    <div class="container-xxl">
      <div class="row g-xl-8">
        <div class="card card-flush">
          <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <div class="card-title">
              <h1>Upload Images</h1>
            </div>
          </div>

          <div class="card-body pt-0">
            <form action="">
              <div class="upload">
                <div class="upload-files">
                  <div class="body" id="drop">
                    <i class="fa fa-file-text-o pointer-none" aria-hidden="true"></i>
                    <p class="pointer-none">
                      <b>Drag and drop</b> files here <br />
                      or <a href="javascript:;" id="triggerFile">browse</a> to begin the upload
                    </p>
                    <input type="file" multiple="multiple" />
                  </div>
                  <div class="footer">
                    <div class="divider">
                      <span><AR>FILES</AR></span>
                    </div>
                    <div class="list-files">
                      <!--   template   -->
                    </div>
                    <button class="importar">UPDATE FILES</button>
                  </div>
                </div>
              </div>
              <button type="submit">
                save
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
//DOM
const $ = document.querySelector.bind(document);

//APP
let App = {};
App.init = (function () {
  //Init
  function handleFileSelect(evt) {
    const files = evt.target.files; // FileList object

    //files template
    let template = `${Object.keys(files)
      .map(
        (file) => `<div class="file file--${file}">
<div class="name"><span>${files[file].name}</span></div>
<div class="progress active"></div>
<div class="done">
<a href="javascript:;" target="_blank">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 1000 1000">
<g><path id="path" d="M500,10C229.4,10,10,229.4,10,500c0,270.6,219.4,490,490,490c270.6,0,490-219.4,490-490C990,229.4,770.6,10,500,10z M500,967.7C241.7,967.7,32.3,758.3,32.3,500C32.3,241.7,241.7,32.3,500,32.3c258.3,0,467.7,209.4,467.7,467.7C967.7,758.3,758.3,967.7,500,967.7z M748.4,325L448,623.1L301.6,477.9c-4.4-4.3-11.4-4.3-15.8,0c-4.4,4.3-4.4,11.3,0,15.6l151.2,150c0.5,1.3,1.4,2.6,2.5,3.7c4.4,4.3,11.4,4.3,15.8,0l308.9-306.5c4.4-4.3,4.4-11.3,0-15.6C759.8,320.7,752.7,320.7,748.4,325z"</g>
</svg>
      </a>
</div>
</div>`,
      )
      .join("")}`;

    $("#drop").classList.add("hidden");
    $(".footer").classList.add("hasFiles");
    $(".importar").classList.add("active");
    setTimeout(() => {
      $(".list-files").innerHTML = template;
    }, 1000);

    Object.keys(files).forEach((file) => {
      let load = 2000 + file * 2000; // fake load
      setTimeout(() => {
        $(`.file--${file}`).querySelector(".progress").classList.remove("active");
        $(`.file--${file}`).querySelector(".done").classList.add("anim");
      }, load);
    });
  }

  // trigger input
  $("#triggerFile").addEventListener("click", (evt) => {
    evt.preventDefault();
    $("input[type=file]").click();
  });

  // drop events
  $("#drop").ondragleave = (evt) => {
    $("#drop").classList.remove("active");
    evt.preventDefault();
  };
  $("#drop").ondragover = $("#drop").ondragenter = (evt) => {
    $("#drop").classList.add("active");
    evt.preventDefault();
  };
  $("#drop").ondrop = (evt) => {
    $("input[type=file]").files = evt.dataTransfer.files;
    $(".footer").classList.add("hasFiles");
    $("#drop").classList.remove("active");
    evt.preventDefault();
  };

  //upload more
  $(".importar").addEventListener("click", () => {
    $(".list-files").innerHTML = "";
    $(".footer").classList.remove("hasFiles");
    $(".importar").classList.remove("active");
    setTimeout(() => {
      $("#drop").classList.remove("hidden");
    }, 500);
  });

  // input change
  $("input[type=file]").addEventListener("change", handleFileSelect);
})();
</script>
@endsection
