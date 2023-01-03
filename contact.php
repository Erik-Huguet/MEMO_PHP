<section class="container-fluid">
    <form class="form ">
        <fieldset >
            <legend>Formulaire de contact</legend>
              <div class="mb-4 ">
                  <select class="form-select form-select-lg mb-4 " aria-label=".form-select-lg ">
                      <option selected>Selectionné votre civilité</option>
                      <option value="1">Mr</option>
                      <option value="2">Mme</option>
                      <option value="3">Mlle</option>
                  </select>
              </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nom</span>
                <input type="text" class="form-control" placeholder="Votre nom" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="mb-3">
                <label for="InputTextPrenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="InputTextPrenom">
            </div>
            <div class="mb-3">
                <label for="InputTextEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="InputTextEmail">
            </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
</section>