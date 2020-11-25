<div class="modal hide fade" id="book-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h4 class="modal-title" id="myModalLabel">Profile</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form method="post" action="insert-book.php" enctype="multipart/form-data">
            <!-- <input type="hidden" name="memberid" value="<?php //echo $drow['member_id']; 
                                                              ?>"> -->

            <div class="row">
              <div class="form-group col-sm-12">
                <label for="exampleInputEmail1">Book Title</label>
                <input type="text" class="form-control" placeholder="e.g. The Da Vinci Code" name="name" required>
              </div>
            </div>


            <div class="row">
              <div class="form-group col-sm-4">
                <label for="exampleInputEmail1">Author</label>
                <!-- <label for="exampleInputPassword1"> </label> -->
                <input type="text" class="form-control" placeholder="e.g. Dan Brown" name="author" required>
              </div>
              <div class="form-group col-sm-4">
                <label for="exampleInputEmail1">Publisher</label>
                <!-- <label for="exampleInputPassword1"> </label> -->
                <input type="text" class="form-control" placeholder="e.g. Doubleday" name="publisher" required>
              </div>
              <div class="form-group col-sm-4">
                <label for="exampleInputEmail1">Price</label>
                <!-- <label for="exampleInputPassword1"> </label> -->
                <input type="number" class="form-control" placeholder="Pesos" name="price" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-4">
                <label for="exampleInputEmail1">Category</label>
                <input type="text" class="form-control" placeholder="e.g. Mystery and Thriller" name="category"
                  required>
              </div>
              <div class="form-group col-sm-4">
                <label for="exampleInputEmail1">Featured?</label>
                <select class="form-control select2 select2-hidden-accessible" name="featured" style="width: 100%;"
                  aria-hidden="true" required>
                  <option selected="selected" value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
              <div class="col-sm-4 form-group">
                <label for="exampleInputPassword1">Book Image</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" name="fileimg">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-12" style="margin-bottom: 0;">
                <!-- <input type="hidden" name="memberid"> -->
                <label for="exampleInputEmail1">Description</label>
                <input type="text" class="form-control" placeholder="Brief synopis. . ." name="description" </div>
                  </div> <!-- end of the newly added -->
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fas fa-times"></span>
                Cancel</button>
              <button type="submit" name="submitted" class="btn btn-warning"><span class="fas fa-plus"></span>
                Submit</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>