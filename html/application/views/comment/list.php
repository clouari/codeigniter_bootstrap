<html>
    <head>
        <title>댓글</title>
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

<table border=1> 
<?php
    foreach($result as $row)
    {
    ?>
    <tr>
        <td>작성자: <?php echo $row['name']?></td>
        <td>댓글내용 : <?php echo $row['content']?></td>
        <td><a href="javascript:comment_delete('<?php echo $row['_id']?>','<?php echo $board_id?>');">X</a></td>
    </tr>
<?php }?>     
</table>

<form method="post" action="/index.php/form/comment_insert">
    <input type="hidden" name="board_id" value="<?php echo $board_id?>">

    <div class="col col-4">

        <div class=mt-3>
    <input type="text" name="content" class="form-control">
        </div>

        <div class=mt-3>
    <input type="submit" value="댓글작성" class="btn btn-primary">
        </div>
        
    </div>
</form>

    </body>
</html>

<script>
    function comment_delete(commnet_id,board_id)
    {  
        if(confirm('정말 삭제 하시겠습니까?'))
        {
            location.href="/index.php/form/comment_delete?comment_id="+commnet_id+"&board_id="+board_id;
        }

    }
</script>
