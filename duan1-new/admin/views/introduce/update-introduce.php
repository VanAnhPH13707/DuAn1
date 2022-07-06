<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cập nhật bài viết</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'introduce/save-update-introduce' ?>" method="post" enctype="multipart/form-data">
                    <div class="col-6 offset-3">
                        <input type="hidden" value="<?= $_GET['introduce_id'] ?>" name="introduce_id">
                        <?php if ($detail_introduce['image_introduce'] != "") : ?>
                            <div>
                                <img style="width:120px; heigh:100px" src="<?= ADMIN . $detail_introduce['image_introduce'] ?>" alt="">
                            </div>
                        <?php endif ?>
                        <br>
                        <div class="form-group">
                            <label for="">Ảnh: </label><br>
                            <input type="file" name="image_introduce">
                        </div>
                        <div class="form-group">
                            <label for="">Nội dung: </label>
                            <textarea name="content" id="content"><?= $detail_introduce['content'] ?></textarea>
                            <script>
                                CKEDITOR.replace('content');
                            </script>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'introduce' ?> " class="btn btn-sm btn-danger" style="width: 50%; font-weight: bold;">Hủy</a>
                            &nbsp;
                            <button name="update-introduce" type="submit" style="width: 50%; font-weight: bold;" class="btn btn-sm btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>