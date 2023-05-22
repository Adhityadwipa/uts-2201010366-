<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Ruang</title>
</head>
<body>

    <form id="luasBalok" autocomplete="off">
        <center>
            <table>
                <tr>
                    <td></td>
                    <td><h2>Menghitung Luas Balok</h2></td>
                </tr>
                <tr>
                    <td><label for="panjang">Panjang</label></td>
                    <td><input type="number" id="panjang" placeholder="Masukkan panjang"></td>
                </tr>
                <tr>
                    <td><label for="lebar">Lebar</label></td>
                    <td><input type="number" id="lebar" placeholder="Masukkan lebar"></td>
                </tr>
                <tr>
                    <td><label for="tinggi">Tinggi</label></td>
                    <td><input type="number" id="tinggi" placeholder="Masukkan tinggi"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" id="hitung">Hitung</button></td>
                </tr>
            </table>
        </center>
    </form>
    
<script>

    var luasBalok   = document.getElementById("luasBalok");
    var hitung      = document.getElementById("hitung");

    luasBalok.addEventListener("submit", function(event) 
    {
        event.preventDefault();

        var panjang = parseFloat(document.getElementById("panjang").value);
        var lebar   = parseFloat(document.getElementById("lebar").value);
        var tinggi  = parseFloat(document.getElementById("tinggi").value);
        var luas    = panjang*lebar*tinggi;
        document.write('<h1><br> Luas dari Bangun Ruang Balok tersebut adalah '+luas+'</h1>');

    }
    );

</script>

</body>
</html>