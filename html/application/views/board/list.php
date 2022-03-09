<html>
    <head>
        <title>게시판 리스트</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
            rel="stylesheet">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>

        <center>
        <table border=1 class="container mt-5 col-5">
            <tr class="bg-primary">
                <td class="text-info">번호</td>
                <td class="text-info">제목</td>
                <td class="text-info">작성자</td>
            </tr>
                <?php
                foreach($list as $row)
                { 
                ?>
            <tr>
                <td><?php echo $row['_id']?></td>
                <td><a href='/index.php/board/view?id=<?php echo $row['_id']?>'><?php echo $row['title']?></a></td>
                <td><?php echo $row['name']?></td>
            </tr>
                <?php }?>
        </table>
            <br />
            <form method="get">
                    <div class="col col-4">
                        <input type='text' name="search" value="<?php echo $search?>" class="form-control">
                    </div>
                   <input type="submit" value="검색하기" class="btn btn-primary">
            </form>

                    <?php echo $page_nation;?><br />


        <a href='/index.php/board/input/' class="btn btn-primary">글쓰기</a>
        </center>
    </body>
</html>
