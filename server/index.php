<html>
<head>
    <title>test</title>
    <meta charset="utf-8">

    <style>
        #kvadrat{
            width: 100px;
            height: 100px;
            background: #000000;
            position: absolute;
        }
    </style>
<script type="text/javascript">

    document.addEventListener('mousemove', e => {
        kvadrat.style.left = e.pageX + "px";
        kvadrat.style.top = e.pageY + "px";
    });
    var w = document.documentElement.clientWidth;
    var h = document.documentElement.clientHeight;

</script>
</head>
<body>
<div id="kvadrat"></div>
</body>
</html>