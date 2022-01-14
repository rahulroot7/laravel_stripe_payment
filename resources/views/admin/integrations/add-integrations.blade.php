@extends('admin.layouts.master') 
@section('content')
       <!-- Main content -->
    <section class="content p-4">
      <div class="row">
           <div class="col-md-12">
                <div class="top-title pb-4">
                    <h4> Add Integrations  </h4>
                </div>
            </div>
            
          <div class="col-md-12">
              <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Image Upload</small></h3>
              </div>
              <div class="card-body">
                <div id="actions" class="row">
                  <div class="col-md-12">
                    <div class="btn-group w-100">
                      <span class="btn btn-success col fileinput-button dz-clickable">
                        <i class="fas fa-plus"></i>
                        <span>Add files</span>
                      </span>
                      <button type="submit" class="btn btn-primary col start">
                        <i class="fas fa-upload"></i>
                        <span>Start upload</span>
                      </button>
                      <button type="reset" class="btn btn-warning col cancel">
                        <i class="fas fa-times-circle"></i>
                        <span>Cancel upload</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="table table-striped files" id="previews">
                  
                </div>
              </div>
            </div>
          </div>
          <!--2-->
         
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Integrations Title
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <textarea id="summernote">
                Place <em>some</em> <u>text</u> <strong>here</strong>
              </textarea>
            </div>
           
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Integrations Text
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <textarea id="codeMirrorDemo" class="p-3">
                <div class="info-box bg-gradient-info">
                  <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Bookmarks</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                      <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                      70% Increase in 30 Days
                    </span>
                  </div>
                </div>
              </textarea>
            </div>
          </div>
        </div>
        <!-- /.col-->
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->
  
  <script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
@endsection