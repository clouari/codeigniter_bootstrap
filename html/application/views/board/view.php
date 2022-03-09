<html>
    <head>
        <title>게시글 보기</title>    
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
        <div class="container mt-5 col-5">

            <div class="row form-floating mb-3 mt-3">
        제목 : <?php echo $result->title?> <br />
            </div>

            <div class="row form-floating mb-3 mt-3">
        작성자 : <?php echo $result->name?> <br />
            </div>

            <div class="row form-floating mb-3 mt-3">
        내용 :
        <?php echo nl2br($result->content)?>
        <br /><br />
            </div>

        <div>
            <div class=mb-3>
    <a href="/index.php/board/update?id=<?php echo $result->_id?>" class="btn btn-primary">글수정</a> 

    <a href="/index.php/board/list" class="btn btn-primary">목록으로</a> 

    <a href="javascript:board_delete('<?php echo $result->_id?>')" class="btn btn-primary">글삭제</a>

        
        </div>       

        </div>
    </body>
    </html>


    
<script>
function board_delete(str)
{
    if(confirm("진짜 삭제 하실래요?"))
    {
        location.href="/index.php/form/board_delete?id="+str;
    }
}
</script>


