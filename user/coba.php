<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="">
</head>
<body>
        <form action="" method="post">
        <table border="0">
                <tr>
                        <td><label>Apakah Anda Sudah Makan ?</label></td>
                        <td>:</td>
                        <td>Sudah <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Belum <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck"></td>
                        <td>
                            
                        </td>
                        <tr>
                                <td></td>
                                <td></td>
                                <td id="ifYes" style="display:none">
                                        Jika Iya, Makan Apa Tadi ? <input type='text'><br>

                                        Mengapa Makan itu ?  <input type='text'>
                                </td>
                        </tr>
                        <tr>
                                <td>other 3</td>
                                <td>:</td>
                                <td><input type='text' id='other3' name='other3'></td>
                        </tr>
                        <tr>
                                <td>other 4</td>
                                <td>:</td>
                                <td><input type='text' id='other4' name='other4'></td>
                        </tr>
                        <tr>
                                <td><input type='submit' id='other4' name='other5' value='Simpan'></td>
                        </tr>
                </table>
        </form>
     
<script type="text/javascript">
    function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';
}
</script>
</body>

</html>