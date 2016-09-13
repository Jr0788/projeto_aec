function validacao(){
	d = document.frmAula04;
	//validando Nome
	if(d.txtNome.value == ""){
		alert('Informe o Nome.');
		d.txtNome.focus();
		return false;
	}
	//Validando Email
	if(document.getElementById("txtemail").value==""){
		alert('Informe o Email.');
		document.getElementById("txtemail").focus();
		return false
	}
	//validando CPF
	if(d.cpf.value == ""){
		alert('Informe o CPF.');
		d.cpf.focus();
		return false;
	}
	//Validando Sexo
	if(d.rdSexo[0].checked == false && d.rdSexo[1].checked == false){
		alert("Informe o sexo.");
		return false;
	}
	//validando cidade
	if(d.cid.value == ""){
		alert('Informe sua Cidade.');
		d.cid.focus();
		return false;
	}
	//Validando UF
	if(d.estado.selectedIndex == ""){
		alert('Informe UF.');
		d.estado.focus();
		return false;
	}
}