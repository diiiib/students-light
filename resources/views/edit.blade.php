
<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
      body {
      padding: 0;
      margin: 0;
      font-family: "Nunito Sans";
      background-color: #b3b3ff;
      }
      input[type=number]::-webkit-inner-spin-button,
      input[type=number]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
      }
      p{
      margin: 0;
      text-transform: capitalize;
      font-weight: bold;
      }
      th{
      padding: 10px !important;
      }
      .table{
      margin-bottom: 0px;
      }
      .dropdown-toggle{
      background-color: #fff;
      }
      .table>:not(caption)>*>*{
      border-color: #F4BE2C;
      vertical-align: middle;
      white-space: nowrap;
      }
      .table>:not(:first-child){
      border-top:#F4BE2C;
      }
      .table>thead{
      background-color:#F4BE2C;
      color: #fff;
      }
      .row{
      align-items: center;
      }
      .form-control {
      line-height: 2;
      border: 1px solid #ddd;
      border-radius: 2px;
      }
      .form-control:focus{
      box-shadow: none;
      border-color:#F4BE2C;
      }
      .form-check-input:checked{
      background-color: #00ff00;
      border-color: #F4BE2C;
      }
      .form-check-input:focus{
      box-shadow: none;
      }
      .form-control:hover{
      border-color: #F4BE2C;
      }
      .bg-custom {
      border: 1px solid #F4BE2C;
      }
      .btn-custom {
      border-color: #F4BE2C;
      color: #F4BE2C;
      }
      .btn-custom:hover {
      background-color: #F4BE2C;
      color: #fff;
      box-shadow:0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
      }
      .row.m-0{
      border-bottom: 1px solid #f4be2b;
      margin-bottom: 15px !important;
      background: #f4be2b;
      font-weight: 600;
      color: #fff;
      }
      .row.mb-2{
      margin: 0;
      }
      .col-lg-4 p{
      font-size: 12px;
      }
      }
      @media(max-width: 992px) {
      form{
      width: 80%;
      }
      }
      @media(max-width: 575px) {
      form{
      width: 100%;
      }
    
   }
    </style>
<body>

	<!-- main -->
	<div class="main-w3layouts wrapper">
		<div class="main-agileinfo">
			<div class="agileits-top">
			<div class="container">
      
    <h1 id="a" class="text-center mt-3">buletin d inscription </h1> <br>
    <p>  Année Universitaire : 2022 - 2023</p>
    
<div class="container">
<form name="edit" id="/edit_formulaire" method="post" action="/update_Student/{{$mystudent->id}}">
		@method ('post')
           @csrf
<div class="form-check form-switch">

  <input class="form-check-input" type="checkbox" id="mySwitch" name="gender" value="male" >
  <label class="form-check-label" for="mySwitch">Monsieur</label>
    </div>
   <div class="form-check form-switch">
   <input class="form-check-input" type="checkbox" id="mySwitch" name="gender" value="female">
  <label class="form-check-label" for="mySwitch">Madame</label>
   </div>
   <div class="form-check form-switch">
   <input class="form-check-input" type="checkbox" id="mySwitch" name="gender" value="female">
  <label class="form-check-label" for="mySwitch">Melle</label>
   </div>
   
   <h1 class="text-center mt-3">Student Registration Form</h1>

  <div class="container">
  <div class="row ">
    <div class="col-md-6">
    <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control @error('Username')  is-invalid  @enderror" id="Username" type="text" name="nom" placeholder="Mom"  value="{{$mystudent->nom}}">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
           <div class="mb-3">
            <label for="lastname" class="form-label">Prénom</label>
            <input type="text" class="form-control @error('lastname')  is-invalid  @enderror" id="lastname" type="text" name="lastname" placeholder="Prénom"  value="{{ $mystudent->lastname }}">
            @error('lastname')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>       
        <div class="mb-3">
            <label for="lastname" class="form-label">Numéro cellulaire</label>
            <input type="text" class="form-control @error('lastname')  is-invalid  @enderror" id="lastname" type="numero" name="numero" placeholder="Numéro cellulaire"  value="">
            @error('lastname')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>   
        <div class="mb-3">
            <label for="birthday" class="form-label">date de naissance</label>
            <input type="date" class="form-control @error('birthday')  is-invalid  @enderror" id="birthday" type="date" name="naissance" placeholder="date de naissance"  value="{{ $mystudent->naissance }}">
            @error('birthday')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>  
        <div class="mb-3">
            <label for="city" class="form-label">lieu de naissance</label>
            <input type="text" class="form-control @error('city')  is-invalid  @enderror" id="city" type="city" name="lieu" placeholder="lieu de naissance"  value="{{ $mystudent->lieu }}">
            @error('birthday')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
    </div>

    <div class="col-md-6">
    <div class="mb-3">
            <label for="email" class="form-label">Adresse Email</label>
            <input type="email" class="form-control @error('email')  is-invalid  @enderror" id="email" type="email" name="email" placeholder="Email"  value="{{ $mystudent->email }}">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>          
	
        <div class="mb-3">
            <label for="Niveau Scolaire " class="form-label">Niveau Scolaire </label>
            <div class="dropdown">
            <input type="text" class="form-control @error('Niveau Scolaire')  is-invalid  @enderror" id="Niveau Scolaire " type="Niveau Scolaire " name="Niveau_Scolaire" placeholder="Niveau Scolaire "  value="{{ $mystudent->Niveau_Scolaire }}">
            @error('Niveau Scolaire ')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div> 
        
         <div class="mb-3">
            <label for="Profession" class="form-label">Profession/ Etudes </label>
            <input type="text" class="form-control @error('Profession')  is-invalid  @enderror" id="Profession" type="Profession" name="Profession" placeholder="Profession"  value="">
            @error('Profession')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
    </div>
    <div class="mb-3">
            <label for="Urgence" class="form-label">Contact d'urgence </label>
            <input type="text" class="form-control @error('Urgence')  is-invalid  @enderror" id="Profession" type="Profession" name="urgence" placeholder="Urgence"  value="{{ $mystudent->urgence }}">
            @error('Urgence')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
