    <div class="modal" id="modalRegister">
      <div class="modal-content">
        <form id="formRegistration" enctype="multipart/form-data">
	  <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix indigo-text">perm_identity</i>    
              <input type="text" id="regGivenName" name="regGivenName" autofocus/>
              <label for="fullname">Given name</label>
            </div>
            <div class="input-field col s6">
              <input type="text" id="regFamilyName" name="regFamilyName"/>
              <label for="fullname">Family name</label>
            </div>
	  </div>
          <div class="input-field">
            <i class="material-icons prefix indigo-text">email</i>    
            <input type="email" class="validate" id="regEmail" name="regEmail"/>
            <label for="regEmail">Email address</label>
	    <span class="helper-text" data-error="Invalid email address" data-success="">t</span>
          </div>
          <div class="input-field">
            <i class="material-icons prefix indigo-text">assignment_ind</i>    
            <input type="text" id="regUsername" name="regUsername"/>
            <label for="regUsername">Username</label>
          </div>
          <div class="input-field">
            <i class="material-icons prefix indigo-text">fingerprint</i>    
            <input type="password" class="validate" id="regPassword" name="regPassword"/>
            <label for="regPassword">Password</label>
	    <span class="helper-text" data-error="Poor password" data-success=""></span>
          </div>
          <div class="file-field input-field">
          <div class="btn">
            <span>Photo</span>
            <input type="file" id="regPhoto" name="regPhoto">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>

          <div class="input-field">
              <p>
                  <label>
                      <input type="checkbox" value="yes" id="regAgree" name="regAgree"/>
                      <span>I agree to the <a href="/conditions.html" target="_blank">conditions</a> of this site</span>
                  </label>    
              </p>
            </div>  
            <div class="modal-footer">
              <input type="submit" value="Go"/>
              <a href="#!" class="modal-close waves-effect waves-green btn-flat">Register</a>
            </div>
        </form>
      </div>
    </div>
<script src="javascript/register.js"></script>