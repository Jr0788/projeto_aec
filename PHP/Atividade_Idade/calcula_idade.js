function valida_cadastro(){
	d = document.formCadastro;
	//validando NOME
	if(d.txtNome.value == ""){
		alert('Informe o Nome.');
		d.txtNome.focus();
		return false;
	}
	//validando ANO
	if(d.ano.value == ""){
		alert('Favor informar ano de nascimento');
		d.ano.focus();
		return false;
	}
	//Validando SEXO
	if(d.rdSexo[0].checked == false && d.rdSexo[1].checked == false){
		alert("Informe o sexo.");
		return false;
	}
}