<form action="" method="">
  <h2>Create a New Network</h2>

 
  <label for="name">Ninja Name:</label>
  <input 
    type="text" 
    id="name" 
    name="name" 
    value="{{ old('name') }}" 
    required
  >

  <!-- ninja Strength -->
  <label for="skill">Network Skill (0-100):</label>
  <input 
    type="number" 
    id="skill" 
    name="skill" 
    required
  >

  <!-- ninja Bio -->
  <label for="bio">Biography:</label>
  <textarea
    rows="5"
    id="bio" 
    name="bio" 
    required
  ></textarea>

  <!-- select a dojo -->
  <label for="dojo_id">Dojo:</label>
  <select id="dojo_id" name="dojo_id" required>
    <option value="" disabled selected>Select a dojo</option>
    
  </select>

  <button type="submit" class="btn mt-4">Create Network</button>

  <!-- validation errors -->
  
</form>