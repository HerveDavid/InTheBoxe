/*la fonction getElementByTagName renvoie une liste des éléments portant le nom de balise donné ici "span".*/
  var sp = document.getElementsByTagName("span");
  var p = document.getElementsByTagName("p");
  var div = document.getElementsByTagName("div");
  var btn_start=document.getElementById("start");
  var btn_stop=document.getElementById("stop");
  var t;
  var ms=0,s=0,mn=0,h=0;
  var i=0;

   /*La fonction "start" démarre un appel répétitive de la fonction update_chrono par une cadence de 100 milliseconde en utilisant setInterval et désactive le bouton "start" */
  function start(){
    var audio = new Audio('../view/src/bruitages/start.mp3');
    audio.play();
   t =setInterval(update_chrono,100);
   btn_start.disabled=true;
   btn_stop.disabled=false;

   // var audio = new Audio('start.mp3');
   // audio.play();
  }
  /*La fonction update_chrono incrémente le nombre de millisecondes par 1 <==> 1*cadence = 100 */
  function update_chrono(){
    ms+=1;
    /*si ms=10 <==> ms*cadence = 1000ms <==> 1s alors on incrémente le nombre de secondes*/
      if(ms>=1&&s<5&&mn==0) {
        pompe();
      }

      if(s>=5&&s<10) {
        repos();
        if (s==5&&ms==2) {
          var audio = new Audio('../view/src/bruitages/repos.mp3');
          audio.play();
        }
      }

      if(s>=10&&s<15) {
        crunch();
        if (s==10&&ms==2) {
          var audio = new Audio('../view/src/bruitages/start.mp3');
          audio.play();
        }
      }

      if(s>=15&&s<20) {
        repos();
        if (s==15&&ms==2) {
          var audio = new Audio('../view/src/bruitages/repos.mp3');
          audio.play();
        }
      }

      if(s>=20&&s<25) {
        burpee();
        if (s==20&&ms==2) {
          var audio = new Audio('../view/src/bruitages/start.mp3');
          audio.play();
        }
      }

      if(s>=25&&s<30) {
        repos();
        if (s==25&&ms==2) {
          var audio = new Audio('../view/src/bruitages/repos.mp3');
          audio.play();
        }
      }

      if(s>=30&&s<35) {
        gainage();
        if (s==30&&ms==2) {
          var audio = new Audio('../view/src/bruitages/start.mp3');
          audio.play();
        }
      }

      if(s>=35&&s<40) {
        repos();
        if (s==35&&ms==2) {
          var audio = new Audio('../view/src/bruitages/repos.mp3');
          audio.play();
        }
      }

      if(s>=40&&s<45) {
        fentes();
        if (s==40&&ms==2) {
          var audio = new Audio('../view/src/bruitages/start.mp3');
          audio.play();
        }
      }

      if(s>=45&&s<50) {
        repos();
        if (s==45&&ms==2) {
          var audio = new Audio('../view/src/bruitages/repos.mp3');
          audio.play();
        }
      }

      if(s>=50&&s<55) {
        pompe();
        if (s==50&&ms==2) {
          var audio = new Audio('../view/src/bruitages/start.mp3');
          audio.play();
        }
      }

      if(s>=55&&s<60) {
        repos();
        if (s==55&&ms==2) {
          var audio = new Audio('../view/src/bruitages/repos.mp3');
          audio.play();
        }
      }

      if(mn==1) {
        stop();
        var audio = new Audio('../view/src/bruitages/stop.mp3');
        audio.play();
      }


       if(ms==10){
        ms=1;
        s+=1;
       }
       /*on teste si s=60 pour incrémenter le nombre de minute*/
       if(s==60){
        s=0;
        mn+=1;
       }
       if(mn==60){
        mn=0;
        h+=1;
       }
       /*afficher les nouvelle valeurs*/
       sp[0].innerHTML=h+" h";
       sp[1].innerHTML=mn+" min";
       sp[2].innerHTML=s+" s";
       sp[3].innerHTML=ms+" ms";
  }

	/*on arrête le "timer" par clearInterval ,on réactive le bouton start */
	function stop(){
    var audio = new Audio('../view/src/bruitages/bouton.mp3');
    audio.play();
    clearInterval(t);
    btn_start.disabled=false;
    btn_stop.disabled=true;
	}
  /*dans cette fonction on arrête le "timer" ,on réactive le bouton "start" et on initialise les variables à zéro */
  function reset(){
    var audio = new Audio('../view/src/bruitages/bouton.mp3');
    audio.play();
    clearInterval(t);
    btn_start.disabled=false;
    document.getElementById("body").style.backgroundColor="#302646";
    ms=0,s=0,mn=0,h=0;
    /*on accède aux différents span par leurs indice*/
    sp[0].innerHTML=h+" h";
    sp[1].innerHTML=mn+" min";
    sp[2].innerHTML=s+" s";
    sp[3].innerHTML=ms+" ms";
  }

  function clear() {
    var j = 0;
    while (j<3) {
    p[j].innerHTML= "";
    j = j + 1;
    }
  }

  function supprime() {
    clear();
  }

  function pret() {
    // inner("3");
    // // sleep(2000);
    // inner("2");
    // //sleep(2000);
    // inner("1");
    // //sleep(2000);
    // inner("C'est parti !");
    p[1].innerHTML="";
    var bool = detectmob();
    if (bool==false) {
      p[0].innerHTML= "";
    }
    setTimeout(() => { inner("3"); },0);
    setTimeout(() => { inner("2"); },1000);
    setTimeout(() => { inner("1"); },2000);
    setTimeout(() => { start(); },3000);
  }

  function inner(num) {
    var audio = new Audio('../view/src/bruitages/starteur.mp3');
    audio.play();
    p[1].innerHTML=num;
    var bool = detectmob();
    if (bool==false) {
      p[0].innerHTML=num;
    }
  }

  function pompe() {
    document.getElementById("body").style.backgroundColor="#DC2626";
    p[1].innerHTML= "POMPE";
    var bool = detectmob();
    if (bool==false) {
      p[0].innerHTML= "POMPE";
    }
  }

  function crunch() {
    document.getElementById("body").style.backgroundColor="#DC2626";
    p[1].innerHTML= "CRUNCH";
    var bool = detectmob();
    if (bool==false) {
      p[0].innerHTML= "CRUNCH";
    }
  }

  function burpee() {
    document.getElementById("body").style.backgroundColor="#DC2626";
    p[1].innerHTML= "BURPEE";
    var bool = detectmob();
    if (bool==false) {
      p[0].innerHTML= "BURPEE";
    }
  }

  function gainage() {
    document.getElementById("body").style.backgroundColor="#DC2626";
    p[1].innerHTML= "GAINAGE";
    var bool = detectmob();
    if (bool==false) {
      p[0].innerHTML= "GAINAGE";
    }
  }

  function fentes() {
    document.getElementById("body").style.backgroundColor="#DC2626";
    p[1].innerHTML= "FENTES";
    var bool = detectmob();
    if (bool==false) {
      p[0].innerHTML= "FENTES";
    }
  }

  function repos() {
    document.getElementById("body").style.backgroundColor="#4A9E1A";
    p[1].innerHTML= "REPOS";
    var bool = detectmob();
    if (bool==false) {
      p[0].innerHTML= "REPOS";
    }
  }

  function adapt() {
    var bool = detectmob();
    if (bool==false) {
      div[0].innerHTML="<p id=\"surpc\"></p>";
      pret();
    }
    if (bool==true) {
      div[0].innerHTML="";
      pret();
    }
  }

  function detectmob() {
    if( navigator.userAgent.match(/Android/i)
    || navigator.userAgent.match(/webOS/i)
    || navigator.userAgent.match(/iPhone/i)
    || navigator.userAgent.match(/iPad/i)
    || navigator.userAgent.match(/iPod/i)
    || navigator.userAgent.match(/BlackBerry/i)
    || navigator.userAgent.match(/Windows Phone/i)
    ){
      return true;
    }
    else {
      return false;
    }
  }


  // function sleep(milliseconds) {
  // var start = new Date().getTime();
  //   for (var i = 0; i < 1e7; i++) {
  //     if ((new Date().getTime() - start) > milliseconds){
  //       break;
  //     }
  //   }
  // }

  // function insertion() {
  //   let newP = document.createTextNode('<p> </p>');
  //   newP.TextContent;
  // }
