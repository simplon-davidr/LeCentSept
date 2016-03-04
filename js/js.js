$(function(){
var div;
var img;
var a;
var logo_territoire =[
  "img/territoire_logo/chantiers-passerelles.png",
  "img/territoire_logo/constant-zoe.png",
  "img/territoire_logo/epicerie-mobile.png",
  "img/territoire_logo/fwee.png",
  "img/territoire_logo/Simplon.png"
] ;
var acteurs_logo=[
  "img/acteurs_logo/Ashoka.png",
  "img/acteurs_logo/etic.png",
  "img/acteurs_logo/InHomine.png",
  "img/acteurs_logo/mouves.png",
  "img/acteurs_logo/ronalpia.png"
];
var prives_logo=[
  "img/partenaire_logo/Grand-Lyon.png",
  "img/partenaire_logo/rhone-alpes.png"
];

var institutionnels_logo=[
  "img/partenaire_logo/bouygues.png",
  "img/partenaire_logo/caisse-epargne.png",
  "img/partenaire_logo/EDF.png",
  "img/partenaire_logo/Intrum-justitia.png",
  "img/partenaire_logo/Keolis.png",
  "img/partenaire_logo/orange.png",
  "img/partenaire_logo/laposte-circle.png",
  "img/partenaire_logo/Veolia.png"
];
var link_acteurs=[
  "http://france.ashoka.org/",
  "http://etic.co/",
  "#",
  "http://mouves.org/rhone-alpes/1er-octobre-tour-solutions-sera-lyon/",
  "http://www.ronalpia.fr/"
];
var link_institutionnels=[
  "https://www.bouygues-immobilier.com",
  "https://www.caisse-epargne.fr",
  "https://particulier.edf.fr",
  "http://www.intrum.com/fr/",
  "http://www.keolis.com/",
  "http://www.orange.fr/",
  "http://www.laposte.fr/",
  "http://www.veolia.fr/"
];
var link_prives=[
  "http://www.grandlyon.com/",
  "http://www.rhonealpes.fr/"
];

var link_territoires=[
  "http://chantiers-passerelles.fr/",
  "https://www.constantetzoe.com/",
  "http://www.epicerie-mobile.fr/",
  "http://www.fwee.fr/",
  "http://simplon.co/"
];

$(".menu").mouseover(function(){
  $(".barmenu").fadeIn();
});

$(".menu").mouseout(function(){
  $(".barmenu").fadeOut();
});

function logo(logos,place,liens){
  for(i=0;i<logos.length;i++){
    div=$("<div>");
    img=$("<img>");
    a=$("<a>");
    img.attr("src",logos[i]);
    img.css({
      "width":"100%",
      "height":"100%",
      "margin":"1em 0"
    });
    div.css({
      "background-color": "rgb(48, 60, 86)"
    });
    a.attr("href",liens[i]);
    a.attr("target","blank");
    a.attr("data-id",i);
    img.attr("data-id",i);
    div.append(img);
    a.append(div);
    $(place).append(a);

  }
}
var idImg;
$(".connaitre").on("mouseover","img",function(){
 idImg=$(this).attr("src");
  $(this).attr("src","red-"+idImg);
});

$(".connaitre").on("mouseout","img",function(){
  $(this).attr("src",idImg);
});

$("nav").on("click","a",function(){
  var target = $(this).attr('href');
  $('html, body').stop().animate({scrollTop: $(target).offset().top}, 1000 );
  // console.log("ok");
});

$(".btn_menu").click(function(){
  $(this).fadeOut();
  $(".menu").fadeIn();
});

$(".btn_del").click(function(){
  $(".menu").fadeOut();
  $(".btn_menu").fadeIn();
});



logo(logo_territoire,".territoire",link_territoires);
logo(acteurs_logo,".acteurs",link_acteurs);
logo(prives_logo,".prives",link_prives);
logo(institutionnels_logo,".institutionnels",link_institutionnels);

$(".acteurs").find('a[data-id="2"]').click(function(e){
  e.preventDefault();
});
$(".acteurs").find('a[data-id="2"]').removeAttr('target');

/*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX--- ajax ---XXXXXXXXXXXXXXXXXXXXXXXXXX*/
$(".send").click(function(){
  $.ajax({
    url:"post_contact.php",
    data:{
      name:$("#inputname").val(),
      mail:$("#inputmail").val(),
      societe:$("#inputsociete").val(),
      objet:$("#inputobjet").val(),
      message:$("#inputmessage").val()
    },
    method:"POST",
    dataType:"html",
    success:function(ret){
      $("#error_contact").html(ret);
    }
  });
});
});//fin function