</div>
<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Maladies/ Allergies</label>
  <select class="form-select" id="inputGroupSelect01" name="maladies">
    <option selected>Choose...</option>
    <option value="Diabète de type 1 et diabète de type 2">Diabète de type 1 et diabète de type 2</option>
      <option value="Maladie coronaire">Maladie coronaire </option>
       <option value="Paraplégie">Paraplégie</option>
       <option value="AUTRES">AUTRES </option>
  </select>
</div>      
        
        <div class="mb-3">
            <h1>Formation Professionnelle « Mini MBA » et « Masterclass »</h1>
        <p> DES (09 Mois de Formation à base de Projets Pratiques)  </p>
        <input type="checkbox" id="payement" name="formation1" value="Management des Entreprises" >
        <label for="payement">Management des Entreprises</label><br />
        <input type="checkbox" id="payement" name="formation2" value="Management et marketing évènementiel">
        <label for="payement">Management et marketing évènementiel</label><br />
        <input type="checkbox" id="payement" name="formation3" value="Gestion des ressources Humaines">
        <label for="payement">Gestion des ressources Humaines</label><br />
        <input type="checkbox" id="payement" name="formation4" value="Commerce International">
        <label for="payement">Commerce International</label><br />
        <input type="checkbox" id="payement" name="formation5" value="Comptabilité et Finances">
        <label for="payement">Comptabilité et Finances</label><br />
      </div>
      <div class="mb-3">
      
              <p> Masterclass (07 Mois à base de Projets pratiques)  </p>
          
        <input type="checkbox" id="payement" name="formation6" value="Photographie Professionnelle">
        <label for="payement">Photographie Professionnelle</label><br />
        <input type="checkbox" id="payement" name="formation7" value="Motion graphique Design">
        <label for="payement">Motion graphique Design</label><br />
        <input type="checkbox" id="payement" name="formation8" value="Web Design UI/UX">
        <label for="payement">Web Design UI/UX </label><br />
        <input type="checkbox" id="payement" name="formation9" value="Développement Web">
        <label for="payement">Développement Web </label><br />
        <input type="checkbox" id="payement" name="formation10" value="Développement Application Mobile">
        <label for="payement">Développement Application Mobile</label><br />
        <input type="checkbox" id="payement" name="formation11" value="Design graphique (PAO)">
        <label for="payement">Design graphique (PAO)</label><br />
        <input type="checkbox" id="payement" name="formation12" value="Design d’intérieur">
        <label for="payement">Design d’intérieur</label><br />
        
      </div>
      <div class="mb-3">
          <p> Mini MBA (144 heures à base de Projets Pratiques) </p>
          <input type="checkbox" id="payement" name="formation13" value="Community Management">
          <label for="payement">Community Management</label><br />
          <input type="checkbox" id="payement" name="formation14" value="Marketing Digital">
          <label for="payement">Marketing Digital</label><br />
          <input type="checkbox" id="payement" name="formation15" value="Copywriting et Rédaction Web">
          <label for="payement">Copywriting et Rédaction Web</label><br />
          <input type="checkbox" id="payement" name="formation16" value="Marketing Digital">
          <label for="payement">Marketing Digital</label><br />
          <input type="checkbox" id="payement" name="formation17" value="Publicité et Branding">
          <label for="payement">Publicité et Branding</label><br />
      </div>
      <div class="mb-3">
        <h1>Formation Professionnelle qualifiante</h1>
        <p> Formation Professionnelle et Accompagnement Pratique  </p>
        <input type="checkbox" id="payement" name="formation18" value="Assistanat de direction">
        <label for="payement">Assistanat de direction</label><br />
        <input type="checkbox" id="payement" name="formation19" value="Secrétariat générale">
        <label for="payement">Secrétariat générale </label><br />
        <input type="checkbox" id="payement" name="formation20" value="Réceptionniste en hôtellerie">
        <label for="payement">Réceptionniste en hôtellerie</label><br />
        <input type="checkbox" id="payement" name="formation21" value="Bureautique/ agent de Saisie">
        <label for="payement">Bureautique/ agent de Saisie</label><br />
        <input type="checkbox" id="payement" name="formation22" value="Guide Accompagnateur touristique">
        <label for="payement">Guide Accompagnateur touristique</label><br />
        <input type="checkbox" id="payement" name="formation23" value="Agent de billetterie">
        <label for="payement">Agent de billetterie</label><br />
      </div>

      <div class="mb-3">
        <br>
      <h1>Modalités de paiement des formations</h1>
      <input type="radio" name="paiement" value="Cache" required="" checked>
        <label for="paiement">Cache</label><br />
        <input type="radio" name="paiement" value="Chèque" required="">
        <label for="paiement">Chèque</label><br />
        <input type="radio" name="paiement" value="Par tranches" required="">
        <label for="paiement">Par tranches</label><br />
      </div>
  

	  <button type="submit" class="btn btn-primary">VALIDATE</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
		        </form>

      
      
      <script src="index.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
					
						
	
    
	
