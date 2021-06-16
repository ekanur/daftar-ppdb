<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Antrian Layanan PPDB SMK N 2 Depok</title>


	<!-- <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}" /> -->
	<!-- <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" /> -->

	<!--     Fonts and icons     -->
	<!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" /> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /> -->

	<!-- CSS Files -->
	<!-- <link href="{{asset('css/app.css')}}" rel="stylesheet" /> -->
	<!-- <link href="{{asset('assets/css/material-bootstrap-wizard.css')}}" rel="stylesheet" /> -->

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<!-- <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" /> -->
    <style>
        table-responsive {
    min-height: .01%;
    overflow-x: auto;
}

.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
}
table {
    background-color: transparent;
}
table {
    border-spacing: 0;
    border-collapse: collapse;
}

.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
}
    </style>
</head>

<body>
    <table class="table table-responsive">
    <tr>
        <td colspan=2  style="text-align:center">
            <h3>Panitia Pelayanan PPDB SMK N 2 Depok</h3>
            Bukti Pendaftaran Antrian
        </td>
    </tr>
    <tr>
        <td>Nama</td>
        <td> : {{ $antrian_baru->nama_lengkap }}</td>
    </tr>
    <tr>
        <td>NISN</td>
        <td> : {{ $antrian_baru->nisn }}</td>
    </tr>
    <tr>
        <td>No. Antrian</td>
        <td> : {{ $antrian_baru->antrian }}</td>
    </tr>
    <tr>
        <td>Tanggal Layanan</td>
        <td> : {{ $antrian_baru->tanggal_layanan }}</td>
    </tr>

    <tr>
        <td></td>
        <td><br/><br/><strong>TTD</strong><br/>
        <br/><br/>
        <u>Panitia PPDB SMKN 2 Depok</u>
    </td>
    </tr>
</table>
</body>
</html>
