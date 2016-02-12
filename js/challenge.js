document.getElementById("choice").addEventListener("change",Choice);

function Choice() {
  xhr = new XMLHttpRequest();
  client = document.getElementById("choice").value;
  console.log(client);

  xhr.onreadystatechange = function() {
      if(xhr.readyState == 4 && xhr.status == 200){
        document.getElementById("infos").innerHTML = xhr.responseText;
        }
      };

  xhr.open('POST', "traitement.php", true);
  xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  xhr.send("value="+client);
};
