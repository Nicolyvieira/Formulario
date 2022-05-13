<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professores para Vacinação</title>
</head>
<body>
    <h1>Cadastro de Professores para Vacinação</h1>
        <form action="cadastra-vacina.php" method="post">
            <label>Nome: </label>
            <input type="text" name="txtNome" id="txtNome">
             <br>

            <label>CPF:</label>
            <input type="text" name="txtCPF" id="txtCPF">
             <br>

            <label>Data de Nascimento</label>
            <input type="date" name="txtData" id="txtData">
             <br>
            
            <label>Dose:</label>
            <input type="Radio" name="ckDose" id="ckDose" value="1">1ªDose
            <input type="Radio" name="ckDose" id="ckDose" value="2">2ªDose
            <input type="Radio" name="ckDose" id="ckDose" value="3">3ªDose
            <input type="Radio" name="ckDose" id="ckDose" value="4">4ªDose
             <br>

           <Label>Selecione a escola sede:</Label>
           <select name="slSes" id="slSes">
               <option value="1"> Colégio Eduki</option>
               <option value="2"> Colégio Nef</option>
               <option value="3"> Colégio Suller Garcia</option>
               <option value="4"> Colégio Dom Felipe</option>
               <option value="5"> Colégio Mukai</option>
           </select>
             <br>
             <input type="submit" value="Cadastrar">

        </form>

</body>
</html>