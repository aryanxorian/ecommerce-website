var subjectObject = {
  "male": {
    "clothing": ["Tshirts","Jeans"],
    "accesory": ["Bags"],
    "shoe": ["loafers"]    
  },
  "female": {
    "clothing": ["Tshirts","Jeans"],
    "accesory": ["Bags"],
    "shoe": ["loafers"] 
  }
}
window.onload = function() {
  var subjectSel = document.getElementById("gender");
  var topicSel = document.getElementById("category");
  var chapterSel = document.getElementById("sub-category");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }
  subjectSel.onchange = function() {
    
    chapterSel.length = 1;
    topicSel.length = 1;
    
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }
  topicSel.onchange = function() {
    
    chapterSel.length = 1;
    
    var z = subjectObject[subjectSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
    }
  }
}

function fun()
        {
        var ddl1 = document.getElementById("gender");
        var ddl2 = document.getElementById("category");
        var ddl3 = document.getElementById("sub-category");
        var selectedValue1 = ddl1.options[ddl1.selectedIndex].value;
        var selectedValue2 = ddl2.options[ddl2.selectedIndex].value;
        var selectedValue3 = ddl3.options[ddl3.selectedIndex].value;
        if (selectedValue1 == "" || selectedValue2=="" || selectedValue3=="")
        {
            alert("Please select the options");
        }
        else{
            var box=document.getElementById("box");
            box.style.display="block";
        }
        }