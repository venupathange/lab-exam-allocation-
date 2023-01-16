
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script>
    const SemSubjectMapping = {
      "3": [
        "18CSL37",
        "18CSL38"
      ],
      "4": [
        "18CSL47",
        "18CSL48"
      ],
      "5": [
        "18CSL57",
        "18CSL58"
      ],
      "6": [
        "18CSL67",
        "18CSL68"
      ],
      "7": [
        "18CSL77",
        "18CSL78"
      ],
      "8": [
        "18CSL87",
        "18CSL88"
      ],
      
      
    }
    
    function setSubjectCode() {
      let sem = document.getElementById("semester").value;
      let subjects = SemSubjectMapping[sem];
      let elemets = "";
      for(let i = 0; i<subjects.length; i++) {
        elemets += "<option value=" + subjects[i] + ">" + subjects[i] + "</option>"
      }
      document.getElementById("subcode").innerHTML = elemets;
    }
  </script>
</head>
<body>
  <div class="header">
  	<h2>STUDENT ENTRY FORM</h2>
  </div>
	
  <form method="post" action="info_display.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>USN</label>
  	  <input type="text" name="usn" value="">
  	</div>


      <label for="semester">SEMESTER</label><br>
      <select name="semester" id="semester" onchange="setSubjectCode()"></br>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  
</select>
<br>
</br>
<br>
</br>


<label for="subcode">SUBJECT CODE</label><br>
      <select name="subcode" id="subcode"></br>
  <option value="18CSL37">18CS37</option>
  <option value="18CSL38">18CS38</option>
  <option value="18CSL47">18CS47</option>
  <option value="18CSL48">18CS48</option>
  <option value="18CSL57">18CS57</option>
  <option value="18CSL58">18CS58</option>
  <option value="18CSL67">18CS67</option>
  <option value="18CSL68">18CS68</option>
  <option value="18CSL77">18CS77</option>
  <option value="18CSL78">18CS78</option>
  <option value="18CSL87">18CS87</option>
  <option value="18CSL88">18CS88</option>
  <br>
</br>

</select><br>
<br>
</br>

<input name="programNumber" value="rand(10,100)">
</br>

<button type="program" class="btn" name="program">program</button>
  	</div>
<br>

  </br>


  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="submit">submit</button>
  	</div>
  	<p>
  	
  	</p>
  </form>
</body>
</html>













