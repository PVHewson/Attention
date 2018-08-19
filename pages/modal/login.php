  <!--  
  Modal to allow users to login - to contribute, edit, approve
  -->
    <div class="modal medium" id="modalLogin">
      <div class="modal-content">
        <form action="index.php" method="post" id="formLogin">
        <div class="input-field">
          <i class="material-icons prefix indigo-text">title</i>    
          <input type="text" id="loginUsername" name="loginUsername"/>
        <label for="loginUsername">Username or Email address</label>
      </div>
        <div class="input-field">
              <i class="material-icons prefix indigo-text">key</i>    
          <input type="password" id="loginPassword" name="loginPassword"/>
            <label for="loginPassword">Password</label>
        </div>
            <div class="modal-footer">
              <input class="btn" type="submit" value="Login"/>
            </div>
        </form>
      </div>
    </div>
<script src="javascript/login.js"></script>
