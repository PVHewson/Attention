    <div class="modal" id="modalContribute">
      <div class="modal-content">
        <form id="formContribute">
        <div class="input-field">
          <i class="material-icons prefix indigo-text">title</i>    
          <input type="text" id="contribSummary" name="summary"/>
        <label for="summary">Summary</label>
      </div>
        <div class="input-field">
              <i class="material-icons prefix indigo-text">home</i>    
              <textarea class="materialize-textarea" cols="30" rows="5" name="body" id="contribBody"></textarea>
            <label for="contribBody">Article content ...</label>
        </div>
        <div class="file-field input-field">
          <div class="btn">
            <span>Photo</span>
            <input type="file" id="contribPhoto" name="photo">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
          <div class="input-field">
            <i class="material-icons prefix indigo-text">my_location</i>    
            <input type="text" id="contribSource" name="source"/>
            <label for="source">This article is from</label>
        </div>
        <div class="modal-footer">
           <input class="btn" type="submit" value="Go"/>          
        </div>
        </form>
      </div>
    </div>