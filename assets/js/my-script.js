
 var months = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];

 const tagHari = document.getElementById('hari');
 const hari = tagHari.value;
 
 const time = document.getElementById('time');
 function tampilWaktu(){
     var waktu = new Date();
     var jam = waktu.getHours() + "";
     var menit = waktu.getMinutes() + "";
     var detik = waktu.getSeconds() + "";
     var yy = waktu.getYear();
     var day = waktu.getDate();
     var month = waktu.getMonth();
     var year = ( yy < 1000)?yy+1900:yy;
     time.innerHTML = hari +" "+ jam + ":" + menit + ":" + detik ;
     
 }
 document.body.addEventListener("load", tampilWaktu());
 setInterval('tampilWaktu()', 1000);
 
 
 
 var z = document.querySelector('.button-sidemenu');
 z.addEventListener("click", function(){
     var x = document.querySelector('.sidebar');
     var y = document.querySelector('.main');
     
     // if(x.style.display == "none"){
     // 	x.style.display = "block";
     // 	y.style.width = "80%";
     // }else{
     // 	x.style.display = "none";
     // 	y.style.width = "100%";
     // }
 
     $(x).toggleClass('sidebar-toggle');
     // $(x).toggleClass('animated pulse');
     $(y).toggleClass('main-toggle');
 
 }); 
 $(window).resize(function() {
     if ($(window).width() < 1048) {
     //   $('.sidebar .collapse').collapse('hide');
     // alert('ok');
         x.style.display = "none";
         y.style.width = "100%";
     };
   });
 $('ul li').click(function(){
     $(this).toggleClass("animated pulse");
 })
 $('.search-button').click(function(){
     // $('input.search').toggleClass('animated slideOutLeft');
     $('input.search').toggleClass('toggle-search');
 
 });
    var base_url = document.querySelector('.base_url');
    base_url = base_url.getAttribute('url');
     var div = document.createElement('div');
     $(div).addClass('divBaru');
     var link1 = document.createElement('a');
     var link2 = document.createElement('a');
     link1.setAttribute('href', "" + base_url + "auth/logout");
     link2.setAttribute('href', "" + base_url + "admin/profile");
     var text1 = document.createTextNode('Logout\n');
     var text2 = document.createTextNode('Profile');
     link1.appendChild(text1);
     link2.appendChild(text2);
     div.appendChild(link1);
     div.appendChild(link2);
     var main = document.querySelector('.main');
     main.appendChild(div);
 
 $('.icon-user').click(function(){
     // alert('ok');
     $('.divBaru').toggleClass('show');
 
 });
 
 // $(document).click(function(){
 // 	var div = document.querySelector('.divBaru');
 // 	if(div.classList.contains('buka')){
 // 		div.classList.remove('divBaru');
 // 		alert('ok');
 // 	}
 // })