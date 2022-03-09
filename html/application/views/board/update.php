<html>
    <head>
        <title>수정하기</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
            rel="stylesheet">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js">
        </script>
    </head>
    <body>

        <div class="row">
                   <div class="row col-3"></div>
                   <div class="row col-6">
                    <form method="post" action="/index.php/form/board_update">

                        <div class="row form-floating mb-3 mt-3">
                           <input type="hidden" name="id" value="<?php echo $result->_id?>">
                        </div>

                        <div class="row form-floating mb-1 mt-1">
                              <input type="text" name="title" value="<?php echo $result->title?>" class=form-control>
                              <label for="title">제목</label> <br /><br />
                        </div>

                        <div class="row form-floating mb-1 mt-1">
                        <textarea name="content" class=form-control><?php echo $result->content?></textarea>
                             <label for="content">내용</label> <br /><br />
                        </div>

                        <div>
                              <input type="submit" value="글등록" class="btn btn-primary">
                        </div>

                </form>
                </div>
            </div>

    </body>
</html>
