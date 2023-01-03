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
                <input type="text" class="form-control" placeholder="Votre nom" aria-label="Nom" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Prenom</span>
                <input type="text" class="form-control" placeholder="Votre prénom" aria-label="Prenom" aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" placeholder="Server" aria-label="Server">
            </div>

            <div class="input-group">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" value="" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Proposition d'emploi
                    </label>
                </div>
            </div>
            <div class="input-group">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" value="" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Proposition d'information
                    </label>
                </div>
            </div>
            <div class="input-group">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" value="" name="flexRadioDefault" id="flexRadioDefault3">
                    <label class="form-check-label" for="flexRadioDefault3">
                        Proposition de prestation
                    </label>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-primary ">Submit</button>
            </div>

        </fieldset>
    </form>
</section>