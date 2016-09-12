function validacao(){
	d = document.frmAula02;
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
	//Validando Sexo
	if(d.rdSexo[0].checked == false && d.rdSexo[1].checked == false){
		alert("Informe o sexo.");
		return false;
	}
	//Validando Profissão
	if(d.profissao.selectedIndex == ""){
		alert('Informe a Profissao.');
		d.profissao.focus();
		return false;
	}
	//Validando Textarea
	if(d.voce.value == ""){
		alert('Por Favor, escreva algo sobre voce.');
		d.voce.focus();
		return false;
	}
	//Validando Politica
	if(d.concordar.checked == false){
		alert("Voce precisa concordar com a Politica de Uso.");
		return false;
	}
}