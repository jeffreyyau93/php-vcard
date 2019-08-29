<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400&display=swap">
    <link rel="stylesheet" href="css/style.css">
    <title>vCard Generator</title>
</head>

<body>
    <div class="container">
        <h1>vCard 產生器</h1>
        <form method="post" action="api.php" enctype="multipart/form-data">
            <div class="info">
                <p>
                    <span class="mr15">名稱</span><input type="text" name="user" value="新海誠">
                </p>
                <p>
                    <span class="mr15">職稱</span><input type="text" name="title" value="前端網頁工程師">
                </p>
                <p>
                    <span class="mr10" style="vertical-align:top">技能</span>
                    <textarea name="skill" cols=30 rows=10>HTML/CSS網頁概念基礎，JS/JQ前端網頁設計，Vue.js框架設計規劃，PHP/MySQL資料處理，Adobe Ps/Ai平面設計，UI/UX設計</textarea>
                </p>
                <p>
                    <span class="mr5">email</span><input type="text" name="mail" value="makoto2019@gmail.com">
                </p>
                <p>
                    <span class="mr15">電話</span><input type="text" name="phone" value="0900-000-123">
                </p>
                <hr>
                <p>
                    <span class="mr15">照片</span><input type="file" name="who">
                </p>
                <p>
                    <span class="mr15">版型</span>
                    <select name="layout">
                        <option value="rainbow" selected>彩虹</option>
                        <option value="scratch">刮痕</option>
                        <option value="wood">木紋</option>
                    </select>
                </p>
            </div>
            <input type="submit" value="預覽">
        </form>
    </div>
</body>

</html>