<div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sửa sinh viên</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <input type="hidden" id="editIndex" name="edit_index">
                        <div class="form-group">
                            <label for="txtTen">Họ và tên</label>
                            <input type="text" class="form-control" id="txtTen" name="ten" required>
                        </div>
                        <div class="form-group">
                            <label for="txtEmail">Email</label>
                            <input type="email" class="form-control" id="txtEmail" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="txtDiachi">Địa chỉ</label>
                            <input type="text" class="form-control" id="txtDiachi" name="diachi" required>
                        </div>
                        <div class="form-group">
                            <label for="txtSDT">Số điện thoại</label>
                            <input type="text" class="form-control" id="txtSDT" name="sdt" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>