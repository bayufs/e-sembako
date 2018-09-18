<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<title>Excel To HTML using codebeautify.org</title>
		</head>
		<body>
				<table cellspacing=0 border=1>
					<tr>
						<td  colspan="19" style="min-width:50px;text-align: center" >REKAPITULASI PENERIMAAN BPNT TAHUN</td>
						
					</tr>
					<tr>
						<td colspan="19" style="min-width:50px;text-align: center">WILAYAH RW 012</td>
						
					</tr>
					<tr>
						<td colspan="19" style="min-width:50px;text-align: center">KELURAHAN KAPUK </td>
						
					</tr>
					<tr>
						<td colspan="19" style="min-width:50px;text-align: center">KECAMATAN CENGKARENG KOTA ADMINISTRASI JAKARTA BARAT </td>
						
					</tr>
					<tr>
						<td style=min-width:50px>NO</td>
						<td style=min-width:50px>NAMA</td>
						<td style=min-width:50px>L/P</td>
						<td style=min-width:50px>ALAMAT</td>
						<td style=min-width:50px>NIK</td>
						<td style=min-width:50px>NO. KARTU </td>
						<td style=min-width:50px>TAHAP</td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px>KET</td>
					</tr>
					<tr>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px>TGL/ BLN / THN</td>
						<td style=min-width:50px>TGL/ BLN / THN</td>
						<td style=min-width:50px>TGL/ BLN / THN</td>
						<td style=min-width:50px>TGL/ BLN / THN</td>
						<td style=min-width:50px>TGL/ BLN / THN</td>
						<td style=min-width:50px>TGL/ BLN / THN</td>
						<td style=min-width:50px>TGL/ BLN / THN</td>
						<td style=min-width:50px>TGL/ BLN / THN</td>
						<td style=min-width:50px>TGL/ BLN / THN</td>
						<td style=min-width:50px>TGL/ BLN / THN</td>
						<td style=min-width:50px>TGL/ BLN / THN</td>
						<td style=min-width:50px>TGL/ BLN / THN</td>
						<td style=min-width:50px></td>
					</tr>
					<tr>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
					</tr>
					<tr>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px>1</td>
						<td style=min-width:50px>2</td>
						<td style=min-width:50px>3</td>
						<td style=min-width:50px>4</td>
						<td style=min-width:50px>5</td>
						<td style=min-width:50px>6</td>
						<td style=min-width:50px>7</td>
						<td style=min-width:50px>8</td>
						<td style=min-width:50px>9</td>
						<td style=min-width:50px>10</td>
						<td style=min-width:50px>11</td>
						<td style=min-width:50px>12</td>
						<td style=min-width:50px></td>
                    </tr>
                    <?php $no=1; ?>
                    @foreach ($partisipan as $partisipan)
                    <tr>
						<td style=min-width:50px><?php echo $no  ?></td>
						<td style=min-width:50px>{{ $partisipan->nama }}</td>
						<td style=min-width:50px>{{ $partisipan->kelamin }}</td>
						<td style=min-width:50px>{{ $partisipan->alamat }}</td>
						<td style=min-width:50px>{{ $partisipan->nik }}</td>
						<td style=min-width:50px>{{ $partisipan->no_kartu }}</td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
						<td style=min-width:50px></td>
                    </tr>
                    <?php $no++; ?>
                    @endforeach

				</table>
				<hr>
				</body>
			</html>