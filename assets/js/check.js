$(document).ready(function(){

	var error_nama = false;
	var error_email = false;
	var error_pass1 = false;
	var error_pass2 = false;
	var error_tanggal = false;

	var error_kabupaten = false;
	var error_kecamatan = false;
	var error_kelurahan = false;
	var error_alamat = false;
	var error_kodepos = false;
	var error_no_tlp = false;

	var error_check = false;

	$('#nama_lengkap').focusout(function() {
		check_nama();
	});

	$('#email').keyup(function(){
		check_email();
	});

	$('#password1').keyup(function(){
		check_pass1();
	});

	$('#password2').keyup(function(){
		check_pass2();
	});

	$('#tanggal').focusout(function(){
		check_tanggal();
	});


	$('#kabupaten').focusout(function(){
		check_kabupaten();
	});

	$('#kecamatan').focusout(function(){
		check_kecamatan();
	});

	$('#kelurahan').focusout(function(){
		check_kelurahan();
	});

	$('#alamat').focusout(function(){
		check_alamat();
	});

	$('#kodepos').focusout(function(){
		check_kodepos();
	});

	$('#no_tlp').focusout(function(){
		check_no_tlp();
	});

	function check_nama() {
		var nama = $("#nama_lengkap").val();

		if (nama == "") {
			$('#nama_lengkap').html("<style>#nama_lengkap {background-color:#f2dede;color:#a94442}</style>");
			$('#nama_lengkap').show();
			error_nama = true;
		} else {
			$('#nama_lengkap').html("<style>#nama_lengkap {background-color:#dff0d8;color:#3c763d}</style>");
		}
	}

	function check_email() {
		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[+a-zA-Z0-9.-]+\.[+a-zA-Z]{2,4}$/i);

		if (pattern.test($('#email').val())) {
			$('#email').html('<style>#email {background-color:#dff0d8;color:#3c763d}</style>');
		} else {
			$('#email').html("<style>#email {background-color:#f2dede;color:#a94442}</style>");
			$('#email').show();
			error_email = true;
		}
	}

	function check_pass1() {
		var pjg_password1 = $("#password1").val().length;

		if (pjg_password1 < 8) {
			$('#password1').html("<style>#password1 {background-color:#f2dede;color:#a94442}</style>");
			$('#password1').show();
			error_pass1 = true;
		} else {
			$('#password1').html('<style>#password1 {background-color:#dff0d8;color:#3c763d}</style>');
		}
	}

	function check_pass2() {
		var password1 = $("#password1").val();
		var password2 = $("#password2").val();

		if (password1 != password2) {
			$('#password2').html("<style>#password2 {background-color:#f2dede;color:#a94442}</style>");
			$('#password2').show();
			error_pass2 = true;
		} else {
			$('#password2').html('<style>#password2 {background-color:#dff0d8;color:#3c763d}</style>');
		}
	}

	function check_tanggal() {
		var tanggal = $("#tanggal").val();

		if (tanggal == "" || tanggal > 31) {
			$('#tanggal').html("<style>#tanggal {background-color:#f2dede;color:#a94442}</style>");
			error_tanggal = true;
		} else {
			$('#tanggal').html("<style>#tanggal {background-color:#dff0d8;color:#3c763d}</style>");
		}
	}



	function check_kabupaten() {
		var kabupaten = $("#kabupaten").val();

		if (kabupaten == "") {
			$('#kabupaten').html("<style>#kabupaten {background-color:#f2dede;color:#a94442}</style>");
			error_kabupaten = true;
		} else {
			$('#kabupaten').html("<style>#kabupaten {background-color:#dff0d8;color:#3c763d}</style>");
		}
	}

	function check_kecamatan() {
		var kecamatan = $("#kecamatan").val();

		if (kecamatan == "") {
			$('#kecamatan').html("<style>#kecamatan {background-color:#f2dede;color:#a94442}</style>");
			error_kecamatan = true;
		} else {
			$('#kecamatan').html("<style>#kecamatan {background-color:#dff0d8;color:#3c763d}</style>");
		}
	}

	function check_kelurahan() {
		var kelurahan = $("#kelurahan").val();

		if (kelurahan == "") {
			$('#kelurahan').html("<style>#kelurahan {background-color:#f2dede;color:#a94442}</style>");
			error_kelurahan = true;
		} else {
			$('#kelurahan').html("<style>#kelurahan {background-color:#dff0d8;color:#3c763d}</style>");
		}
	}
	
	function check_alamat() {
		var alamat = $("#alamat").val();

		if (alamat == "") {
			$('#alamat').html("<style>#alamat {background-color:transparent;color:#a94442}</style>");
			error_alamat = true;
		} else {
			$('#alamat').html("<style>#alamat {background-color:#dff0d8;color:#3c763d}</style>");
		}
	}

	function check_kodepos() {
		var kodepos = $("#kodepos").val();

		if (kodepos == "") {
			$('#kodepos').html("<style>#kodepos {background-color:#f2dede;color:#a94442}</style>");
			error_kodepos = true;
		} else {
			$('#kodepos').html("<style>#kodepos {background-color:#dff0d8;color:#3c763d}</style>");
		}
	}

	function check_no_tlp() {
		var no_tlp = $("#no_tlp").val();

		if (no_tlp == "") {
			$('#no_tlp').html("<style>#no_tlp {background-color:#f2dede;color:#a94442}</style>");
			error_no_tlp = true;
		} else {
			$('#no_tlp').html("<style>#no_tlp {background-color:#dff0d8;color:#3c763d}</style>");
		}
	}

	$("#form-registrasi").submit(function(){
		error_nama = false;
		error_email = false;
		error_pass1 = false;
		error_pass2 = false;
		error_tanggal = false;

		error_kabupaten = false;
		error_kecamatan = false;
		error_kelurahan = false;
		error_alamat = false;
		error_kodepos = false;
		error_no_tlp = false;

		check_nama();
		check_email();
		check_pass1();
		check_pass2();
		check_tanggal();

		check_kabupaten();
		check_kecamatan();
		check_kelurahan();
		check_alamat();
		check_kodepos();
		check_no_tlp();
		if(error_nama == false && error_email == false && error_pass1 == false && error_pass2 == false && error_tanggal == false && error_kabupaten == false && error_kecamatan == false && error_kelurahan == false && error_alamat == false && error_kodepos == false && error_no_tlp == false) {
			return true;
		} else {
			return false;
		}
	});
	
});