<?php
/**
 * @file
 * Default theme implementation for a single paragraph item.
 *
 * Available variables:
 * - $content: An array of content items. Use render($content) to print them
 *   all, or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity
 *   - entity-paragraphs-item
 *   - paragraphs-item-{bundle}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened into
 *   a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<?php 
$opacity = 1;
$myclass = "";
if($content['field_la_effect_blackout']){
    if($content['field_la_effect_blackout']['#items'][0]['value'] == 1) $opacity = 0.4;
}
if($content['field_la_effect_dimmed']){
    if($content['field_la_effect_dimmed']['#items'][0]['value'] == 1){
        $opacity = 0.4;
        $myclass = $myclass . " dimmed";
    }
}
?>

<!--id="text__with__bg" == paragraph -->
<div id="text__with__bg" class="<?php print $myclass; ?>" <?php if(isset($content['field_la_bg_color'])): ?> style="background: <?php print $content['field_la_bg_color']['#items'][0]['rgb']; ?>" <?php endif; ?>>

 

   

<a href="#" class="scroll-down" address="true"></a>
    <section class="bg__fixed" <?php if(isset($content['field_la_bg_img'])): ?> style="background: url(<?php print file_create_url($content['field_la_bg_img']['#items'][0]['uri']); ?>) center / cover no-repeat; ?>" <?php endif; ?>>
 <!--  <div id="iframe__main">
    <div class="embed-responsive embed-responsive-16by9">

<!--Insert only video id -->
<!--	<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php print $content['field_iframe']['#items'][0]['value']; ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

</div>
   
    </div>
	
-->	
   
        <?php if(isset($content['field_la_bg_video'])): ?>
        <div class="dimmed">
        <div class="hasvideo" >
    
            <video  autoplay muted loop playsinline  class="videotestjs b-lazy" id="bgvidheader" loop src="<?php print file_create_url($content['field_la_bg_video']['#items'][0]['uri']); ?>">
			<!--insert video-file-->
                 <source data-src="<?php print file_create_url($content['field_la_bg_video']['#items'][0]['uri']); ?>" type="<?php print $content['field_la_bg_video']['#items'][0]['filemime']; ?>"> 
            </video>
       <script>
          ;(function() {
            // Initialize
            var bLazy = new Blazy();
        })();
       </script>
        </div>
        </div>
        <?php endif; ?>
    </section>

	<?php if(isset($content['field_la_text'])): ?>
		<?php foreach ($content['field_la_text']['#items'] as $key => $value): ?>
			<?php $section_class = "text__paralax"; ?>
			<?php if($key > 0) $section_class = "text__paralax__sl2"; ?>
			<section class="<?php print $section_class;?> " <?php if($key == 0): ?> style="color: <?php print $content['field_la_header_color']['#items'][0]['rgb']; ?>;" <?php endif; ?>> 
		        <div class="container">
		            <div class="row">
		                <div class="col-12" >
		                    <?php print $value['value']; ?>
		                </div>
		            </div>
		        </div>
		    </section>
		<?php endforeach; ?>
	<?php endif; ?>

    <?php if(isset($content['field_la_text2'])): ?>
        <section class="text__paralax__sl2 transformed">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-uppercase text-center border-text">
                            <?php print $content['field_la_text2']['#items'][0]['value']; ?>
                        </div>
                    </div>
                </div>
            </div>
           <!--  -->
        </section>
    <?php endif; ?>
<script>
 $(function() {
    if ($(document).width() > 970) {
$(".bg__fixed").css({
    background:"unset"
})
    }






$('#iframe__main iframe').addClass('embed-responsive-item');

var oldSource = $('#iframe__main iframe').attr('src');
var newSource = oldSource + '&autoplay=1&mute=1&vq=hd720&loop=1&playlist=' + testyou;


var testyou = YouTubeGetID(oldSource);
console.log(testyou);
function YouTubeGetID(url){
  var ID = '';
  url = url.replace(/(>|<)/gi,'').split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
  if(url[2] !== undefined) {
    ID = url[2].split(/[^0-9a-z_\-]/i);
    ID = ID[0];
  }
  else {
    ID = url;
  }
    return ID;
}
var newSource = oldSource + '&autoplay=1&mute=1&vq=hd720&loop=1&playlist=' + testyou;
$('#iframe__main iframe').attr('src', newSource);
    $('.scroll-down').click (function() {
       
      $('html, body').animate({scrollTop: $('.text__paralax__sl2').offset().top }, 80);
      return false;
    });

    if (document.documentMode || /Edge/.test(navigator.userAgent)) {
     console.log("its bullshit browser");
     $("#bgvidheader").addClass('ieshit')
}
  });


</script>
    <script>
        $(function () {
    
            if ($(document).width() < 970) {
                var orientation =  screen.msOrientation || (screen.orientation || screen.mozOrientation || {}).type;
                    if (orientation === "landscape-primary") {
                        var scene__greet_mobile = new ScrollMagic.Scene({
                        triggerElement: "#text__with__bg",
                        duration: "500%"
                    })
                    .setClassToggle(" .bg__fixed", 'fixed')
                    .on("enter",function(event){
                        document.getElementById('bgvidheader').play();
                        console.log("start head");
                        $('#iframe__main iframe').attr('src', newSource);
                        
                    })
                    .on("leave",function(event){
                        document.getElementById('bgvidheader').pause();
                        console.log("leave head");
                        
                    })
                    .setTween(".bg__fixed", 0.1, {
                        opacity: <?php print $opacity; ?>
                    })
            
                    .setPin(".bg__fixed", {
                        pushFollowers: false
                    })
                    // 
                    // 
                    .addTo(controller__two__mobile); 
                    }else{
                        var scene__greet_mobile = new ScrollMagic.Scene({
                        triggerElement: "#text__with__bg",
                        duration: "300%"
                    })
                    .setClassToggle(" .bg__fixed", 'fixed')
                   
                    .on("leave",function(event){
                        document.getElementById('bgvidheader').pause();
                        
                    })
                    .on("enter",function(event){
                        document.getElementById('bgvidheader').play();
                        console.log("start head");
                        
                    })
                    .setTween(".bg__fixed", 0.1, {
                        opacity: <?php print $opacity; ?>
                    })
            
                    .setPin(".bg__fixed", {
                        pushFollowers: false
                    })
                    // 
                    // 
                    .addTo(controller__two__mobile); 
                    }
              
                    var dimmed__scroll = new ScrollMagic.Scene({
                        triggerElement: ".text__paralax",
                        offset:60,
                      

                        duration: "50%"
                    })
                    .setTween(".text__paralax__sl2 ", 0.1, {
                        opacity: 1
                    })
                   
                    // .setPin(".text__paralax__sl2", {
                    //     pushFollowers: false
                    // })
                   
                    .addTo(controller__two__mobile);  
                    if ($('#text__with__bg').hasClass('transform')){
                    var scene__quote__wipe = new ScrollMagic.Scene({
                                    triggerElement: ".text__paralax",
                                    duration:650

                                })
                               .setTween('.text__paralax__sl2',{y:'-40%',ease:Linear.easeNone})
                               
                                .addTo(controller__two__mobile);
                }
            } else {



                if ($('#text__with__bg').hasClass('transform')){
                    var scene__quote__wipe = new ScrollMagic.Scene({
                                    triggerElement: ".transformed",
                                    duration:550

                                })
                               .setTween('.transformed',{y:'-40%',ease:Linear.easeNone})
                               
                                .addTo(controller);
                }
               ;
                var centered__scroll__text = new ScrollMagic.Scene({
                        triggerElement:  document.querySelectorAll('.text__paralax__sl2')[1],
                      

                        duration: "60%"
                    })
                    .setPin(document.querySelectorAll('.text__paralax__sl2')[1], {
                        pushFollowers: true
                    })
                   
                    .addTo(center__hook);
                    var dimmed__scroll__text = new ScrollMagic.Scene({
                        triggerElement: "#text__with__bg",
                      

                        duration: "40%"
                    })
                    .setTween(".bg__fixed", 0.1, {
                        opacity: <?php print $opacity; ?>
                    })
                   
                    .addTo(controller__two);
                    // 
                    var dimmed__scroll = new ScrollMagic.Scene({
                        triggerElement: ".text__paralax",
                        offset:60,
                      

                        duration: "50%"
                    })
                    .setTween(".text__paralax__sl2 ", 0.1, {
                        opacity: 1
                    })
                    // .setClassToggle(".scroll-down", 'show__down')
                    // .on('enter',function(event){
                    //     $('.scroll-down').addClass('d-block');
                    //     $('.scroll-down').removeClass('show__down');
                    // })
                    // .on('leave',function(event){
                    //     $('.scroll-down').addClass('show__down');
                    //     $('.scroll-down').removeClass('d-block');
                    // })
                    .setPin(".text__paralax__sl2", {
                        pushFollowers: false
                    })
                   
                    .addTo(controller__two);
                    // 
                    var dimmed__icon = new ScrollMagic.Scene({
                        triggerElement: ".text__paralax",
                        offset:60,
                      

                        duration: "30%"
                    })
                   
                    // .setClassToggle(".scroll-down", 'show__down')
                    .on('enter',function(event){
                        $('.scroll-down').addClass('d-block');
                        $('.scroll-down').removeClass('show__down');
                       
                    })
                    .on('leave',function(event){
                        $('.scroll-down').addClass('hide__me');
                        $('.scroll-down').removeClass('d-block');
                    })
                   
                   
                    .addTo(controller__two);
                    // 
//  edge
if (document.documentMode || /Edge/.test(navigator.userAgent)) {
    var scene__ie__other =new ScrollMagic.Scene({
                        triggerElement: "#text__with__bg",

                        duration: "350%"
                        // was 250
                    })
                    .setPin(".bg__fixed", {
                        pushFollowers: false
                    })
          
                   .setClassToggle(" .bg__fixed", 'fixed')
                   
                   
                    .addTo(controller__two);

}else{
    var scene__greet = new ScrollMagic.Scene({
                        triggerElement: "#text__with__bg",

                        duration: "350%"
                        // was 250
                    })
                    .setPin(".bg__fixed", {
                        pushFollowers: false
                    })
                   .setTween(".bg__fixed",{y:'-2%',ease:Linear.easenone})
                   
                   
                   
                    .addTo(controller__two);
}
                    
                    // 
              
            }
         
        })
		
		
		
		

    </script>
</div>
<!-- END-->
<script>

document.addEventListener('DOMMouseScroll', function(event) {
    Scroll(document.body, document.body.scrollTop + event.detail * 10, 300);
    return false;
}, false);

</script>
