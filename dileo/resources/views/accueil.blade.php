@extends('./layouts/app')

@section('page-content')

<!-- /resources/views/post/create.blade.php -->
 
<!-- <h1>Create Post</h1> -->
<!--  
         @if ($errors)
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
         @endif -->

<form action="{{route('appelerroute')}}" method="POST">
    @method('post')
    @csrf
<div class="container">
  <div class="header">
    <div class="title">Formulaire d'inscription</div>
  </div>
  <div class="main">
  <div class="left-section">
      <div class="item">
        <div class="text">Nom</div>
        <input type="text" name='nom'>
      </div>
      <div class="item">
        <div class="text">Prénom</div>
        <input type="text" name='prenom'>
      </div>
      <div class="item">
        <div class="text">Pays</div>
        <input type="text" name='pays'>
      </div>
      <div class="item">
        <div class="text">Ville</div>
        <input type="text" name='ville'>
      </div>
      <div class="item">
        <div class="text">Résidence</div>
        <input type="text" name='residence'>
      </div>
      <div class="item">
        <div class="text">Contact</div>
        <input type="text" name='contact'>
      </div>
    </div>
   <span class="line"></span>
  <div class="right-section">
    <div class="circle">
      <div class="img"></div>
    </div>
    <div class="link">
      <div class="title">Réseaux sociaux</div>
      <div class="icons fb">
        <div class="img"></div>
        <div class="connect" style="color:#52E28C;">Connexion</div>
      </div>
      <div class="icons twiter">
        <div class="img"></div>
        <a href="https://www.instagram.com/"><div class="connect">Link</div></a>
      </div>
      <div class="icons insta">
        <div class="img"></div>
        <a href="https://www.instagram.com/"><div class="connect">Link</div></a>
      </div>
    </div>
    <div class="btn">
      <button type="submit">Valider</button>
    </div>
  </div>
  </div>
</div>
</form>

@endsection
