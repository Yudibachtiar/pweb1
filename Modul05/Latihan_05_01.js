$(document).ready
(function(){ //1.Dasar selektor
    $('#header').css('text-align','center')//Mengubah align text pada header
    $('li').css('margin','5px')//Memberikan margin pada semua<li>

    //2.Selektor atribut
    $('img[alt="Alumni Photo1"]').css('border','2px solid red'); //Mengubah border pada gambar dengan alt="Alumni Photo 1"

    //3.Selektor Hirarki
    $('#alumniList li').css('font-size','18px'); //Mengubah font size pada semua <li> di dalam #alumniList

    //4.Selektor filter
    $('li:even').css('color','blue'); //Mengubah warna text pada elemen <li> genap
    $('.featured').addClass('Highlight'); //MMenambahkan class pada hightlight pada elemen dengan class featured

    //Event handling untuk galeri foto
    $('.galeri img').onclick,function(){
        var src=$('this').attr('src');
        $('#modalimage').attr('src',src);
        $('#myModal').fadeIn();   
    };
    
    $('.modal.close').on('click',function(){
        $('#myModal').fadeOut();
    });

    $(window).on('click',function(event){
        if($(event.target).is('#myModal')){
            $('#myModal').fadeOut();
        }
    });
   });