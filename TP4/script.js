let selectedRow = null;
function onFormSubmit(){
    let formData = lireLeForm();
    if(selectedRow == null) {
        insererEntree(formData);
    } else {
        updateRecord(formData)
    }
    resetForm();
}
function lireLeForm() {
    let formData = {};
    formData["prenom"] = document.getElementById("prenom").value;
    formData["nom"] = document.getElementById("nom").value;
    formData["adresseMail"] = document.getElementById("adresseMail").value;
    formData["telephone"] = document.getElementById("telephone").value;
    return formData
}
function insererEntree(data) {
    let table = document.getElementById("listedecontact").getElementsByTagName('tbody')[0];
    let nouvelleLigne = table.insertRow(table.length);
    cell1 = nouvelleLigne.insertCell(0);
    cell1.innerHTML = data.prenom;
    cell2 = nouvelleLigne.insertCell(1);
    cell2.innerHTML = data.nom;
    cell3 = nouvelleLigne.insertCell(2);
    cell3.innerHTML = data.adresseMail;
    cell4 = nouvelleLigne.insertCell(3);
    cell4.innerHTML = data.telephone;
    cell5 = nouvelleLigne.insertCell(4);
    cell5.innerHTML = `<a onClick="onEdit(this)">Modifier</a>
                        <a onClick="onDelete(this)">Supprimer</a>`;
}
function resetForm(){
    document.getElementById("prenom").value ="";
    document.getElementById("nom").value ="";
    document.getElementById("adresseMail").value ="";
    document.getElementById("telephone").value ="";
    let selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("prenom").value = selectedRow.cells[0].innerHTML;
    document.getElementById("nom").value = selectedRow.cells[1].innerHTML;
    document.getElementById("adresseMail").value = selectedRow.cells[2].innerHTML;
    document.getElementById("telephone").value = selectedRow.cells[3].innerHTML;
}

function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.prenom;
    selectedRow.cells[1].innerHTML = formData.nom;
    selectedRow.cells[2].innerHTML = formData.adresseMail;
    selectedRow.cells[3].innerHTML = formData.telephone;
}

function onDelete(td) {
    if(confirm('Voulez-vous vraiment supprimer cette entrée ?')) {
    row = td.parentElement.parentElement;
    document.getElementById("listedecontact").deleteRow(row.rowIndex);
    resetForm();
    }
}