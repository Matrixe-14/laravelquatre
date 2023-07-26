<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/style2.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>ESI</title>
    </head>
    <body>
   <!-- <form action="">
    <select name="niveau d'etude" id="niveau d'etude">
    <option value="">niveau d'etude</option>
        <option value="niveau d'etude">Licence1</option>
        <option value="niveau d'etude">Licence2</option>
        <option value="niveau d'etude">Licence3</option>
    </select>

    <select name="année accademique" id="">
        <option value="Licence1">Licence1</option>
        <option value="Licence1">Licence2</option>
        <option value="Licence1">Licence3</option>
    </select>

    <select name="cycle" id="">
        <option value="Licence">Licence</option>
        <option value="Master">Master</option>
        <option value="Doctorat">Doctorat</option>
    </select>

    <select name="filière" id="">
        <option value="Licence1">Licence1</option>
        <option value="Licence1">Licence2</option>
        <option value="Licence1">Licence3</option>
    </select>

    <input type="submit" value="valider"> -->

   <!-- </form> -->
   <div class="row">    
  <section class="section">
    <header>
      <h3>Register</h3>
      <h4>Veuillez remplir le formulaire ci-dessous</h4>
    </header>
    <main>
      <form>
        <div class="form-item box-item">
        <select name="niveau d'etude" id="niveau d'etude">
        <option value="">Niveau d'étude</option>
        <option value="niveau d'etude">Licence1</option>
        <option value="niveau d'etude">Licence2</option>
        <option value="niveau d'etude">Licence3</option>
        </select>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
        </div>

        <div class="form-item box-item">
        <select name="annee accademique" id="annee accademique">
        <option value="">Annee Accademique</option>
        <option value="Annee accademique">2023-2024</option>
        <option value="Annee accademique">2022-2023</option>
        <option value="Anne accademique">2021-2022</option>
        </select>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
        </div>

        <div class="form-item box-item">
        <select name="cycle" id="cycle">
        <option value="">Cycle</option>
        <option value="cycle">Licence</option>
        <option value="cycle">Master</option>
        <option value="cycle">Docteur</option>
        </select>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
        </div>

        <div class="form-item box-item">
        <select name="filière" id="filière">
        <option value="">Filière</option>
        <option value="filière">Développeur "full stack"</option>
        <option value="filière">Développeur de jeux vidéo</option>
        <option value="filière">Développeur React (front end) </option>
        <option value="filière">Data Scientist</option>
        <option value="filière">Ingenieur en intelligence artificielle</option>
        <option value="filière">Ingenieur en cyber-sécurité</option>
        <option value="filière">Ingénieur DevOPS</option>
        <option value="filière">Architecte informatique</option>
        </select>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
        </div>

<!--         
        <div class="form-item box-item">
          <input type="email" name="email" placeholder="Email" data-email data-required>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
          <small class="errorEmail"><i class="fa fa-asterisk" aria-hidden="true"></i> email is not valid</small>
        </div>
        <div class="form-item box-item">
          <div class="form-item-triple">
            <div class="radio-label"> 
              <label class="label">Gender</label>
            </div>
            <div class="form-item"> 
              <input id="Male" type="radio" name="gender" value="Male" data-once>
              <label for="Male">Male</label>
            </div>
            <div class="form-item"> 
              <input id="Female" type="radio" name="gender" value="Female" data-once>
              <label for="Female">Female</label>
            </div>
          </div>
          <small class="errorOnce"><i class="fa fa-asterisk" aria-hidden="true"></i> choose at least one</small>
        </div>
        <div class="form-item box-item">
          <div class="form-item-triple">
            <div class="radio-label"> 
              <label class="label">Type</label>
            </div>
            <div class="form-item"> 
              <input id="sponsored" type="radio" name="gender2" value="sponsored" data-once>
              <label for="sponsored">sponsored</label>
            </div>
            <div class="form-item"> 
              <input id="paid" type="radio" name="gender2" value="paid" data-once>
              <label for="paid">paid</label>
            </div>
          </div>
          <small class="errorOnce"><i class="fa fa-asterisk" aria-hidden="true"></i> choose at least one</small>
        </div>
        <div class="form-item box-item">
          <input type="text" name="address" placeholder="Address" data-required>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
        </div>
        <div class="form-item-double box-item">
          <div class="form-item ">
            <input type="text" name="strNumber" placeholder="Str Number" data-required data-number>
            <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                 <input type="text" name="zCode" placeholder="Zip Code" data-required data-number>
            <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
            <small class="errorNum"><i class="fa fa-asterisk" aria-hidden="true"></i> must be a number</small>
          </div>
        </div>
        <div class="form-item box-item">
          <input type="text" name="phone" placeholder="Phone" data-required data-number data-count="10">
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
          <small class="errorNum"><i class="fa fa-asterisk" aria-hidden="true"></i> must be a number</small>
          <small class="errorChar"><i class="fa fa-asterisk" aria-hidden="true"></i> must be 10 digits</small>
        </div><small class="errorNum"><i class="fa fa-asterisk" aria-hidden="true"></i> must be a number</small>
          </div>
          <div class="form-item"> -->
       
        <div class="form-item">
          <span id="submit" class="submit">Submit</span>
        </div>
      </form>
    </main>
    <footer>
      <p>Already have an account? <a href="#">Login here</a></p>
    </footer>
    <i class="wave"></i>
  </section>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/script2.js')}}"></script>

    </body>
    </html>
</x-app-layout>
