<?php

$datas = [
	array(
		'id' => '1',
		'name' => 'Rhinos Junior Sirup 60 ml',
		'photoUrl' => 'http://192.168.0.151/anmp/img/OBAT/drug1.jpg',
		'detail' => 'RHINOS JUNIOR merupakan obat dengan kandungan Pseudoephedrine HCl dan Chlorpheniramine Maleate yang digunakan untuk meringankan gejala flu seperti bersin-bersin dan hidung tersumbat karena pilek.',
		'dosis' => 'Dewasa dan anak-anak lebih dari 12 tahun: 2 sendok takar (10 ml), 3 kali sehari. Anak-anak 6-12 tahun: 1 sendok takar (5 ml), 3 kali sehari. Anak-anak 2-5 tahun: 1/2 sendok takar (2.5 ml), 3 kali sehari. Anak-anak di bawah 2 tahun: atas petunjuk dokter.',
		'harga' => '44.200'
	),
	array(
		'id' => '2',
		'name' => 'Dextamine 10 Tablet',
		'photoUrl' => 'http://192.168.0.151/anmp/img/OBAT/drug2.jpg',
		'detail' => 'DEXTAMINE merupakan obat dengan kandungan Dexamethasone (glukokortikoid) dan Dexchlorpheniramine Maleate. Obat ini bekerja sebagai antiinflamasi, antirematik, serta antialergi/antihistamin. Dalam penggunaan obat ini harus SESUAI DENGAN PETUNJUK DOKTER.',
		'dosis' => 'PENGGUNAAN OBAT INI HARUS SESUAI DENGAN PETUNJUK DOKTER. Dewasa : 1 tablet, 3 kali per hari. Anak : 1/2 tablet, 3 kali per hari.',
		'harga' => '23.600'
	),
	array(
		'id' => '3',
		'name' => 'Counterpain Cream 30 g + Counterpain Cool Gel 15 g',
		'photoUrl' => 'http://192.168.0.151/anmp/img/OBAT/drug3.jpg',
		'detail' => 'Counterpain Cream: Membantu meredakan nyeri pada otot, sendi, nyeri, keseleo dan encok. Counterpain Cool Gel: Digunakan untuk meredakan nyeri otot dan nyeri sendi yang berhubungan dengan terkilir, memar dan cedera pada saat olahraga.',
		'dosis' => 'Sesuai kebutuhan.',
		'harga' => '44.700'
	),
	array(
		'id' => '4',
		'name' => 'FG Troches 10 Tablet',
		'photoUrl' => 'http://192.168.0.151/anmp/img/OBAT/drug4.jpg',
		'detail' => 'FG TROCHES merupakan tablet hisap Antibiotik yang memiliki kandungan Fradiomycin Sulfate dan Gramicidin-S HCl yang berfungsi untuk mengobati gingivitis, stomatitis, faringitis, bronkitis, tonsilitis, angina vincent, difteri faringeal, priodontitis. Dalam penggunaan obat ini harus SESUAI DENGAN PETUNJUK DOKTER.',
		'dosis' => 'PENGGUNAAN OBAT INI HARUS SESUAI DENGAN PETUNJUK DOKTER. Dewasa: 1 - 2 tablet, dihisap 4 - 5 kali perhari. Anak-anak : 1 tablet, dihisap 4 - 5 kali perhari.',
		'harga' => '13.300'
	),
	array(
		'id' => '5',
		'name' => 'Bioplacenton Gel 15 g',
		'photoUrl' => 'http://192.168.0.151/anmp/img/OBAT/drug5.jpg',
		'detail' => 'BIOPLACENTON merupakan obat yang mengandung Placenta Extract dan Neomycin sulfate dan digunakan untuk mengobati luka bakar, infeksi, kronik dll yang bekerja memicu pembentukan jaringan baru dan untuk wound healing, serta mencegah/mengatasi infeksi bakteri area luka.',
		'dosis' => 'PENGGUNAAN OBAT INI HARUS SESUAI DENGAN PETUNJUK DOKTER. Oleskan 4-6 x sehari atau sesuai kebutuhan pada area luka.',
		'harga' => '34.100'
	),
	array(
		'id' => '6',
		'name' => 'Cendo Xitrol Eye Drop 5 ml',
		'photoUrl' => 'http://192.168.0.151/anmp/img/OBAT/drug6.jpg',
		'detail' => 'CENDO XITROL adalah tetes mata steril yang mengandung Deksametason, Neomycin Sulfate, Poliymyxin B Sulfate yang diindikasikan untuk kondisi inflamasi mata yang responsif terhadap steroid disertai infeksi bakteri/adanya reaksi infeksi mata karena bakteri.',
		'dosis' => 'PENGGUNAAN OBAT INI HARUS SESUAI DENGAN PETUNJUK DOKTER. 1-2 tetes tiap jam (siang), dan tiap 2 jam (malam). jika respon baik dikurangi menjadi 1 tetes/4 jam. Untuk mengontrol gejala, dosis dikurangi 3-4x sehari 1 tetes.',
		'harga' => '38.800'
	),
	array(
		'id' => '7',
		'name' => 'Betadine Throat Spray 50 ml',
		'photoUrl' => 'http://192.168.0.151/anmp/img/OBAT/drug7.jpg',
		'detail' => 'BETADINE THROAT SPRAY merupakan spray mulut dengan kandungan Povidone Iodine 0.45%. Produk ini dapat membantu meredakan sakit tenggorokan, sariawan, gusi bengkak, bau mulut dan nafas tidak segar.',
		'dosis' => '1x semprot, gunakan 3 kali per hari.',
		'harga' => '140.700'
	),
	array(
		'id' => '8',
		'name' => 'Promag Suspensi 60 ml',
		'photoUrl' => 'http://192.168.0.151/anmp/img/OBAT/drug8.jpg',
		'detail' => 'PROMAG merupakan obat sakit maag yang mengandung Hydrotalcite, Magnesium Hydroxide, dan Simethicone. Obat ini diigunakan untuk meringankan gejala sakit maag akibat kelebihan asam lambung seperti perih, mual, kembung, dan nyeri ulu hati.',
		'dosis' => 'Dewasa : 1-2 sendok takar (5-10 ml), 3-4 kali sehari. Anak usia 6-12 tahun : 1 sendok takar (5 ml), 3-4 kali sehari.',
		'harga' => '14.600'
	)
];

echo json_encode($datas);