function required()
{
var empt1 = document.forms["js"]["name1"].value;
var empt2 = document.forms["js"]["noic1"].value;
var empt3 = document.forms["js"]["name2"].value;
if (empt1 == "") {
	alert("Sila isi nama Ketua Pentaksir");
	return false;
}else if (empt2 == "") {
	alert("Sila isi No IC Ketua Pentaksir");
	return false;
}else if (empt3 == "") {
	alert("Sila isi nama Pentaksir 1");
}else {
	alert("Data telah Disimpan");
	return true;
}
}