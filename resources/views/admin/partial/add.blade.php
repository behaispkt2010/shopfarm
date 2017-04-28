<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{url('/')}}/maps/css/libs.min.css">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="{{url('/')}}/maps/js/maplace.min.js"></script>
</head>
<body>
<style>
    #position{
        display: inline-block;
    }
    #position p{
        cursor: pointer;
    }
    #position p:hover{
        background: #5bc0de;
    }
</style>
<form action="" method="Post" style="width: 500px; margin: 0px auto">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <h3>Example position</h3><br><br>
    <div id="position">
        <p> vị trí 1: <span class="p1">10.824264</span>, <span class="p2">106.640895</span></p>
        <p>vị trí 2: <span class="p1">10.829512</span> , <span class="p2">106.643077</span></p>
        <p> vị trí 3: <span class="p1">10.832420</span>, <span class="p2">106.644193</span></p>
        <p> vị trí 4: <span class="p1">10.833341</span>  , <span class="p2">106.643721</span></p>
        <p>vị trí 5: <span class="p1">10.837011</span>, <span class="p2">106.636233</span></p>
        <p> vị trí 6: <span class="p1">10.832520</span> , <span class="p2">106.638893</span></p>
    </div>
    <br>
    <br>
    <label for="">Demo name: S.ROMERO</label>
    <br>
    <br>
    Id User:<br>
    <input type="text" name="id_user" value="1">
    <br>
    Lat:<br>
    <input type="text" name="lat" id="lat">
    <br>
    Long:<br>
    <input type="text" name="lon" id="lon">
    <br>
    <br>
    <input type="submit" value="add" style="
    width: 100px;
    height: 30px;
    color: #fff;
    background: #00BCD4;
">
    <br>

</form>

<script>
    $(document).ready(function(){
        $('#position p').click(function(){
           var lat = $(this).find('.p1').html();
            var lon = $(this).find('.p2').html();
            $('#lat').val(lat);
            $('#lon').val(lon);

        });
    });
</script>
</body>
</html>