<?php
echo $_COOKIE["client"]["cb"];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <title>Cours de Boostrap</title>
</head>
<body>

<div class="container">

    <h1 class="display-2 text-center">My first page <small>bootstrap</small></h1>
    <p class="text-right display-4 font-italic">This is the text ...</p><br/><br/>

    <dl>
        <dt>PHP</dt>
        <dd>- Laravel</dd>
        <dd>- Symfony</dd>
        <dt>Javascript</dt>
        <dd>- Jquery</dd>
        <dt>CSS</dt>
        <dd>- Bootstrap</dd>
    </dl>

    <br/>

    <span class="badge badge-success">Success</span>

    <br/><br/><br/>
    <h2 class="text-info">The table </h2>

    <table class="table">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Jack nouatin</td>
            <td>jack@yahoo.fr</td>
            <td>+380647475</td>
        </tr>
        <tr>
            <td>Jack nouatin</td>
            <td>jack@yahoo.fr</td>
            <td>+380647475</td>
        </tr>
        </tbody>
    </table><br/>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Jack nouatin</td>
            <td>jack@yahoo.fr</td>
            <td>+380647475</td>
        </tr>
        <tr>
            <td>Jack nouatin</td>
            <td>jack@yahoo.fr</td>
            <td>+380647475</td>
        </tr>
        </tbody>
    </table><br/><br/>
    <table class="table table-striped table-dark">
        <thead>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Password</th>
        </thead>
        <tbody>
          <tr>
              <td>GBEDEMAKOU</td>
              <td>paul@yahoo.fr</td>
              <td>+229865847</td>
              <td>**************</td>
          </tr>
          <tr>
              <td>GBEDEMAKOU</td>
              <td>paul@yahoo.fr</td>
              <td>+229865847</td>
              <td>**************</td>
          </tr>
          <tr>
              <td>GBEDEMAKOU</td>
              <td>paul@yahoo.fr</td>
              <td>+229865847</td>
              <td>**************</td>
          </tr>
        </tbody>
    </table><br/><br/>

    <table class="table table-hover table-dark">
        <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Password</th>
        </thead>
        <tbody>
        <tr>
            <td>GBEDEMAKOU</td>
            <td>paul@yahoo.fr</td>
            <td>+229865847</td>
            <td>**************</td>
        </tr>
        <tr>
            <td>GBEDEMAKOU</td>
            <td>paul@yahoo.fr</td>
            <td>+229865847</td>
            <td>**************</td>
        </tr>
        <tr>
            <td>GBEDEMAKOU</td>
            <td>paul@yahoo.fr</td>
            <td>+229865847</td>
            <td>**************</td>
        </tr>
        </tbody>
    </table><br/><br/>

    <table class="table table-bordered">
        <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Password</th>
        </thead>
        <tbody>
        <tr class="table-success">
            <td>GBEDEMAKOU</td>
            <td>paul@yahoo.fr</td>
            <td>+229865847</td>
            <td>**************</td>
        </tr>
        <tr class="table-danger">
            <td>GBEDEMAKOU</td>
            <td>paul@yahoo.fr</td>
            <td>+229865847</td>
            <td>**************</td>
        </tr>
        <tr class="table-secondary">
            <td>GBEDEMAKOU</td>
            <td>paul@yahoo.fr</td>
            <td>+229865847</td>
            <td>**************</td>
        </tr>
        </tbody>
    </table><br/><br/>


    <hr/>

    <ul class="font-weight-bold list-unstyled list-inline">
        <li class="list-inline-item">Text 1</li>
        <li class="list-inline-item">Text 2</li>
        <li class="list-inline-item">Text 3</li>
        <li class="list-inline-item">Text 4</li>
        <li>Text 5</li>
    </ul>

    <div  class="list-inline">
        <div class="list-inline-item font-italic">
            <label>Nom complet :</label><br/><br/>
            <label> email :</label><br/><br/>
            <label>Code postal :</label><br/><br/>
            <label>Phone :</label>
        </div>
        <div class="list-inline-item">
            <input type="text" name="name" class="text-right"/><br/><br/>
            <input type="email" name="email" class="text-right" /><br/><br/>
            <input type="text" name="code_postal" class="text-right" /><br/><br/>
            <input type="text" name="phone" class="text-right" />
        </div>
    </div>



    <div class="row">
        <div class="col-sm-3" ><img src="famille.jpg"/></div>
        <div class="col-sm-3"><img src="famille.jpg"/></div>
        <div class="col-sm-3"><img src="famille.jpg"/></div>
        <div class="col-sm-3"><img src="famille.jpg"/></div>
    </div><br/>

    <div class="row">
        <div class="col-sm">
            Text messages possess a language all their own; with limited room, avid texters may
            find themselves relying heavily on abbreviations or even communicating solely through emoji.
            As you continue on your French language journey, you will undoubtedly find yourself confronted with
            the reality of French texting, whether you are trying to send a message or decipher one you’ve
            received. But learning to navigate the world of text messages doesn’t have to be a painful process,
            you just need to memorize a few key abbreviations to be a texting success. So check out these 10 essential
            French texting abbreviations and start tapping away today!

        </div>
        <div class="col-sm">
            Text messages possess a language all their own; with limited room, avid texters may
            find themselves relying heavily on abbreviations or even communicating solely through emoji.
            As you continue on your French language journey, you will undoubtedly find yourself confronted with
            the reality of French texting, whether you are trying to send a message or decipher one you’ve
            received. But learning to navigate the world of text messages doesn’t have to be a painful process,
            you just need to memorize a few key abbreviations to be a texting success. So check out these 10 essential
            French texting abbreviations and start tapping away today!

        </div>
        <div class="col-sm">
            Text messages possess a language all their own; with limited room, avid texters may
            find themselves relying heavily on abbreviations or even communicating solely through emoji.
            As you continue on your French language journey, you will undoubtedly find yourself confronted with
            the reality of French texting, whether you are trying to send a message or decipher one you’ve
            received. But learning to navigate the world of text messages doesn’t have to be a painful process,
            you just need to memorize a few key abbreviations to be a texting success. So check out these 10 essential
            French texting abbreviations and start tapping away today!

        </div>
    </div><br/><br/>
    <div class="row">
        <div class="col-sm">
            Text messages possess a language all their own; with limited room, avid texters may
            find themselves relying heavily on abbreviations or even communicating solely through emoji.
            As you continue on your French language journey, you will undoubtedly find yourself confronted with
            the reality of French texting, whether you are trying to send a message or decipher one you’ve
            received. But learning to navigate the world of text messages doesn’t have to be a painful process,
            you just need to memorize a few key abbreviations to be a texting success. So check out these 10 essential
            French texting abbreviations and start tapping away today!

        </div>
        <div class="col-sm">
            Text messages possess a language all their own; with limited room, avid texters may
            find themselves relying heavily on abbreviations or even communicating solely through emoji.
            As you continue on your French language journey, you will undoubtedly find yourself confronted with
            the reality of French texting, whether you are trying to send a message or decipher one you’ve
            received. But learning to navigate the world of text messages doesn’t have to be a painful process,
            you just need to memorize a few key abbreviations to be a texting success. So check out these 10 essential
            French texting abbreviations and start tapping away today!

        </div>
        <div class="col-sm">
            Text messages possess a language all their own; with limited room, avid texters may
            find themselves relying heavily on abbreviations or even communicating solely through emoji.
            As you continue on your French language journey, you will undoubtedly find yourself confronted with
            the reality of French texting, whether you are trying to send a message or decipher one you’ve
            received. But learning to navigate the world of text messages doesn’t have to be a painful process,
            you just need to memorize a few key abbreviations to be a texting success. So check out these 10 essential
            French texting abbreviations and start tapping away today!

        </div>
    </div>
</div>









<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
    $(function(){
        //var width = $('img').width();
        //var height = $('img').height();
        //alert('W = ' + width + ' and H = ' + height);
    });
</script>
</body>
</html>
<?php
