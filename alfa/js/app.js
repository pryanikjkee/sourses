$(function () {

    $(".filterlist").click(function(event){
        // event.preventDefault();
        var searchIDs = $(".clickfilter input:checkbox:checked").map(function(){
          return $(this).val();
        }).get(); // <----
        // console.log(searchIDs);
        $('.action__item').hide();
        console.log( searchIDs.length);
        if(!searchIDs.length){
            $('.action__item').show();
        }
              
        $(searchIDs).each(function( index, value ) {
           
                $('.filter'+value).show(400); 
         
        });
        
    });

    $(".action").each(function(){
        if($(".action").hasClass("future")){
            $(".future #info__button").prop("disabled", true);
        }
    })
    if(navigator.userAgent.match(/Trident\/7\./)) {
        $(".locked__mounth").hide();
   }

})
