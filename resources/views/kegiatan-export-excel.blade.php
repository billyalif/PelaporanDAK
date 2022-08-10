<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
</head>
<body>
    <table>
        <tr>
            <th colspan="9">LAPORAN KEMAJUAN PELAKSANAAN KEGIATAN</th>
        </tr>
        <tr>
            <th colspan="9">DANA ALOKASI KHUSUS (DAK) NON FISIK BANTUAN OPERASIONAL SEKOLAH (BOS)</th>
        </tr>
        <tr>
            <th colspan="9">TAHUN ANGGARAN 2022</th>
        </tr>
        <tr>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td>:Jawa Timur</td>
        </tr>
        <tr>
            <td>Satker</td>
            <td>:{{ $satker[0] }}</td>
        </tr>
        <tr>
            <td>Triwulan</td>
            <td>:2</td>
        </tr>
        <tr>
        </tr>
        <table style="border:1px solid black;border-collapse:collapse;">
            <thead style="border:1px solid black;border-collapse:collapse;">
                <tr>
                    <th style="border:1px solid black;border-collapse:collapse;" rowspan="2">No</th>
                    <th style="border:1px solid black;border-collapse:collapse;" rowspan="2">Sub Bidang/Kegiatan</th>
                    <th style="border:1px solid black;border-collapse:collapse;" colspan="3">Perencanaan Kegiatan</th>
                    <th style="border:1px solid black;border-collapse:collapse;" colspan="3">Keuangan</th>
                    <th style="border:1px solid black;border-collapse:collapse;" rowspan="2">Deskripsi Kegiatan</th>
                </tr>
                <tr>
                    <th style="border:1px solid black;border-collapse:collapse;">Vol</th>
                    <th style="border:1px solid black;border-collapse:collapse;">Satuan</th>
                    <th style="border:1px solid black;border-collapse:collapse;">Jumlah Penerima</th>
                    <th style="border:1px solid black;border-collapse:collapse;">Pagu Diterima</th>
                    <th style="border:1px solid black;border-collapse:collapse;">Pagu Dibelanjakan</th>
                    <th style="border:1px solid black;border-collapse:collapse;">Metode Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kegiatan as $data)
                <tr>
                    <td style="border:1px solid black;border-collapse:collapse;">{{ $no++ }}</td>
                    <td style="border:1px solid black;border-collapse:collapse;">{{ $data->nama_kegiatan }}</td>
                    <td style="border:1px solid black;border-collapse:collapse;">{{ $data->volume }}</td>
                    <td style="border:1px solid black;border-collapse:collapse;">{{ $data->satuan }}</td>
                    <td style="border:1px solid black;border-collapse:collapse;">{{ $data->jumlah_penerima_manfaat }}</td>
                    <td style="border:1px solid black;border-collapse:collapse;">{{ $data->pagu_diterima }}</td>
                    <td style="border:1px solid black;border-collapse:collapse;">{{ $data->pagu_dibelanjakan }}</td>
                    <td style="border:1px solid black;border-collapse:collapse;">{{ $data->metode_pembayaran }}</td>
                    <td style="border:1px solid black;border-collapse:collapse;">{{ $data->keterangan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </table>
        
{{-- 
    <table>
        <thead>

        </thead>
    </table> --}}
</body>
</html>