<div id="editor">
  
  <form data-scope="text-align">
    <label>text-align</label>
    <select name="text-align" class="main">
      <option value="left" selected>left</option>
      <option value="center">center</option>
      <option value="right">right</option>
      <option value="justify">justify</option>
    </select>
  </form>
  
  <form data-scope="padding">
    <label>padding</label>
    <input type="number" min='0' max="100" step="1"
           name="padding" class="main">
    <select name="units" class="helper">
      <option value="px" selected>px</option>
      <option value="%">%</option>
      <option value="em">em</option>
      <option value="pt">pt</option>
    </select>
  </form>
  
  <form data-scope="border-radius">
    <label>border-radius</label>
    <input type="number" min='0' max="100" step="1"
           name="border-radius" class="main">
    <select name="units" class="helper">
      <option value="px" selected>px</option>
      <option value="%">%</option>
      <option value="em">em</option>
      <option value="pt">pt</option>
    </select>
  </form>
  
  <form data-scope="font-size">
    <label>font-size</label>
    <input type="number" min='1' max="100" step="1"
           name="font-size" class="main">
    <select name="units" class="helper">
      <option value="px" selected>px</option>
      <option value="%">%</option>
      <option value="em">em</option>
      <option value="pt">pt</option>
    </select>
  </form>
  
  <form data-scope="background-color">
    <label>background-color</label>
    <input type="color" name="background-color" class="main"
           value="#ffffff">
  </form>
  
  <form data-scope="color">
    <label>color</label>
    <input type="color" name="color" class="main"
           value="#ffffff">
  </form>
  
  <form data-scope="font-family">
    <label>font-family</label>
    <select name="font-family" class="main">
      <option value="" selected>initial</option>
      <option value="arial">Arial</option>
      <option value="ubuntu">Ubuntu</option>
      <option value="fantasy">Fantasy</option>
      <option value="times new roman">Times New Roman</option>
    </select>
  </form>

</div>