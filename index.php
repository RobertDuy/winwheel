<html style="background-color: #f4f4f4;">
<head>
    <meta charset="UTF-8">
    <title>Quay th&#432;&#7903;ng xe A1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans Condensed:300italic,300,700" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./main.css" type="text/css" />
    <script type='text/javascript' src='winwheel_1.2.js'></script>
</head>
<body style="background-color: #f4f4f4; width: 100%;">
<div class="container-fluid" style="margin-top: 10%;">
    <div class="row div-background">
        <div class="col-md-9">
            <canvas class="the_canvas" id="myDrawingCanvas" width="400" height="400">
                <p class="noCanvasMsg" align="center">Sorry, your browser doesn't support canvas.<br />Please try another.</p>
            </canvas>
            <img src="btn_spin.png" class="btn-quay" onclick="startSpin();" />
        </div>
        <div class="col-md-3">
            <div style="margin-top: 90%;">
                <form>
                    <div class="form-group">
                        <label>H&#7885; tên</label>
                        <input type="text" class="form-control" id="name" placeholder="H&#7885; tên">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>S&#7889; &#273;i&#7879;n tho&#7841;i</label>
                        <input type="text" class="form-control" id="phone" placeholder="ex: 01211111111">
                    </div>
                </form>
                <span style="font-size: 16px;">Nh&#7853;n quà li&#7873;n tay <br> Quay ngay trúng l&#7899;n</span>
            </div>
        </div>
    </div>
</div>
<br />
<script>
    begin();
</script>
</body>
</html>