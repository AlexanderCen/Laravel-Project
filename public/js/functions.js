function scrolltoSymptomps(){
    var element = document.getElementById('gejala');
    element.scrollIntoView();
}

$(document).ready(function(){
    $("#btnGejala").click(function(){
      $("#gejalaDesc").slideToggle("slow");
    });
  });

function scrolltoPrevention(){
    var element = document.getElementById('pencegahan');
    element.scrollIntoView();
}

$(document).ready(function(){
    $("#btnPencegahan").click(function(){
      $("#pencegahanDesc").slideToggle("slow");
    });
  });

function scrolltoPerawatan(){
    var element = document.getElementById('perawatan');
    element.scrollIntoView();
}

$(document).ready(function(){
    $("#btnPerawatan").click(function(){
      $("#perawatanDesc").slideToggle("slow");
    });
  });

function scrolltoVarian(){
    var element = document.getElementById('varian');
    element.scrollIntoView();
}

$(document).ready(function(){
    $("#btnVarian").click(function(){
      $("#varianDesc").slideToggle("slow");
    });
  });

  function scrolltoVaksin(){
    var element = document.getElementById('vaksin');
    element.scrollIntoView();
}

$(document).ready(function(){
    $("#btnVaksin").click(function(){
      $("#vaksinDesc").slideToggle("slow");
    });
  });

  function scrolltoDampak(){
    var element = document.getElementById('dampak');
    element.scrollIntoView();
}


//faq
$(document).ready(function(){
        $("#button1").click(function(){
          $("#answer1").slideToggle("slow");
        });
      });
      $(document).ready(function(){
        $("#button2").click(function(){
          $("#answer2").slideToggle("slow");
        });
      });
  $(document).ready(function(){
    $("#button3").click(function(){
      $("#answer3").slideToggle("slow");
    });
  });
  $(document).ready(function(){
    $("#button4").click(function(){
      $("#answer4").slideToggle("slow");
    });
  });
  $(document).ready(function(){
    $("#button5").click(function(){
      $("#answer5").slideToggle("slow");
    });
  });
  $(document).ready(function(){
    $("#button6").click(function(){
      $("#answer6").slideToggle("slow");
    });
  });
  $(document).ready(function(){
    $("#button7").click(function(){
      $("#answer7").slideToggle("slow");
    });
  });
  $(document).ready(function(){
    $("#button8").click(function(){
      $("#answer8").slideToggle("slow");
    });
  });
  $(document).ready(function(){
    $("#button9").click(function(){
      $("#answer9").slideToggle("slow");
    });
  });
  $(document).ready(function(){
    $("#button10").click(function(){
      $("#answer10").slideToggle("slow");
    });
  });
  $(document).ready(function(){
    $("#button11").click(function(){
      $("#answer11").slideToggle("slow");
    });
  });
  $(document).ready(function(){
    $("#button12").click(function(){
      $("#answer12").slideToggle("slow");
    });
  });
var topbutton = document.getElementById("topbutton");

  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

//page chart
  function openNav() {
    document.getElementById("menuSidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }

  function closeNav() {
    document.getElementById("menuSidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }

//dampak di page edukasi

function openSektor(evt, sektorName){
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for(i = 0;i<tabcontent.length;i++){
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for(i = 0; i < tablinks.length;i++){
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(sektorName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("default").click();
