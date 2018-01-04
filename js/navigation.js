//code.stephenmorley.org
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function resize() {
    w = document.documentElement.clientWidth;
    if (w<1200) {
      console.log(document.documentElement.clientWidth);
      document.getElementById('Logo').style.display = 'none';
      document.getElementById('Logo2').style.display = 'block';
    }
  }



  window.onresize = function(event){
    w = document.documentElement.clientWidth;
    if (w<1200) {
      console.log(document.documentElement.clientWidth);
      document.getElementById('Logo').style.display = 'none';
      document.getElementById('Logo2').style.display = 'block';
    } else {
      document.getElementById('Logo2').style.display = 'none';
      document.getElementById('Logo').style.display = 'block';
    }
};

function changeState(id,other_id,content,other_content) {

  document.getElementById(id).style.opacity = "0.5";
  document.getElementById(id).style.color = "#C06014";
  document.getElementById(id).style.textShadow = '0';
  document.getElementById(other_id).style.color = "black";
  document.getElementById(other_id).style.textShadow = '2px 2px 1px white';
  document.getElementById(other_id).style.opacity = "1";

  if(content != undefined && other_content != undefined){
  var elem = document.getElementById(content);
  var elem2 = document.getElementById(other_content);
  var id2 = setInterval(frame, 20);
  var pos = 0;
  var pos2 = 1;

    function frame() {
        if (pos > 1 || pos == 1 || pos2 < 0 || pos2 === 0 ) {
            clearInterval(id2);
            elem.style.display = "flex" ;
            elem2.style.display = "none";
        } else {
            pos = pos + 0.1;
            pos2 = pos2 - 0.1;
            elem.style.opacity = pos ;
            elem2.style.opacity = pos2 ;
        }
    }
  }
} ;

// function myFunction() {
//
//   document.getElementById("myDropdown").classList.toggle("show");
//
//   document.getElementById("cont-drop1").innerHTML=' ';
//   document.getElementById("cont-drop1").innerHTML='▲ OFERTA';
//
// }
//
// function myFunction2() {
//
//   document.getElementById("myDropdown2").classList.toggle("show");
//
//   document.getElementById("cont-drop2").innerHTML=' ';
//   document.getElementById("cont-drop2").innerHTML='▲ O NAS';
//
// }

// Close the dropdown menu if the user clicks outside of it
// window.onclick = function(event) {
//   if (!event.target.matches('.dropbtn')) {
//
//     var dropdowns = document.getElementsByClassName("dropdown-content");
//     var i;
//     for (i = 0; i < dropdowns.length; i++) {
//       var openDropdown = dropdowns[i];
//       if (openDropdown.classList.contains('show')) {
//         openDropdown.classList.remove('show');
//       }
//     }
//     document.getElementById("cont-drop1").innerHTML=' ';
//     document.getElementById("cont-drop1").innerHTML='▼ OFERTA';
//   }
//   if (!event.target.matches('.dropbtn2')) {
//
//     var dropdowns2 = document.getElementsByClassName("dropdown-content2");
//     var i;
//     for (i = 0; i < dropdowns2.length; i++) {
//
//       if (dropdowns2[i].classList.contains('show')) {
//         dropdowns2[i].classList.remove('show');
//       }
//     }
//     document.getElementById("cont-drop2").innerHTML=' ';
//     document.getElementById("cont-drop2").innerHTML='▼ O NAS';
//   }
//
// }
//
//
// function myFunction3() {
//   if (document.getElementById("myDropdown3").style.display == 'none') {
//     document.getElementById("myDropdown3").style.display = 'block';
//   } else {
//     document.getElementById("myDropdown3").style.display = 'none';
//   }
// }
