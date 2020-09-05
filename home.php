<?php
require_once 'assets/php/header.php';
 ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
       <?php if($verified=='Not Verified!'): ?>
         <div class="alert alert-danger alert-dismissible text-center mt-2 m-0">
           <button type="button" class="close" data-dismiss="alert">&times;</button>
           <strong>Your E-mail is not verified! we have sent you an email verification link on your email, check and verify now</strong>
         </div>
      <?php endif; ?>
      <h4 class="text-center text-primary mt-2">Write your notes here and access Anytime anywhere</h4>
    </div>

  </div>
  <div class="card border-primary">
    <h5 class="card-header bg-primary d-flex justify-content-between">
      <span class="text-light lead align-self-center">All notes</span>
      <a href="#" class="btn btn-light" data-toggle='modal' data-target="#addNoteModal"><i class="fas fa-plus-circle fa-lg"></i>&nbsp;Add New note</a>
    </h5>
    <div class="card-body">
      <div class="table-responsive" id="showNote">
            <table class="table table-striped text-center">
              <thead>
                <tr>
                   <th>#</th>
                   <th>Title</th>
                   <th>Note</th>
                   <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Web Design</td>
                  <td>nv jbvjbjsadbv jbsvjknbsv bjbv sfbvjhfsbvs fvsk</td>
                  <td>
                    <a href="#" title="View Details" class="text-success infoBtn">
                    <i class="fas fa-info-circle fa-lg"></i></a>&nbsp;
                    <a href="#" title="Edit Note" class="text-primary editBtn" data-toggle="modal" data-target="#editNoteModal">
                    <i class="fas fa-edit fa-lg"></i></a>&nbsp;
                    <a href="#" title="Delete Note" class="text-danger deleteBtn">
                    <i class="fas fa-trash-alt fa-lg"></i></a>&nbsp;
                  </td>
                </tr>
              </tbody>


            </table>
      </div>
    </div>
  </div>

</div>

<!-- Start add new Note model  -->
<div class="modal fade" id="addNoteModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title text-light">Add New Note</h4>
        <button type="button"class="close text-light" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
        <form id="add-note-form" action="#" method="post" class="px-3">
          <div class="form-group">
            <input type="text" name="title" class="form-control form-control-lg" placeholder="Enter title" required>
          </div>
          <div class="form-group">
            <textarea name="note" class="form-control form-control-lg" rows="6" placeholder="Write your note here....." required></textarea>

          </div>
          <div class="form-group">
            <input type="submit" name="addNote" value="Add Note" id="AddNote" class="btn btn-success btn-block btn-lg">
          </div>

        </form>


      </div>

    </div>

  </div>

</div>

<!-- End edit model -->

!-- Start add new Note model -->
<div class="modal fade" id="editNoteModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h4 class="modal-title text-light">Edit Note</h4>
        <button type="button"class="close text-light" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
        <form id="add-note-form" action="#" method="post" class="px-3">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <input type="text" name="title" class="form-control form-control-lg" id="tile" placeholder="Enter title" required>
          </div>
          <div class="form-group">
            <textarea name="note" id="note" class="form-control form-control-lg" rows="6" placeholder="Write your note here....." required></textarea>

          </div>
          <div class="form-group">
            <input type="submit" name="editNote" value="Update Note" id="editNoteBtn" class="btn btn-info btn-block btn-lg">
          </div>

        </form>


      </div>

    </div>

  </div>

</div>

<!-- End Edit modal -->

<script type="text/javascript" src="extensions/jquery-3.5.1.min.js">
</script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"> -->
<script type="text/javascript" src="extensions/bootstrap-4.5.2-dist/js/bootstrap.bundle.min.js">
</script>
<script type="text/javascript" src="extensions/DataTables/datatables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("table").Datatable();
  });
</script>


     </body>
     </html>
