<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <title>Formulaire de réservation</title>
</head>
<body>
<div class="container">
    <h6 class="display-4 text-center">Formulaire de réservation</h6>

    <form method="post" name="form" id="form" action="mailto:jacknouatin@yahoo.fr" enctype="text/plain">
        <div class="list-inline">
            <div class="list-inline-item font-italic">
                <label>Nom</label><br/><br/>
                <label>Prénom</label><br/><br/>
                <label>Adresse</label><br/><br/>
                <label>Code Postal</label><br/><br/>
                <label>Ville</label><br/><br/>
                <label>Téléphone</label><br/><br/>
                <label>e-mail</label>
            </div>
            <div class="list-inline-item">
                <input type="text" name="last" id="last" class="text-right" onkeyup="stringUpper(this.value)" /><br/><br/>
                <input type="text" name="first" id="first" class="text-right" onkeyup="stringUpper(this.value)"/><br/><br/>
                <input type="text" name="address" id="address" class="text-right"/><br/><br/>
                <input type="" name="cp" id="cp" pattern="[^0*9]{5}" class="text-right"/><br/><br/>
                <input type="text" name="city" id="city" class="text-right" class="text-right"/><br/><br/>
                <input type="tel" name="phone" id="phone" pattern="^0[0-9]{9}" class="text-right"/><br/><br/>
                <input type="email" name="email" id="email" pattern="(^[a-z0-9]+)@([a-z0-9])+(\.)([a-z]{2,4})" class="text-right"/>

            </div>
        </div>
    </form>

</div>


<script>

function stringUpper(val) {
    form.last.value = (val.toUpperCase());
}
function stringUpper(val) {
    form.first.value = (val.toUpperCase());
}

</script>
</body>
</html>
<?php
