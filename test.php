<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Две колонки</title>
<style type="text/css">
body {
    background-color: #1E1E1E;
    font-family: Arial, sans-serif;
    color: #DADADA;
}
div { border-radius: 24px; }
div.content {
    background-color: #262626;      /* Цвет фона */
    border: 1px solid black;        /* Толщина, тип и цвет рамки */
    margin: 1% 15% 1% 15%;          /* Отступ блока */
    padding: 15px;                  /* Отступ текста */
}
table.start {
    width: 70%; /* Ширина всей таблицы */
}
td {
    padding: 5px;
    border-radius: 24px;
}
td.startcol {
    width: 100px;
    height: 100px;
    background-color: #353535;
    border: 1px solid black;
    text-align: center;
}
td.startspace {                     /* Расстояние между колонками */
    width: 40%;
}
p {
    text-align: justify; /* Выравнивание по ширине */
    text-indent: 25px; /* Отступ первой строки в пикселах */
}
a {
    color: #A191E1;
    text-decoration: none;          /* Отменяем подчеркивание у ссылки */
}

a.nav { font-size: 80%; }

a:hover { text-decoration: underline !important; }

</style>
</head>
<body>
    <div class="content">
    <h1>Мир тебе, Странник!</h1>
    <p>Этот сайт в формате вики про выдуманные и изменённые мной миры, которые я выделяю из Omniverse, и записываю здесь.</p>

    <p>В данный момент он по большей части используется для развития одно мира и цикла рассказов, под общим названием: "История Хэувро́хиос".</p>
    <p>
        Так же здесь представлено и несколько других миров данного объединения. Большинство миров "поклоняется" таким жанрам как средневековое-фэнтези и фантастика. Но если говорить на чистоту это сборная солянка из разных культовых книг, фильмов, сериалов, игр, а так же легенд, фольклоров, сказок, и многое другое.
    </p>

    <table cellspacing="0" class="start" align="center"><tr> 
        <td class="startcol"><a href="news.html"><b>Новости</b></a><br><br>Новости по развитию миров и сайта-вики.</td>
        <td class="startspace"></td>
        <td class="startcol"><a href="worlds\ovk_void.html"><b>Пустота</b></a><br><br>Этакое междумирье. Список миров.</td>
    </tr></table>

    <?php include ("test2.php");?>
</div>
</body>
</html>
