<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body style="margin: 0; padding: 0;">
    <table align="center" border="1" cellpadding="0" cellspacing="0" width="600">
        <tr>
            <td bgcolor="#3949ab" style="padding: 10px 10px 10px 10px; display:flex; align-items:center;">
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td>
                            <!-- <img src="asset/sentra_vidya_utama.jpg" width="100" height="100"/> -->
                        </td>
                        <td width="100%">
                            <p style="color:white;font-size:25px; text-align:center;">
                                <strong>Verify Your Account Email Address
                            </p>
                            <p style="color:white;font:size 12px;text-align:center; margin-left:15px;">
                                Sistem Informasi Kegiatan Kanwil Kementerian Agama Prov. Lampung</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                <table style="width:100%;border-collapse:collapse">

                    <tr>
                        <td style="background:white;">
                            <p style="font-size:14px;margin-bottom:20px; margin-top:20px;">Hai,
                                <?php echo $name ?>.</p>
                            <p style="font-size:14px;margin-bottom:20px">Silahkan Verifikasi Akun Anda!</p>
                            <div style="text-align:center;margin-top:30px; margin-bottom:20px;">
                                <a href="<?= $link ?>"
                                    style="background-color:#0095FF;border:none;color:white;padding:10px 20px;text-align:center;text-decoration:none;font-size:14px">Verifikasi</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#3949ab">
                <table style="width:100%;border-collapse:collapse">
                    <tr>
                        <td align="center" style="padding:30px;background:none">
                            <p style="margin:0;margin-bottom:0;color:white;text-align:center;font-size:14px">
                                <strong><?php echo 'Kanwil Kementerian Agama Provinsi Lampung'  ?><br /><?php echo 'Jalan Cut Meutia, No 27, Gulak Galik, Teluk Betung Utara, Bandar Lampung' ?></strong>
                            </p>
                            <p style="margin:0;margin-bottom:0;color:white;text-align:center;font-size:14px">
                                <small><i>Jika anda tidak pernah meminta pengiriman email ini anda bisa
                                        mengabaikannya.</i></small>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>