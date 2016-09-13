function validar(){
	d=document.frmCalculo;
	if(d.calcular[0].checked == false && d.calcular[1].checked == false 
			&& d.calcular[2].checked == false && d.calcular[3].checked == false 
				&& d.calcular[4].checked == false && d.calcular[5].checked == false){
		alert("Nenhuma operacao foi definida.");
		return false;
	}
}
function calculo(){
			setDefaultEdits();
        if(document.getElementById('um').checked){
            document.getElementById('vlr1').disabled = false;
			document.getElementById('vlr2').disabled = false;
        }else
		if(document.getElementById('dois').checked){
			document.getElementById('vlr1').disabled = false;
			document.getElementById('vlr2').disabled = false;
		}else
		if(document.getElementById('tres').checked){
            document.getElementById('vlr1').disabled = false;
            document.getElementById('vlr2').disabled = false;
        }else
		if(document.getElementById('quatro').checked){
			document.getElementById('vlr1').disabled = false;
			document.getElementById('vlr2').disabled = false;
		}else
		if(document.getElementById('cinco').checked){
			document.getElementById('vlr1').disabled = false;	
		}else
		if(document.getElementById('seis').checked){
			document.getElementById('vlr1').disabled = false;
		}
	}
function setDefaultEdits(){
			document.getElementById('vlr1').disabled = true;
			document.getElementById('vlr2').disabled = true;
}
