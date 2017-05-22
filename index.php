<!DOCTYPE html>
<?php print_r ($_GET)  ?>


<html>
<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
     integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
     crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
    <title>QCM</title>
</head>
<body>
  <h1>Quelques questions de culture </h1>



  <form method="get">

  <h2>Information personelle</h2>
    <p class="text-center">
        <input type="text" name="nom" class="Nom" placeholder="Nom">
        <input type="text" name="Prénom" class="Prénom" placeholder="Prénom ">
        <input type="email"  id="exampleInputEmail2" placeholder="Email">
    </p>

  <h2>Let's go!</h2>

<div class="row">
  <div class=".col-xs-6 .col-md-4">
    <p class="text-center">

      Q.B.1 : En quelle année François Mitterrand a-t-il été élu président de la République française ?
    </p>
    <p class="text-center">
         <label class="radio-inline">
         <input type="radio" name="QB1"  value="1974"> 1974
         </label>
         <label class="radio-inline">
         <input type="radio" name="QB1"  value="1976"> 1976
         </label>
         <label class="radio-inline">
         <input type="radio" name="QB1"  value="1981"> 1981
         </label>
    </p>

      <div class=".col-xs-6 .col-md-4">
      <p class="text-center">

      Q.B.2 : Quand l'armistice de la seconde guerre mondiale a-t-elle été signée ?
      </p>
      <p class="text-center">
            <label class="radio-inline">
            <input type="radio" name="QB2" value="Mai"> Le 8 Mai 1945
            </label>
            <label class="radio-inline">
            <input type="radio" name="QB2" value="Juillet"> Le 14 juillet 1940
            </label>
            <label class="radio-inline">
            <input type="radio" name="QB2"  value="Novembre"> Le 11 Novembre 1945
            </label>
      </p>
    </div>
    <div class=".col-xs-6 .col-md-4">
    <p class="text-center">
          Q.B.3 : Avec quel instrument peut-on ouvrir une porte ?
          <p class="text-center">
            <label class="radio-inline">
            <input type="radio" name="QB3"  value="Un merle"> Un merle
            </label>
            <label class="radio-inline">
            <input type="radio" name="QB3"  value="Rossignol"> Un rossignol
            </label>
            <label class="radio-inline">
            <input type="radio" name="QB3"  value="Un pigeon"> Un pigeon
            </label>
      </p>
</div>


      <p>Q.B.4 :  Quel mot désigne l'élevage des oiseaux ?</p>
      <p>
        <label class="radio-inline">
        <input type="radio" name="QB4"  value="0stréiculture"> L'ostréiculture
        </label>
        <label class="radio-inline">
        <input type="radio" name="QB4"  value="Apiculture"> L'apiculture
        </label>
        <label class="radio-inline">
        <input type="radio" name="QB4"  value="Aviculture"> L'aviculture
        </label>
     </p>

     <p>Q.B.5 :  Quel autre nom donne-t-on aux globules blancs ?</p>
        <p>
        <label class="radio-inline">
        <input type="radio" name="QB5"  value="Leucocytes"> Leucocytes
        </label>
        <label class="radio-inline">
        <input type="radio" name="QB5"  value="Plaquettes"> Plaquettes
        </label>
        <label class="radio-inline">
        <input type="radio" name="QB5"  value="Triglycérides"> Triglycérides
        </label>
      </p>

     <p>Q.B.6 : Comment appelle-t-on un mot construit sur la base des lettres d'un autre mot ?</p>
       <p>
       <label class="radio-inline">
       <input type="radio" name="QB6"  value="Synonyme"> Synonyme
       </label>
       <label class="radio-inline">
       <input type="radio" name="QB6"  value="Lapsus"> lapsus
       </label>
       <label class="radio-inline">
       <input type="radio" name="QB6"  value="Anagramme"> anagramme
       </label>
     </p>

    <p>Q.B.7. Où se trouve le siège de l'UNESCO ?</p>
    <p>
      <label class="radio-inline">
      <input type="radio" name="QB7"  value="Londres"> Londres
      </label>
      <label class="radio-inline">
      <input type="radio" name="QB7"  value="Paris"> Paris
      </label>
      <label class="radio-inline">
      <input type="radio" name="QB7"  value="Genève"> Genève
      </label>
    </p>

      <p>Q.B.8: Que désigne le terme "mandarin"?</p>
      <p>
        <label class="radio-inline">
        <input type="radio" name="QB8"  value="Fruit"> Un fruit
        </label>
        <label class="radio-inline">
        <input type="radio" name="QB8"  value="Fonctionnaire_chinois"> Un fonctionnaire de l'empire chinois
        </label>
        <label class="radio-inline">
        <input type="radio" name="QB8"  value="Mammifère"> Un mammifère marin
        </label>
      </p>

      <p>Q.B.9 : Quelle est la devise de l'Union européenne ?</p>
      <p>
        <label class="radio-inline">
        <input type="radio" name="QB9"  value="Liberté"> Liberté, égalité, fraternité          </label>
        <label class="radio-inline">
        <input type="radio" name="QB9"  value="Diversité"> Unis dans la diversité
        </label>
        <label class="radio-inline">
        <input type="radio" name="QB9"  value="Union"> L'union fait la force
        </label>
      </p>


      <p>  Q.B.10 : Avant 2003, les pays de Bosnie, Croatie, Slovénie, Macédoine, Monténégro et Serbie étaient regroupés sous le nom d'un Etat. De quel Etat s'agissait-il ? ?</p>
      <p>
        <label class="radio-inline">
        <input type="radio" name="QB10"  value="Tchécoslovaquie"> Tchécoslovaquie         </label>
        <label class="radio-inline">
        <input type="radio" name="QB10"  value="Kosovo"> Kosovo
        </label>
        <label class="radio-inline">
        <input type="radio" name="QB10"  value="Yougoslavie"> Yougoslavie
        </label>
      </p>
</div>

    <p> <button type="submit" class="btn btn-primary">Submit</button> </p>

  </form>

<?php
      //propriété
      $QB1 = $_GET ['QB1'];
      $QB2 = $_GET ['QB2'];
      $QB3 = $_GET ['QB3'];
      $QB4 = $_GET ['QB4'];
      $QB5 = $_GET ['QB5'];
      $QB6 = $_GET ['QB6'];
      $QB7 = $_GET ['QB7'];
      $QB8 = $_GET ['QB8'];
      $QB9 = $_GET ['QB9'];
      $QB10 = $_GET ['QB10'];




      $Resultat = 0;


      //Réponse
      if ($QB1 == "1981")
           {$Resultat ++ ;}
      if ($QB2 == "Mai")
            {$Resultat ++ ;}
      if ($QB3 == "Rossignol")
          {$Resultat ++ ;}
      if ($QB4 == "Aviculture")
          {$Resultat ++;}
      if ($QB5 == 'Leucocytes')
          {$Resultat ++;}
      if ($QB6 == 'Anagramme')
          {$Resultat ++;}
      if ($QB7 == 'Paris')
          {$Resultat ++;}
      if ($QB8 == 'Fonctionnaire_chinois')
          {$Resultat ++;}
      if ($QB9 == 'Diversité')
          {$Resultat ++;}
      if ($QB10 == 'Yougoslavie')
          {$Resultat ++;}

      //Résultat
      echo "$Resultat";


      //Envoi du mail
      $to = "djansoone@gmail.com";
      $subject = "Voilà ta c^te";
      $txt = "tu as eu $Resultat!";


      mail($to,$subject,$txt);


?>

</body>
</html>
