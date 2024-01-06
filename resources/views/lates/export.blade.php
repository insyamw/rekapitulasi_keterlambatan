<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>

    <style>

    </style>

</head>

<body>
    
    <center>
        <h3>SURAT PERNYATAAN</h3>
        <h3>TIDAK AKAN DATANG TERLAMBAT KESEKOLAH</h3>
    </center>

    <br>
    <br>

    <p>Yang bertada tangan dibawah ini :</p>

    <table>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td>{{ $late->student?->nis }}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $late->student?->name }}</td>
        </tr>
        <tr>
            <td>Rombel</td>
            <td>:</td>
            <td>{{ $late->student?->rombel_id }}</td>
        </tr>
        <tr>
            <td>Rayon</td>
            <td>:</td>
            <td>{{ $late->student?->rayon_id }}</td>
        </tr>
    </table>

    <br>
    <br>

    <p>
        Dengan ini menyatakan bahwa saya telah melakukan pelanggaran tata tertib sekolah, yaitu terlambat datang ke sekolah sebanyak 3 kali yang mana hal tersebut termasuk kedalam pelanggaran kedisiplinan. Saya berjanji tidak akan terlambat datang ke sekolah lagi. Apabila saya terlambat datang ke sekolah lagi saya siap diberikan sanksi yang sesuai dengan peraturan sekolah. 
    </p>

    <br>
    <br>

    <p>
        Demikian surat pernyataan terlambat ini saya buat dengan penuh penyesalan
    </p>

    <br>
    <br>

    <table style="text-align: center; width: 100%; margin-bottom: 100px;">
        <tr>
            <td></td>
            <td>Bogor, 24 November 2023</td>
        </tr>
        <tr>
            <td>Peserta Didik,</td>
            <td>Orang Tua/Wali Peserta Didik,</td>
        </tr>
        <tr>
            <td style="padding-top: 100px;">(UI)</td>
            <td style="padding-top: 100px;">(..................)</td>
        </tr>
        <tr>
            <td style="padding-top: 30px;">Pembimbing Siswa,</td>
            <td style="padding-top: 30px;">Kesiswaan,</td>
        </tr>
        <tr>
            <td style="padding-top: 100px;">(PS Wikrama 1)</td>
            <td style="padding-top: 100px;">(..................)</td>
        </tr>
    </table>

</body>

</html>